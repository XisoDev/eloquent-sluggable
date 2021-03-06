<?php namespace XisoDev\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMaxLength
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithMaxLength extends Post
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
                'maxLength' => 10,
            ]
        ];
    }
}
