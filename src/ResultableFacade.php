<?php

namespace MacsiDigital\Resultable;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Macsidigital\Resultable\Skeleton\SkeletonClass
 */
class ResultableFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'resultable';
    }
}
