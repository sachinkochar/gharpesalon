<?php
include('inc/config.php');
session_start();
$addedon=$_POST["addedon"];
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];

$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$udf1=$_POST["udf1"];
$udf2=$_POST["udf2"];
$udf3=$_POST["udf3"];
$udf4=$_POST["udf4"];
$add1=$_POST["address1"];
$add2=$_POST["address2"];
$city=$_POST["city"];
$state=$_POST["state"];
$country=$_POST["country"];
$zipcode=$_POST["zipcode"];
$phone=$_POST["phone"];
$salt="W0Aqo4ddll";
$official_email="info@gharpesalon.com"
?>
<!-- Header Include -->
<?php include("inc/header.php"); ?>



<?php


// Salt should be same Post Request 

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
  } else {
        $retHashSeq = $salt.'|'.$status.'|||||||'.$udf4.'|'.$udf3.'|'.$udf2.'|'.$udf1.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
         }
		 $hash = hash("sha512", $retHashSeq);
       if ($hash != $posted_hash) {
	       echo "Invalid Transaction. Please try again";
		   } else {
		       
		       
		       $uid=$udf4;
		       
                function GetSfid(){
                $sp_id = rand(19999999, 99999999);
                return $sp_id;
                }
		       
		       $f=GetSfId();
                $query = "SELECT * FROM cart WHERE uid='$uid' "; 
                $result = mysqli_query($conn, $query);
                $firms = mysqli_fetch_all($result, MYSQLI_ASSOC);
		       foreach($firms as $firm) :
		       $a=$firm['pid'];
		       $b=$firm['qty'];
		       $c=$firm['pr'];
		       $d=$firm['tpr'];
		       $e=$firm['uid'];
		       
                $sql = "INSERT INTO order_history(pid,qty,pr,tpr,uid,orderid) 
                VALUES ('$a','$b','$c','$d','$e','$f')";				       
                if ($conn->query($sql) === TRUE) 
                {}   
		       
		       
		       endforeach;
		       
		       $amt=$amount*9/100;
		       $gamt=$amt*2;
		       $tamt=$amount+$gamt;
		       $odd=$udf2."".$udf3;
		       $sql = "INSERT INTO order_payment(amt,cgst,sgst,total,date_order,tran_no,uid,orderid,status) 
                VALUES ('$amount','$amt','$amt','$tamt','$odd','$txnid','$e','$f','P')";				       
                if ($conn->query($sql) === TRUE) 
                {}
                
                 $sql = "INSERT INTO billing_address(address1,address2,email,city,state,country,zipcode,phone,date,time,mintus,orderid,uid) 
                VALUES ('$add1','$add2','$email','$city','$state','$country','$zipcode','$phone','$udf2','$udf3','00','$f','$e')"; 				       
                if ($conn->query($sql) === TRUE) 
                {}
		       
		       
                $sql3 = "DELETE FROM cart WHERE uid='$e'";	
                if ($conn->query($sql3) === TRUE) 
                {}else{}
		       
		       
		       
		            $email_from = $official_email;
					$subject = 'Ghar Pe Saloon ';
					//$email_to = 'root@myblackhat.org';
					$email_to = $email;

					$body =  'Order Details:-'."\n\n".' Thanks For Submitting Order Your Successfully Completed. But Now Approve Status Is Panding  Order ID Is : ' . $f . ", " . ' With Amount: ' . $tamt . "\n\n" . 'Booking Date/Time: ' . $udf2 ."\n\n". 'Time :'.$udf3 ."\n\n" . 'Payment Tran No: ' . $txnid.'';

					$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
		       
		       
		       
		       
		       

		       
		       
		       
		       
		       
		       
		       
		       
		       
		              ?>
		       <div style="min-height:550px;" class="container">
    
 <center><h2 class="custom-heading1">Thank You <?php echo $firstname ?></h2></center><br>
 
 <div class="panel panel-default">
     
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
         <a data-toggle="collapse" data-parent="#accordion" href="#login">Order Detail </a>
        </h4>
      </div>
      <div  id="login" class="panel-collapse collapse in">
          <div class="panel-body">
           <div class="row">
           <div class="col-md-6 col-xs-6 col-sm-6">
           <ul class="list-inline">
           <li>Transaction No: <?php echo $txnid; ?></li>
           <li>Amount: <?php echo $amount; ?></li>
           <li>Address: <?php echo $txnid; ?></li>
           <li>Booking Date/Time: <?php echo $udf2.' '.$udf3; ?></li>
           <li>Order Date: <?php echo $addedon; ?></li>
           <li>Address: <?php echo $add1.'-'.$add2.'-'.$city.'-'.$state.'-'.$country.'-'.$zipcode.'-'.$phone; ?></li>
           <li>Userid No: <?php echo $udf4; ?></li>
           <li>Transaction No: <?php echo $txnid; ?></li>
           </ul>
           </div>
           
           <div class="col-md-6 col-xs-6 col-sm-6"></div>
           </div>
        </div>
    </div>

     
    </div>
    </div>

		  <?php  
	      echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
          echo $addedon ;
		   }
?>	





<?php include("inc/footer.php"); ?>
