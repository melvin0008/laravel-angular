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

use Melvin\CouchDB\couch;
use Melvin\CouchDB\couchAdmin;
use Melvin\CouchDB\couchClient;
use Melvin\CouchDB\couchDocument;
use Melvin\CouchDB\couchReplicator;
*/
Route::group(array('domain' => 'admin.gov.localhost.com'), function()
{

   Route::get('/', function()
	{
	return View::make('admin.index');
	});
   Route::get('/book',function(){
   		return "Yoman";
   });

});
Route::group(array('domain' => 'public.gov.localhost.com'), function()
{

   // Route::get('/','trialController@publicsite' );
		Route::get('/gomi',function(){
		Queue::push(function($job) 
		{
			Log::info('Queues are pretty damn cool');
			$job->delete();

		});    
		
	});


});
Route::group(array('domain' => 'spacedeck.gov.localhost.com'), function()
{

    Route::get('/trial','trialController@checkLogin' );


});
/*
function setDB($name)
{
Config::set('database.connections.couchdb.dbname',"trial");
$connection = DB::connection('couchdb');
return $connection;
	Cache::put(23, 85, 3000);
	


	$return =array();
	$client= new couchClient(Config::get('database.connections.couchdb.couchWriteDsn'),"trial");
	//$dbname=$client->getDatabaseName();
	$val=$client->key('f03dc249ef30f457548ea52ed2000bb8')->getView('get','getdetails');
	foreach($val->rows as $row)
	{
		$return[]=$row->value;

	}
	$redis = Redis::connection();
 
// Set add data in your cache server
$redis->set('domain', 'cavaencoreparlerdebits.fr');
 
// Now you can get back your value whenever you want
// Take to not overload it ;-)
$domain = $redis->get('domain');
	return $domain;
	//$ret=Config::get('database.connections.couchdb.couchWriteDsn');
	//return $ret;
	//return $dbname;
	/*$id="f03dc249ef30f457548ea52ed2000bb8";
$connection=setDB("trial");
$db=json_encode($connection->findDocument($id));
return $db;
}
// $client = new \GuzzleHttp\Client();
		// $txtDict['workingkey']='11311fk09029s04a8416';
		// $txtDict['to']='9049733143';
		// $txtDict['message']="Hello";
		// $txtDict['sender']='FEECTR';
		// $response = $client->get('http://alerts.sinfini.com/api/web2sms.php',['query'=>$txtDict]);
		// dd($response->getBody());
		*/



//Mailing 

 // public function admin()
 //    {
        
 //    	Queue::push(function($job) 
 //        {
 //            $in=1;
 //            Log::info($in);
 //            $job->delete();
 //        });
 //            $data['pig']="anurag";
 //        Mail::queue('emails.welcome', $data, function($message)
 //         {   
 //            $message->to('melvin.philips@feecounter.com', 'Melvin Philips')->subject('Welcome!');
 //        });
 //        $name="Mail Sent";
 //        return View::make('admin.first',compact('name'));