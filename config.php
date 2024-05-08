<?php 

$dbserver = 'localhost';
$dbuser = 'root';
$dbpassword = 'root';
$dbname = 'todo_db';

$connection = new mysqli($dbserver, $dbuser, $dbpassword, $dbname);

//check connection
if($connection->connect_error){
    exit("Failed to connecti to MySQL");
} else {
    echo "success!";
}


?>