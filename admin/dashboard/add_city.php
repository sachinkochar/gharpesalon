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



if(isset($_POST['regbtn'])){
    //Escape All SQL Strings
	//$customer_id=$_SESSION['email'];
	$nm = mysqli_real_escape_string($conn, $_POST['nm']);
    //Check For Empty Fields
    if($nm=="")
	{
		$msg = 'Plese Fill All The Filed';
		$msgClass = 'alert-danger';
         
    }
	else
	{		
					    
		 $sql4 = "INSERT INTO city (name)
		 VALUES ('$nm')"; 
		 if ($conn->query($sql4) === TRUE)
		{
			$msg = 'City Add Successfully';
			$msgClass = 'alert-success';
			
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
                <h4 class="text-center text-white form-text">Add New City</h4>
                    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter City Name" name="nm" />
                    </div>
                    
                    <input type="submit" value="Add New" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
            
 
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
