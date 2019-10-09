<?php

namespace Marcusmyers\LaravelGithubActions;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcusmyers\LaravelGithubActions\Skeleton\SkeletonClass
 */
class LaravelGithubActionsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-github-actions';
    }
}
