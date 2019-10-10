<?php

namespace Marcusmyers\LaravelGithubActions;

use Illuminate\Support\ServiceProvider;

class LaravelGithubActionsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ( !file_exists(base_path('.github'))) {
            mkdir(base_path('.github'));
        }

        if ( !file_exists(base_path('.github/workflows'))) {
            mkdir(base_path('.github/workflows'));
        }
        $this->publishes([
            __DIR__.'/../github-action-files/ci.yml' => base_path('.github/workflows/ci.yml'),
        ], 'ci-actions');

        $this->publishes([
            __DIR__.'/../github-action-files/dusk.yml' => base_path('.github/workflows/dusk.yml'),
        ], 'dusk-actions');

        $this->publishes([
            __DIR__.'/../github-action-files/ci.yml' => base_path('.github/workflows/ci.yml'),
            __DIR__.'/../github-action-files/dusk.yml' => base_path('.github/workflows/dusk.yml'),
        ], 'all-actions');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
