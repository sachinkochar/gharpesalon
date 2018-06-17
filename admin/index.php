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
	    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
		
			if(empty($phone) || empty($pwd))
			{
				header("location: index.php?error=empty");
				exit();
			}
			else
			{
				//Run Query
			   $sql = "SELECT * FROM admin WHERE user_name='$phone' AND pwd='$pwd'";
			   $result = $conn->query($sql);
					if ($result->num_rows > 0) 
					{
					  // output data of each row
					  while($row = $result->fetch_assoc()) 
					  {
							
							  $_SESSION['admin']="1";
							  $_SESSION['id'] = "";
							  header("location:dashboard/home.php");	
						  
					  }
					}
					else
					{
						$msg = 'Your User Name Or Password Is Incorrect ';
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
					<h4 class="text-center text-white form-text">Admin Login</h4>
					<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter Username" name="phone" value="">
						</div>
                        <div class="form-group">
							<input type="password" class="form-control" placeholder="Enter Your Password" name="pwd" value="">
						</div>
                        
                        <div class="row">
      
                     <nav id="navbar-example2" class="navbar navbar-light bg-light"> <ul class="nav nav-pills"><li class="nav-item"> <input type="submit" value="Login" name="logbtn" class="btn btn-primary btn-block"></li> <li class="nav-item"><a href="forgetpassword.php" class="nav-link">Forget Password </a></li></ul></nav>
                  </div>
                        
                        
					</form>
				</div>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
	<!-- End Login Form -->
	<!-- Footer Includes Here -->
	<?php include('inc/footer.php'); ?>