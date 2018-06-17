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
 $cst_id = $_GET['id'];

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
	
		$sql = 'UPDATE city SET name="'.$nm.'" where `id`="'.$cst_id.'"'; 
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$msg = 'City Updated Successfully';
			$msgClass = 'alert-success';
		   
		} 
	}
}

   $query = "SELECT * FROM city WHERE id='$cst_id'";
   $result = mysqli_query($conn, $query);
   $firm = mysqli_fetch_array($result);
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
                <h4 class="text-center text-white form-text">Update Category</h4>
                    <form method="POST" action="">
                    
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Catagory Name" name="nm" value="<?php echo $firm['name']; ?>" required/>
                    </div>
                   
                    <input type="submit" value="Creat" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
            
 
            
            
            
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
