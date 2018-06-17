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
	$cty = mysqli_real_escape_string($conn, $_POST['city_id']);
   	$cty_nm =  $_POST['city_id'];
   
	$nm = mysqli_real_escape_string($conn, $_POST['nm']);
    //Check For Empty Fields
    if($nm=="")
	{
		$msg = 'Plese Fill All The Filed';
		$msgClass = 'alert-danger';
         
    }
	else
	{		
			
        $sql = 'UPDATE cityloc SET city_name="'.$cty.'",name="'.$nm.'" where `id`="'.$cst_id.'"';
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$msg = 'Location Updated Successfully';
			$msgClass = 'alert-success';
		   
		} 	
		
	}
}
   $query = "SELECT * FROM cityloc WHERE id='$cst_id'";
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
                <h4 class="text-center text-white form-text">Add New City</h4>
                    <form method="POST" action="">
                    
                    <div class="form-group">
                     <select class="form-control" name="city_id">
                            <option value="0">Select City</option> 
                             <?php 
							$sql = "SELECT * FROM city";
                            $result = $conn->query($sql);
							while($row = $result->fetch_assoc()) 
	                      {
							  
							  if($firm["city_name"]==$row["name"])
							  {
							    echo " <option selected="."selected"." value=" . $row["name"].">". $row["name"] ." </option> "; 
							  }
							  else
							  {
								  echo " <option value=" . $row["name"].">". $row["name"] ." </option> ";
							  }
							
						   }

                          ?> 
                            
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter City Location" name="nm" value="<?php echo $firm['name']; ?>" />
                    </div>
                    
                    <input type="submit" value="Update" name="regbtn" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
            
 
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
