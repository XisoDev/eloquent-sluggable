<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use Illuminate\Support\Collection;


/**
 * Class PostWithCustomSuffix
 *
 * A test model that uses a custom suffix generation method.
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithCustomSuffix extends Post
{

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'uniqueSuffix' => function ($slug, $separator, Collection $list) {
                    $size = count($list);

                    return chr($size + 96);
                }
            ]
        ];
    }
}
