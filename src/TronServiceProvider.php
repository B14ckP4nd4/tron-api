<?php


namespace BlackPanda\TronAPI;

use Illuminate\Support\ServiceProvider;

class TronServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('tronapi',function (){
            return new Tron();
        });
    }

}
