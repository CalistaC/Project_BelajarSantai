<?php session_start();

$conn = mysqli_connect('localhost','20si1','belajarsantai');

if(!$conn){
    die('Database tidak terhubung');
}

$db = $conn->select_db('20si1');

function is_logged_in(){
    if(isset($_SESSION['username'])){
        return true;
    } else {
        return false;
    }
}