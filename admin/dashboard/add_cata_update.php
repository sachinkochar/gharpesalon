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
	$des = mysqli_real_escape_string($conn, $_POST['des']);
	$itm = mysqli_real_escape_string($conn, $_POST['itm']);
	$date = date_create()->format('Y-m-d H:i:s');
    //Check For Empty Fields
    if($nm=="" || $des=="")
	{
		$msg = 'Plese Fill All The Filed';
		$msgClass = 'alert-danger';
         
    }
	else
	{		
	
		$sql = 'UPDATE cata SET name="'.$nm.'",descr="'.$des.'",itmnu="'.$itm.'" where `id`="'.$cst_id.'"';
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$msg = 'Category Updated Successfully';
			$msgClass = 'alert-success';
		   
		} 
	}
}

   $query = "SELECT * FROM cata WHERE id='$cst_id'";
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
                    <form method="POST" action="add_cata_update.php?id=<?php echo $cst_id ?>">
                    
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Catagory Name" name="nm" value="<?php echo $firm['name']; ?>" required/>
                    </div>
                  
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Description" name="des" value="<?php echo $firm['descr']; ?>" required/>
                    </div>
                    
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Enter index No" name="itm" value="<?php echo $firm['itmnu']; ?>"/>
                    </div>
                    
                    <input type="submit" value="Creat" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
            
 
            
            
            
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
