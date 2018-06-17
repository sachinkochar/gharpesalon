<?php
session_start();
include('inc/config.php');
include('inc/functions.php');
//Message Vars
$msg = "";
$msgClass = "";
$customer_id="";
$txtmsg="";
$mobile="";
//Check If Not Logged In
if($_SESSION['admin']==""){
  header("location:../index.php");
}


if(isset($_GET['id']))
{
   $id = $_GET['id'];


$query = "SELECT billing_address WHERE orderid='$id'"; 
$result = mysqli_query($conn, $query);
$firms = mysqli_fetch_all($result, MYSQLI_ASSOC);
$email=$firms['email'];


   $sql = 'UPDATE order_payment SET status="A" where `orderid`="'.$id.'"'; 
				$conn->query($sql);   
				if ($conn->query($sql) === TRUE) 
				{
				    
				     $email_from = "info@gharpesalon.com";
					$subject = 'Ghar Pe Saloon ';
					//$email_to = 'root@myblackhat.org';
					$email_to = $email;

					$body =  'Order Details:-'."\n\n".' Thanks For Submitting Order Your Successfully Completed. But Now Approve Status Is Panding  Order ID Is : ' . $f . ", " . ' With Amount: ' . $tamt . "\n\n" . 'Booking Date/Time: ' . $udf2 ."\n\n". 'Time :'.$udf3 ."\n\n" . 'Payment Tran No: ' . $txnid.'';

					$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
		  
				    
				}

}



$query = "SELECT DISTINCT(oh.orderid),op.total,usr.name,ba.phone,ba.date,ba.time,op.status FROM order_payment op INNER JOIN order_history oh INNER JOIN users usr INNER JOIN billing_address ba ON op.orderid=oh.orderid AND oh.uid=usr.id AND op.orderid=ba.orderid WHERE status='P'"; 
$result = mysqli_query($conn, $query);
$firms = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        
         <div class="container">
           <div class="col-lg-12">
                <div class="table-responsive">
                         <h1>New Orders</h1>
                  <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">

<thead>
<th>Orderid</th>
<th>Amount</th>
<th>Name</th>
<th>Phone</th>
<th>Date</th>
<th>Timimg</th>
<th>Status</th>
<th>Action</th>
</thead>
 
<tbody>
<?php foreach($firms as $firm) : ?>  
<tr>
<td><a href="orderfull_detail.php?id=<?php echo $firm['orderid']; ?>"><?php echo $firm['orderid']; ?></a></td>
<td><?php echo $firm['total']; ?></td>
<td><?php echo $firm['name']; ?></td>
<td><?php echo $firm['phone']; ?></td>
<td><?php echo $firm['date']; ?></td>
<td><?php echo $firm['time']; ?></td>
<td><?php if($firm['status']=="A"){ ?>Active<?php }elseif($firm['status']=="P"){?>Pandding <?php }else{ echo "Compelete";}?></td>
<td><a href="looped_users.php?id=<?php echo $firm['orderid']; ?>">Active</a></td></td>
</tr>
<?php endforeach; ?>
</tbody>


</table>
            
                
                
             </div>
 
            
            </div>
            
            
        </div>
          
          
          
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
