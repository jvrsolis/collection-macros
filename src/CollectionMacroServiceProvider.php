<?php

namespace JvrSolis\CollectionMacros;

use Illuminate\Support\Collection;

use Illuminate\Support\ServiceProvider;

/**
 * Class CollectionMacroServiceProvider
 *
 * A service provider level class
 * used to introduce \Illuminate\Support\Collection
 * macros.
 *
 * @package JvrSolis\CollectionMacros
 */
class CollectionMacroServiceProvider extends ServiceProvider
{
    /**
     * Register the array macros.
     *
     * @return void
     */
    public function register()
    {
        Collection::make(glob(__DIR__ . '/macros/*.php'))
            ->mapWithKeys(function ($path) {
                return [$path => pathinfo($path, PATHINFO_FILENAME)];
            })
            ->reject(function ($macro) {
                return Collection::hasMacro($macro);
            })
            ->each(function ($macro, $path) {
                require_once $path;
            });
    }
}