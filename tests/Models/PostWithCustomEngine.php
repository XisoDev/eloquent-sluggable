<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use XisoDev\Slugify\Slugify;


/**
 * Class PostCustomEngine
 *
 * A test model that customizes the Slugify engine with custom rules.
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithCustomEngine extends Post
{

    /**
     * @param \XisoDev\Slugify\Slugify $engine
     * @param string $attribute
     * @return \XisoDev\Slugify\Slugify
     */
    public function customizeSlugEngine(Slugify $engine, $attribute)
    {
        $engine->addRule('e', 'a');
        $engine->addRule('i', 'a');
        $engine->addRule('o', 'a');
        $engine->addRule('u', 'a');

        return $engine;
    }
}
