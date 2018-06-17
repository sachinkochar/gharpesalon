<?php
session_start();
include('inc/config.php');
include('inc/functions.php');
//Message Vars
$msg = "";
$msgClass = "";


// Login Form Here
	if(isset($_POST['logbtn'])){
		// Escape Data to protect against SQL injections
		$get_sp_id = mysqli_real_escape_string($conn, $_POST['get_sp_id']);
		
			if(empty($get_sp_id)){
				header("location: forgetpassword.php?error=empty");
				exit();
			}else{
		
				
			   $sqlch = "SELECT phone,pwd FROM admin WHERE phone='$get_sp_id'";
				$resultch = $conn->query($sqlch);										
				if ($resultch->num_rows > 0) 
				{
				  // output data of each row
				  while($row = $resultch->fetch_assoc()) 
				  {
					  
					  $phone=$row["phone"];
					  $pwd=$row["pwd"];
					  
					                $txtmsg=urlencode("Your Login Userid/Sponser Id : $phone And Password : $pwd.");
                                           $ch = curl_init();
                                    $url="http://sms.sevabol.com/rest/services/sendSMS/sendGroupSms?AUTH_KEY=1d63d8dbcf1d96ad7ec7191f8c73259&message=$txtmsg&senderId=SELBYT&routeId=1&mobileNos=$phone&smsContentType=english";
                                    curl_setopt($ch, CURLOPT_URL, $url);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  //use to hide curl sms send response
                                    curl_exec($ch);
                                    curl_close($ch);
					  
					  
					  $msg = 'We Have Send Password On Your Mobile '. $phone;
				    $msgClass = 'alert-danger';
					  
				  }
				}
				else
				{
					$msg = 'Incorrect Phone No. You Entered';
				    $msgClass = 'alert-danger';
				}
				
			}
		
		
	}
//Empty Validation
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if(strpos($url, 'error=empty') !== false){
		$msg = 'Please Fill Out All Fields!';
		$msgClass = 'alert-danger';
	}

?>
	<?php include('inc/header.php'); ?>
	<!-- Main Login Form -->
	<div class="container">
		<div class="row">
			<!-- Alert Messages -->
			<div class="col-md-3">
				<?php if($msg != ''): ?>
				<div class="text-center alert <?php echo $msgClass?>">
					<h5>
						<?php echo $msg; ?>
					</h5>
				</div>
				<?php endif; ?>
			</div>
			<div class="col-md-6">
				<div class="card bg-secondary p-4 regform">
					<h4 class="text-center text-white form-text">Sign In</h4>
					      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
                          <div class="form-group">
        <input class="form-control" type="number" name="get_sp_id" placeholder="Enter Your Phone">
        </div>
        <div class="row">
        <div class="col"><div class="form-group">
        
        </div></div>
        <nav id="navbar-example2" class="navbar navbar-light bg-light"> <ul class="nav nav-pills"><li class="nav-item"><input type="submit" value="Forget" name="logbtn" class="btn btn-primary mr-3 mob-m"></li> <li class="nav-item"><a href="index.php" class="nav-link">Sign In </a></li></ul></nav>
        </div>
        
        
      </form>

				</div>
			</div>
                
			<div class="col-md-3"></div>
		</div>
	</div>
      <br>
      <br>
      <br>
        <br>
      <br>
      <br>
        <br>
      <br>
      <br>
	<!-- End Login Form -->
	<!-- Footer Includes Here -->
	<?php include('inc/footer.php'); ?>