<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use XisoDev\EloquentSluggable\SluggableScopeHelpers;

/**
 * Class PostShortConfigWithScopeHelpers
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostShortConfigWithScopeHelpers extends Post
{

    use SluggableScopeHelpers;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug_field'
        ];
    }
}
