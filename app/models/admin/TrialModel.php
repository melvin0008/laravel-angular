<?php

use Couch\CouchDB\couchClient;

class TrialModel{

	public static function getLogin($dbname,$id,$folder,$viewname)
    {
      	$return=[];
        $client= new couchClient(Config::get('database.connections.couchdb.couchReadDsn'),$dbname);
        //$dbname=$client->getDatabaseName();
        $val=$client->key($id)->getView($folder,$viewname);
        foreach($val->rows as $row)
        {
            $return[]=$row->value;
        }
        return $return;
    }
}
