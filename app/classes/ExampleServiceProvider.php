<?php 

    namespace App\Classes;
    use Illuminate\Support\ServiceProvider as SharadProv;
    use App;
	class ExampleServiceProvider extends SharadProv {
	 
	  public function register(){
         
       /* $this->app->booting(function()
        {
	  	    $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Madhu','App\Classes\Sharad');
        });
       */
        /*App::bind('madhu',function($app){

        	 return new App\Classes\Sharad(); 
        });
        */
       // $this->app->bind('Sharad\Rajeev\ProductInterface','Sharad\Rajeev\Product');
           $this->app['jjj'] = new App\Classes\Sharad();
     
         
    }
	 
	}
?>