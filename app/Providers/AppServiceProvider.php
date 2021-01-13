<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\view;
use App\Models\catagory;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {    
        Schema::defaultStringLength(191);
        $catagory=catagory::select('id','name')->get();
        view::share('catagory',$catagory);
       
    }
}
