<?php 

namespace Sharad\Rajeev;
use View;
use Config;
class MyClass{
        
	    public function __construct(ProductInterface $product){
          
            $this->product = $product;

	    }
	    public function index()
	    {
            //return View::make('rajeev::test');
            //echo Config::get('rajeev::enabled');
            return $this->product->watch();
	    }

	    public function enable()
		{
		    Config::set('rajeev::enabled', true);
		}


		public function disable()
		{
		    Config::set('rajeev::enabled', false);
		}

}


?>