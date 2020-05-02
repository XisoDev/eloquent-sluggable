<?php namespace XisoDev\EloquentSluggable;

use XisoDev\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SluggableObserver
 *
 * @package XisoDev\EloquentSluggable
 */
class SluggableObserver
{

    /**
     * @var \XisoDev\EloquentSluggable\Services\SlugService
     */
    private $slugService;

    /**
     * @var \Illuminate\Contracts\Events\Dispatcher
     */
    private $events;

    /**
     * SluggableObserver constructor.
     *
     * @param \XisoDev\EloquentSluggable\Services\SlugService $slugService
     * @param \Illuminate\Contracts\Events\Dispatcher $events
     */
    public function __construct(SlugService $slugService, Dispatcher $events)
    {
        $this->slugService = $slugService;
        $this->events = $events;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @return boolean|null
     */
    public function saving(Model $model)
    {
        return $this->generateSlug($model, 'saving');
    }

    /**
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $event
     * @return boolean|void
     */
    protected function generateSlug(Model $model, string $event)
    {
        // If the "slugging" event returns false, abort
        if ($this->fireSluggingEvent($model, $event) === false) {
            return;
        }
        $wasSlugged = $this->slugService->slug($model);

        $this->fireSluggedEvent($model, $wasSlugged);
    }

    /**
     * Fire the namespaced validating event.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $event
     * @return mixed
     */
    protected function fireSluggingEvent(Model $model, string $event)
    {
        return $this->events->until('eloquent.slugging: ' . get_class($model), [$model, $event]);
    }

    /**
     * Fire the namespaced post-validation event.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $status
     */
    protected function fireSluggedEvent(Model $model, string $status)
    {
        $this->events->dispatch('eloquent.slugged: ' . get_class($model), [$model, $status]);
    }
}
