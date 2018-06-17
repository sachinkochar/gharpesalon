<?php
session_start();
include('inc/config.php');

if(isset($_POST["pid"]))
{
 $id = $_POST["pid"];
 $ind = $_POST["tid"]; 
 $sql = 'UPDATE cata SET itmnu="'.$ind.'"  where `id`="'.$id.'"';
 $conn->query($sql); 
 echo "<script>alert('Update Sucessfully');</script>";
 
}

        




             
