<?php
namespace App\Classes;
use Illuminate\Support\ServiceProvider;
use App;

class FacadeServiceProvider extends ServiceProvider {
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() 
    {
        
        /*$this->app->bind('Shiraj', function(){
            
            return new Sharad;
        
        });
        */
        App::bind('Shiraj', function(){
            
            return new Sharad;
        
        });
        
    }
}