<?php
session_start();
include('inc/config.php');
//Message Vars
$msg = "";
$msgClass = "";
$customer_id="";
//Check If Not Logged In
if($_SESSION['loginad']==""){
  header("location:../index.php");
}


if(isset($_POST['regbtn'])){
    //Escape All SQL Strings
	//$customer_id=$_SESSION['email'];
    $packg = mysqli_real_escape_string($conn, $_POST['firm_id']);
	$cust_id = mysqli_real_escape_string($conn, $_POST['packg']);
	$plan = mysqli_real_escape_string($conn, $_POST['message']);
	$datetime = date_create()->format('Y-m-d H:i:s');
    //Check For Empty Fields
    if($packg=="")
	{

		$msg = 'Plese Select User Type First';
		$msgClass = 'alert-danger';
          
        
    }
	else if($packg=="1")
	{
		if(!empty($packg) && !empty($plan))
		{
			$sqlch = "SELECT * FROM users_table WHERE customer_id='$cust_id'";
			$resultch = $conn->query($sqlch);										
			if ($resultch->num_rows > 0) 
			{
				$cid=$row["customer_id"];
				$sql9 = "INSERT INTO inbox (customer_id, stuts, qury, credit_date  )
		        VALUES ('$cid', '0', '$plan',  '$datetime' )";	
			    if ($conn->query($sql9) === TRUE) 
			    {
				
			    }
				
				
			}
			else
	    	{
			   $msg = 'This Sponser Id Is Not Valid';
               $msgClass = 'alert-danger';
		    }
			
		}
		else
		{
			 $msg = 'Please Fill Out All Fields!';
             $msgClass = 'alert-danger';
		}
		
        //Failed
       
    }
	else if($packg=="2")
	{
		    $sqlch = "SELECT * FROM users_table";
			$resultch = $conn->query($sqlch);										
			if ($resultch->num_rows > 0) 
			{
				$cid=$row["customer_id"];
				$sql9 = "INSERT INTO inbox (customer_id, stuts, qury, credit_date  )
		        VALUES ('$cid', '0', '$plan',  '$datetime' )";	
			    if ($conn->query($sql9) === TRUE) 
			    {
				
			    }
				
				
			}
			
		
	}

}

?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    <div class="content-wrapper">
        <div class="container">
            <!-- Alert Messages -->
            <div class="col-md-3">
                <?php if($msg != ''): ?>
                    <div class="text-center alert <?php echo $msgClass?>"> <h5><?php echo $msg; ?></h5></div>
                <?php endif; ?>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card bg-primary p-2">
                <h4 class="text-center text-white form-text">Add Packeg</h4>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                    <div class="form-group">
                        <select class="form-control" name="firm_id">
                        <option value="">Select User</option>
                        <option value="1">Single User</option>
                        <option value="2">All User</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Sponser Id" name="packg" />
                    </div>
                    <div class="form-group">
                       <textarea name="message" placeholder="Enter Your Message To Inbox" cols="45" rows="5"></textarea>
                    </div>
                    <input type="submit" value="Send To Inbox" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
