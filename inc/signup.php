<?php
session_start();
require('config.php');
require('db_queries.php');
$message='';
//Check For Submit
if(isset($_POST['regbtn'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
    
    //Run Query
   $register=signup($conn,$name,$email,$phone,$address,$pwd); 
   if($register['result'] === 0){
            $message=$register['message'].' Already Exists';
            echo $message;
   }

}

?>  