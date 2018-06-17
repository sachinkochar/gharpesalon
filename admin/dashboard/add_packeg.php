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
	$customer_id=$_SESSION['email'];
    $packg = mysqli_real_escape_string($conn, $_POST['packg']);
   
	

    //Check For Empty Fields
    if(!empty($packg))
	{
        //Passed
        //Check Email
        
            //Passed
            //Run Insert Query
            $sql = "INSERT INTO packeg (pack) VALUES ('$packg')";
        
            if ($conn->query($sql) === TRUE) 
			{
                $msg = 'packeg Added Successfully';
                $msgClass = 'alert-success';
            } 
			else 
			{
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        
    }
	else
	{
        //Failed
        $msg = 'Please Fill Out All Fields!';
        $msgClass = 'alert-danger';
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
                        
                    </div>
                    
                    <div class="form-group">
                       <input type="number" class="form-control" placeholder="Enter Your Packeg" name="packg" ></textarea>
                    </div>
                    <input type="submit" value="Add Packeg" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
