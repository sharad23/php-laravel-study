<?php 

namespace Sharad\Rajeev;
use Sharad\Rajeev\Commands\TestCommand; 
use Illuminate\Support\ServiceProvider;
use App;

class RajeevServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('sharad/rajeev');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		//
		/*$this->app['supyo'] = $this->app->share(function($app)
		  {
		    return new MyClass(new Product);
		  });
        */
        
        App::bind('supyo',function($app){

        	 return new MyClass(new Product); 
        });
        $this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Supyo', 'Sharad\Rajeev\Facades\MyClass');
		});
		
        
		$this->app['mycommand'] = $this->app->share(function($app)
        {
            return new TestCommand;
        });
        $this->commands('mycommand');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('supyo');
	}

}
