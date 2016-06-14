<?php namespace LivePixel\MercadoPago\Providers;

use Illuminate\Support\ServiceProvider;
use LivePixel\MercadoPago\MP;

class MercadoPagoServiceProvider extends ServiceProvider 
{

	public function boot()
	{
		
		
	}

	public function register()
	{
            $this->app->singleton('MP', function(){ return new MP(env('MP_APP_ID'), env('MP_APP_SECRET')); });
	}
}