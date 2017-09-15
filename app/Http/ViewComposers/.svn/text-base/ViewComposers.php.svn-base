<?php namespace App\Http\ViewComposers;

use View;
use DB;
use Cache;
use Illuminate\Support\ServiceProvider;
class ViewComposers extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // 使用类来指定视图组件
        
        View::composer(['common/bodyNavs','mobile/common/bodyNavs'], function($view){
            $sites = \App\Site::all()->sortByDesc(function($site){
                return $site->lives()->count();
            });
            $view->with('sites',$sites);
        });
        View::composer(['common/bodyHotsNavs','mobile/common/bodyHotsNavs'], function($view){
            $game_name_count_raw = DB::raw('count(*) as total');
            $games = \App\Live::select('game_name', $game_name_count_raw)->where('updated_at','>',date("Y-m-d H:i:s",strtotime("-10 minute")) )->orderby('total','desc')->groupBy('game_name')->get();
            $view->with('games',$games);
        });
                   
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}