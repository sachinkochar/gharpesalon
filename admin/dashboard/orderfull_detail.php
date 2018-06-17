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
$id="";
//Check If Not Logged In
if($_SESSION['admin']==""){
  header("location:../index.php");
}

if(isset($_GET['id']))
{
   $id = $_GET['id'];

}



if(isset($_POST['regbtn']))
{
    $id = $_GET['id'];
   	$date = mysqli_real_escape_string($conn, $_POST['dt']);
    $time = mysqli_real_escape_string($conn, $_POST['tim']);
	$sec = mysqli_real_escape_string($conn, $_POST['sec']);
	
	
    $query = "SELECT * FROM  billing_address WHERE orderid='$id'"; 
    $results = mysqli_query($conn, $query);
    $firm1 = mysqli_fetch_array($results);
	$email= $firm1['email'];
	
	
                
                	$sql = 'UPDATE billing_address SET date="'.$date.'",time="'.$time.":".$sec.'",mintus="'.$sec.'" WHERE orderid="'.$id.'"';
					$conn->query($sql); 

				    
				    $email_from = "info@gharpesalon.com";
					$subject = 'Ghar Pe Saloon ';
					//$email_to = 'root@myblackhat.org';
					$email_to = $email;

					$body =  'Your Order '.$id.' Schedule Changed Successfully On Date '.$date.' Or Time '.$time.':'.$sec.'.For More Info Contact To CGhar Pe Salon  ';

					$success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
		  
				 

}

$id = $_GET['id'];

$query = "SELECT DISTINCT(oh.orderid),op.total,op.amt,op.cgst,op.sgst,usr.name,ba.phone,ba.date,ba.time,ba.address1,ba.address2,ba.city,ba.state,ba.email,op.status FROM order_payment op INNER JOIN order_history oh INNER JOIN users usr INNER JOIN billing_address ba ON op.orderid=oh.orderid AND oh.uid=usr.id AND op.orderid=ba.orderid WHERE ba.orderid='$id'"; 
$results = mysqli_query($conn, $query);
$firm1 = mysqli_fetch_array($results);


$acts = "SELECT ap.name,ap.time_pirod,ap.extra,oh.qty FROM add_product ap  INNER JOIN order_history oh  ON oh.pid=ap.id WHERE oh.orderid='$id'";
$result = mysqli_query($conn, $acts);
$firms = mysqli_fetch_all($result, MYSQLI_ASSOC);



?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        
         <div class="container">
           <div class="col-lg-12">
                <div class="table-responsive">
                         
                  <table class="table table-striped table-bordered nowrap" style="width:100%">
               <thead>
               
               </thead>
               <tbody>
               <tr>
               <th>Name.</th>
               <td><?php echo $firm1['name']; ?></td>             
               
               <th>address </th>
               <td><?php echo $firm1['address1']." ".$firm1['address2']; ?></td>
               
               <th>City</th>
               <td><?php echo $firm1['city']; ?></td>
               
               <th>State</th>
               <td><?php echo $firm1['state']; ?></td>
               
               </tr>
               
               
                              <tr>
               <th>Phone.</th>
               <td><?php echo $firm1['phone']; ?></td>             
               
               <th>Email </th>
               <td><?php echo $firm1['email']; ?></td>
               
               <th>Booking Date</th>
               <td><?php echo $firm1['date']." ".$firm1['time']; ?></td>
               
               <th>Order Id</th>
               <td><?php echo $firm1['orderid']; ?></td>
               
               </tr>
               
               
                              <tr>
               <th>Amount.</th>
               <td><?php echo $firm1['amt']; ?></td>             
               
               <th>SGST </th>
               <td><?php echo $firm1['sgst']; ?></td>
               
               <th>CGST</th>
               <td><?php echo $firm1['cgst']; ?></td>
               
               <th>Total</th>
               <td><?php echo $firm1['total']; ?></td>
               
               </tr>
               
               </tbody>
               </table>
            
            
            <b>Item Details</b>
             <table class="table table-striped table-bordered nowrap" style="width:100%">
               <thead>
               <th>Sr.No.</th>
               <th>Item Name</th>
               <th>Quantity</th>
               <th>Duration</th>
               <th>Description</th>
               </thead>
               <tbody>
               <?php $i=1; foreach($firms as $firm) :?>
               <tr>
               <td><?php echo $i; $i++ ?></td>             
               <td><?php echo $firm['name']; ?></td>
               <td><?php echo $firm['qty']; ?></td>
               <td><?php echo $firm['time_pirod']; ?></td>
               <td><?php echo $firm['extra']; ?></td>
               </tr>
               <?php endforeach?>
               </tbody>
               </table>
            
            
            <table class="table table-striped table-bordered nowrap" style="width:100%">
            <form class="needs-validation" method="POST" action="" >
            <tr><th colspan="8" class="text-center">Change Order Schedule</th></tr>
            <tr>
            <td colspan="3"><input type="date" id="dt" name="dt" required/></td>
            <td>
                <select class="form-control" name="tim">
                <option value="0">Select Hours</option>
                <option value="9">9</option> 
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option> 
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option> 
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>                
                </select>
                
            </td>
            <td>
                <select class="form-control" name="sec">
                <option value="0">Select Minuts</option>
                <option value="00">00</option> 
                <option value="15">15</option>
                <option value="30">30</option>
                <option value="45">45</option>            
                </select>
                
            </td>
            
            <td><input type="submit" value="Submit" name="regbtn" class="btn btn-primary"></td></tr>
            </form>
            </table>
                
                
             </div>
 
            
            </div>
            
            
        </div>
          
          
          
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
