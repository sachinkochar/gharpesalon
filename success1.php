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
$official_email="info@gharpesalon.com";
$mem_id=$_SESSION['mem_id'];
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
		       $mem_id=2;
                $sql1 = "SELECT * FROM memberships  WHERE id=".$mem_id;
    	        $mem_details = mysqli_query($conn, $sql1);
    	        if($mem_details->num_rows > 0 ){
    	            $mem_details = mysqli_fetch_array($resultch);
    	            $date = date('Y-m-j',strtotime($addedon));
    	            if($mem_id===1){
                        $newdate = strtotime ( '+1 month' , strtotime ( $date ) ) ;
                        $expiresOn = date ( 'Y-m-j' , $newdate );
    	            }elseif($mem_id===2){
    	                $newdate = strtotime ( '+3 month' , strtotime ( $date ) ) ;
                        $expiresOn = date ( 'Y-m-j' , $newdate );
    	            }elseif($mem_id===3){
    	                $newdate = strtotime ( '+6 month' , strtotime ( $date ) ) ;
                        $expiresOn = date ( 'Y-m-j' , $newdate );
    	            }
                    $sql = "INSERT INTO user_membership(user_id,membership_id,paid,date_joined,expires_on,transaction_id)
                    VALUES ($udf4,$udf2,'$amount','$addedon','$expiresOn','$txnid')";	
                    
                    if ($conn->query($sql) === TRUE) 
                        {       $_SESSION['mem_id']='';
                                $sql = "SELECT * FROM memberships where id=".$udf2;
                                $result=$conn->query($sql);
                                print_r($result);
                                $result=$result->fetch_assoc();
                                print_r($result['counter']);
                                $total_mem=$result['counter'];
                                $new_mem=$total_mem - 1;
                                $update="UPDATE memberships set counter=".$new_mem." where id=".$udf2;
                                print($update);
                                if($conn->query($update)){
                                    $email_from = $official_email;
                					$subject = 'Ghar Pe Saloon ';
                					//$email_to = 'root@myblackhat.org';
                					$email_to = $email;
                					$body =  'Order Details:-'."\n\n".' Thanks For Submitting Order Your Successfully Completed. But Now Approve Status Is Panding  Order ID Is : ' . $f . ", " . ' With Amount: ' . $tamt . "\n\n" . 'Booking Date/Time: ' . $udf2 ."\n\n". 'Time :'.$udf3 ."\n\n" . 'Payment Tran No: ' . $txnid.'';
                					$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');  
                                }
                                
                        }    
    	        }
		       
		       
		         
		       
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
            <li>Membership ID : <?php echo $udf2; ?></li>
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
