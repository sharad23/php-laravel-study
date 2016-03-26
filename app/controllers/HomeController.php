<?php

//use App\Classes\Sharad; 
class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    //public function __construct(Sharad\Rajeev\ProductInterface $test)
    public function __construct(Response $response)
	{
		$this->response = $response;
	}
	public function index()
	{    
		//App::make('jjj')->test();
		//$sharad = new App\Classes\Sharad;
		//$sharad->test();
		//$sharad = new Sharad;
		//$sharad->test();
        //include(app_path().'/functions/test.php');
        //test();
         $rajeev = new Rajeev;
         $rajeev->test();
        //$madhu = new Madhu;
        //echo $madhu->test();
        //echo App::make('madhu')->test();
        //Shiraj::test();
        //echo Supyo::index();
        //$telnet = App::make('telnet');
        //$telnet->login("developers","devtest");
        
         //echo App::make('supyo')->index();
		//$tst1 = new  Sharad\Rajeev\MyClass;
		//echo $tst1->index();
        
        //return $this->response->make('Hello World!'); 
        //echo Supyo::index();
    }

   

}
