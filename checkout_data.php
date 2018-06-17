<?php
session_start();

if(isset($_POST['city']) && isset($_POST['area']) )
{
	$_SESSION['city']= $_POST['city'];
	$_SESSION['area']= $_POST['area'];
    echo $_SESSION['city']." ".$_SESSION['area'];
}
if(isset($_POST['name']) && isset($_POST['email']) )
{
	$_SESSION['guest_name']= $_POST['name'];
	$_SESSION['guest_email']= $_POST['email'];
  
}

if(isset($_POST['book_date']) && isset($_POST['book_time']) && isset($_POST['book_min']))
{
	$_SESSION['book_date']= date('Y-m-d',strtotime($_POST['book_date']));
	$_SESSION['book_time']= $_POST['book_time'].":".$_POST['book_min'];
	
	  if(isset($_SESSION['guest_name']) && isset($_SESSION['guest_email']) && !isset($_SESSION['id1']) && !isset($_SESSION['username1']))
	 { 
	     $flag1=1;
	echo $flag1;
	 }
else
{ 
$flag1=0;
	echo $flag1;
}
    
}

if(isset($_POST['address']) && !isset($_POST['phone_v1']))
{
	$_SESSION['landmark']= $_POST['landmark'];
	$_SESSION['address']= $_POST['address'];
    echo "City : ".$_SESSION['city']." , Area : ".$_SESSION['area']." , Landmark : ".$_SESSION['landmark']." , Address : ".$_SESSION['address'];
}

if(isset($_POST['address']) && isset($_POST['phone_v1']))
{
	$_SESSION['landmark']= $_POST['landmark'];
	$_SESSION['address']= $_POST['address'];
	$_SESSION['phone_number']= $_POST['phone_v1'];
	
  	
	
    echo "City : ".$_SESSION['city']." , Area : ".$_SESSION['area']." , Landmark : ".$_SESSION['landmark']." , Address : ".$_SESSION['address']." , Phone : ".$_SESSION['phone_number'];


}

if(isset($_POST['radio_data']))
{

	$_SESSION['radio_data']= $_POST['radio_data'];
	echo $_SESSION['radio_data'];
 
} 

if(isset($_POST['radio_data2']))
{

//fetch wallet points	
require('inc/config.php');
if(isset($_SESSION['id1']))
{
$points1 = "select points from users_meta where user_id=".$_SESSION['id1'];
$points2 = mysqli_query($conn, $points1);

if($points2==true)
{
$points3=mysqli_fetch_assoc($points2);
}
}
$wallet_money=$points3['points'];
if($wallet_money==0)
{
    $_SESSION['radio_data2']=0;
    $_SESSION['radio_data3']=0;
$_SESSION['radio_data1']=0;
    echo "You  Don't  have wallet money to use";
}
else{
$_SESSION['radio_data2']=$wallet_money;
$_SESSION['radio_data3']=0;
$_SESSION['radio_data1']=0;
echo "Your Wallet Money is ".$_SESSION['radio_data2'];
}
}


if(isset($_POST['radio_data3']))
{

	$_SESSION['radio_data3']= $_POST['radio_data3'];
	$_SESSION['radio_data2']=0;
$_SESSION['radio_data1']=0;
	echo $_SESSION['radio_data3']." ".$_SESSION['radio_data2']." ".$_SESSION['radio_data1'];
 
} 

if(isset($_POST['radio_data1']) && isset($_POST['code']) )
{

	
	$_SESSION['radio_data1']= $_POST['code'];
	$_SESSION['radio_data2']=0;
	$_SESSION['radio_data3']=0;
	echo $_SESSION['radio_data1']." ".$_SESSION['radio_data2']." ".$_SESSION['radio_data3'];
 
} 


?>  