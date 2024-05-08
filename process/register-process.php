<?php 
// add database connection
require_once('../config.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $checkPassword = $_POST["re-password"];

    $sql = "SELECT * FROM user WHERE username = '$username'";

    $result = $connection->query($sql);
    //$result = mysqli_query($connection, $sql);

    $num = mysqli_num_rows($result);

    if($num == 0){
        if($password == $checkPassword){
            $hashedPass = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO user ('username', 'password') 
                    VALUES ('$username', '$hashedPass')";

            $result = $connectio->query($sql);
            //$result = mysqli_query($connection, $sql);
            
            if($result){
                
            }
        }else{
            //password not match
        }
    }

    if($num>0){
        //username not available
    }
}


