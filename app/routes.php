<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::group(array('domain' => 'subdomain1.domain.com'), function()   //change the subdomain and domain name
{

   Route::get('/', function()
	{
	return View::make('subdomain1.index');
	});
   Route::get('/',function(){
   		return "Yoman";
   });

});
Route::group(array('domain' => 'subdomain2.domain.com'), function()
{

   // Route::get('/','trialController@publicsite' );
		Route::get('/queue',function(){
		Queue::push(function($job) 
		{
			Log::info('Queues are pretty damn cool');
			$job->delete();

		});    
		
	});


});
