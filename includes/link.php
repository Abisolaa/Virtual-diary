<?php


session_start();

$loggedInUser = $_SESSION["id"]; 

include "./includes/database.php"; 


$sqlSelect = "SELECT * FROM `secret_key` WHERE user_id = '$loggedInUser'";

$Query = mysqli_query($mysqli, $sqlSelect);		
												
$rowcount = mysqli_num_rows($Query); 

if($rowcount > 0 ){

}else{
   
    echo explode('/',$_SERVER["REQUEST_URI"]) ;
    // if(explode('/',$_SERVER["REQUEST_URI"])[2] != "secret.php"){
    // echo "<script> window.location.replace('secret.php') </script>";
    // }
}   


?>

