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
            __DIR__.'/../github-action-files/ci-app.yml' => base_path('.github/workflows/ci-app.yml'),
            __DIR__.'/../github-action-files/env.ci' => base_path('.env.ci'),
        ], 'app-actions');

        $this->publishes([
            __DIR__.'/../github-action-files/ci-package.yml' => base_path('.github/workflows/ci-package.yml'),
        ], 'package-actions');

        $this->publishes([
            __DIR__.'/../github-action-files/dusk.yml' => base_path('.github/workflows/dusk.yml'),
            __DIR__.'/../github-action-files/env.dusk.testing' => base_path('.env.dusk.testing'),
        ], 'dusk-actions');

        $this->publishes([
            __DIR__.'/../github-action-files/ci-app.yml' => base_path('.github/workflows/ci-app.yml'),
            __DIR__.'/../github-action-files/env.ci' => base_path('.env.ci'),
            __DIR__.'/../github-action-files/dusk.yml' => base_path('.github/workflows/dusk.yml'),
            __DIR__.'/../github-action-files/env.dusk.testing' => base_path('.env.dusk.testing'),
        ], 'all-app-actions');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
    }
}
