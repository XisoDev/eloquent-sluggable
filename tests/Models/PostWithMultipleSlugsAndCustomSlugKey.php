<?php namespace XisoDev\EloquentSluggable\Tests\Models;

/**
 * Class PostWithMultipleSlugsAndCustomSlugKey
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndCustomSlugKey extends PostWithMultipleSlugsAndHelperTrait
{

    protected $slugKeyName = 'dummy';
    
}
