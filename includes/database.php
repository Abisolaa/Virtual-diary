<?php

// mysql://b3c0eeaf180f87:fabdc3d2@us-cdbr-east-05.cleardb.net/heroku_98e98cf318882e8?reconnect=true

$devType =  "dev";



$host =  ($devType == "dev" ) ?  "localhost" : "us-cdbr-east-05.cleardb.net" ;
$user = ($devType == "dev" ) ? "root" : "b3c0eeaf180f87" ;
$password = ($devType == "dev" ) ? "" : "fabdc3d2";
$databaseName = ($devType == "dev" ) ? "virtual" : "heroku_98e98cf318882e8";



$mysqli =  new mysqli($host,$user,$password,$databaseName);


if($mysqli){
    //echo "connection successful";
}
 else{
     echo "connection failed";
 }