<?php

namespace Mahmudz\BanglaSomoy;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mahmudz\BanglaSomoy\Skeleton\SkeletonClass
 */
class BanglaSomoyFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bangla-somoy';
    }
}
