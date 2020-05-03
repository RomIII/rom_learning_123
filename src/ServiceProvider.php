<?php
/**
 * Created by PhpStorm.
 * User: Rom
 * Date: 03.05.2020
 * Time: 14:02
 */

namespace Rom\Calc;


use Rom\Calc\Calc\Calc;
use Rom\Calc\Calc\Contracts\CalcInterface;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public function register(){
        $this->app->bind(CalcInterface::class, Calc::class);
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/calc.php');
        $this->loadViewsFrom(__DIR__ . '/../views', 'mycalc');

        $this->publishes([
            __DIR__.'/../config/calc.php'=>config_path('calc.php')
        ],
           'mycalc-config' );

        $this->mergeConfigFrom(__DIR__.'/../config/calc.php', 'calc');
    }
}