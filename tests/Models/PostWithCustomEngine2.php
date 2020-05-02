<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use XisoDev\Slugify\Slugify;


/**
 * Class PostCustomEngine2
 *
 * A test model that customizes the Slugify engine with other custom rules.
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithCustomEngine2 extends Post
{

    /**
     * @param \XisoDev\Slugify\Slugify $engine
     * @param string $attribute
     * @return \XisoDev\Slugify\Slugify
     */
    public function customizeSlugEngine(Slugify $engine, $attribute)
    {
        return new Slugify(['regexp'=>'|[^A-Za-z0-9/]+|']);
    }
}
