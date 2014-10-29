<?php

use Melvin\CouchDB\couchClient;

class TrialModel{

	public static function getName()
	{
		$client= new couchClient(Config::get('database.connections.couchdb.couchWriteDsn'),"trial");
		//$dbname=$client->getDatabaseName();
		$val=$client->key('f03dc249ef30f457548ea52ed2000bb8')->getView('get','getdetails');
		foreach($val->rows as $row)
		{
			$return[]=$row->value;
		}
		return $return;
	}
}
