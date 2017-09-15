<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        \Blade::extend(function($view,$compiler){
            return preg_replace('/\@permit\((.+)\)/', '<?php $permits = explode(",",$1); $user = \Auth::user(); if($user !== null && $user->checkPermissions($permits)){ echo \'', $view);
        });

        \Blade::extend(function($view,$compiler){
            $pattern = $compiler->createPlainMatcher('endpermit');
            dump(preg_replace($pattern, '\';} ?>', $view));
            return preg_replace($pattern, '\';} ?>', $view);
        });
    }

    public function register()
    {
        //
    }
}