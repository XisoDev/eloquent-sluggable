<?php namespace XisoDev\EloquentSluggable\Tests\Models;

use XisoDev\EloquentSluggable\SluggableScopeHelpers;

/**
 * Class PostWithMultipleSlugsAndPrimary
 *
 * @package XisoDev\EloquentSluggable\Tests\Models
 */
class PostWithMultipleSlugsAndHelperTrait extends PostWithMultipleSlugs
{

    use SluggableScopeHelpers;

}
