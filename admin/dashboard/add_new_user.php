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
if($_SESSION['loginad']==""){
  header("location:../index.php");
}


if(isset($_POST['regbtn'])){
    //Escape All SQL Strings
	//$customer_id=$_SESSION['email'];
    $name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$wallet = mysqli_real_escape_string($conn, $_POST['wallet']);
	$datetime = date_create()->format('Y-m-d H:i:s');


	
    //Check For Empty Fields
    if($name=="" || $mobile=="" || $pwd=="" || $wallet=="")
	{

		$msg = 'Plese Fill All The Filed';
		$msgClass = 'alert-danger';
          
        
    }
	else
	{
		
		    
		    $sqlch = "SELECT * FROM sub_user WHERE phone='$mobile'"; 
			$resultch = $conn->query($sqlch);										
			if ($resultch->num_rows > 0) 
			{
				while($row = $resultch->fetch_assoc()) 
				{
					$msg = 'User Will All Ready Exite With This Phone No.';
					$msgClass = 'alert-danger';
				}
			}
			else
			{
				$get_sp_id = GetSpId();	
				$sql = "INSERT INTO sub_user (name, email, pwd, phone,  get_sp_id, created_at )
				VALUES ('$name', '$email', '$pwd','$mobile', '$get_sp_id', '$datetime')";					
				if ($conn->query($sql) === TRUE) 
				{}
				
				$sqlch = "SELECT * FROM sub_user WHERE phone='$mobile'"; 
				$resultch = $conn->query($sqlch);										
				if ($resultch->num_rows > 0) 
				{
					while($row = $resultch->fetch_assoc()) 
					{
						$id=$row["id"];
						
						$sql1 = "INSERT INTO bsuser_wallet (customer_id, debit, debit_by, debit_date, credit, credit_by, credit_date  )
						VALUES ('$id', '0', '0','0','$wallet','SB000000', '$datetime')";					
						if ($conn->query($sql1) === TRUE) 
						{
								$txtmsg=urlencode("Your Successfully Created A Users With Sponser Id $get_sp_id And Password $pwd. Wallet Amount Is $wallet");
								$ch = curl_init();
								$url="http://sms.sevabol.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=1d63d8dbcf1d96ad7ec7191f8c73259&message=$txtmsg&senderId=SELBYT&routeId=1&mobileNos=$mobile&smsContentType=english";
								
								curl_setopt($ch, CURLOPT_URL, $url);
								curl_setopt($ch, CURLOPT_HEADER, 0);
								curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //use to hide curl sms send response
								curl_exec($ch);
								curl_close($ch);
							
						}
						
					}
				}
				
				
				
		    }
	}
}

?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        <div class="container">
            <!-- Alert Messages -->            
                <?php if($msg != ''): ?>
                    <div class="text-center alert <?php echo $msgClass?>"> <h5><?php echo $msg; ?></h5></div>
                <?php endif; ?>
           
            <div class="col-md-6 mx-auto">
                <div class="card bg-primary p-2">
                <h4 class="text-center text-white form-text">Add User</h4>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Name" name="name" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter E-Mail ID" name="email" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter Mobile No" name="mobile" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Password" name="pwd" />
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Wallet Amount" name="wallet" />
                    </div>
                    
                    <input type="submit" value="Creat" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
