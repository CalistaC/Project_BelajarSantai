<?php 
session_start();

$server = "localhost";
$username = "20si1";
$password = "uphmedan";
$db = "belajarsantai";

$conn = mysqli_connect($server, $username, $password, $db);

if(!$conn){
    die('Database tidak terhubung');
}

function is_logged_in(){
    if(isset($_SESSION['username'])){
        return true;
    } else {
        return false;
    }
}