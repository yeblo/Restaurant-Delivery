<?php


$host = 'localhost';
$username ='root';
$password ='';
$db_name ='Passion';


$conn = new MySQLi($host, $username, $password, $db_name); 


if($conn->connect_error){
    die('Database connect error: '.$conn->connect_error);
}





?>