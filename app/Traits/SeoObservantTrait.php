<?php

namespace App\Traits;

use App\Observers\SeoObserver;

trait SeoObservantTrait
{
    public static function bootSeoObservantTrait()
    {
        static::observe(new SeoObserver);
    }
}
