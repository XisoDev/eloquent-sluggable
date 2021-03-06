<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use XisoDev\Slugify\Slugify;

/**
 * Class PostWithForeignRuleset
 *
 * A test model that customizes the Slugify engine with a foreign ruleset.
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithForeignRuleset extends Post
{

    /**
     * @param \XisoDev\Slugify\Slugify $engine
     * @param string $attribute
     * @return \XisoDev\Slugify\Slugify
     */
    public function customizeSlugEngine(Slugify $engine, $attribute)
    {
        $engine->activateRuleSet('esperanto');

        return $engine;
    }
}
