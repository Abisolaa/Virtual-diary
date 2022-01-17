<?php

$host =  "localhost";
$user = "root";
$password = "";
$databaseName = "virtual";
$mysqli =  new mysqli($host,$user,$password,$databaseName);


if($mysqli){
    //echo "connection successful";
}
 else{
     echo "connection failed";
 }