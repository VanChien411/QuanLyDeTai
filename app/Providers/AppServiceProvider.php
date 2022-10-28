<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PHPUnit\TextUI\XmlConfiguration\Logging\Text;
use TijsVerkoyen\CssToInlineStyles\Css\Property\Property;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    protected $data;
    protected $name;
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
        //

     
    }
}