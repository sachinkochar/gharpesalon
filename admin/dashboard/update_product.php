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
	$cata = mysqli_real_escape_string($conn, $_POST['cata_id']);
	$nm = mysqli_real_escape_string($conn, $_POST['nm']);
	$pr = mysqli_real_escape_string($conn, $_POST['pr']);
	$offpr = mysqli_real_escape_string($conn, $_POST['offpr']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
	$time_format = mysqli_real_escape_string($conn, $_POST['time_format']);	
	$ext = mysqli_real_escape_string($conn, $_POST['ext']);
	$date = date_create()->format('Y-m-d H:i:s');
    //Check For Empty Fields
    if($cata=="0" || $time_format=="0")
	{
		$msg = 'Plese Fill All The Filed';
		$msgClass = 'alert-danger';
         
    }
	else
	{		
	     $tm=$time." - ".$time_format;	
		 
		 $sql = 'UPDATE add_product SET cata_id="'.$cata.'",name="'.$nm.'",price="'.$pr.'",offr_price="'.$offpr.'",time_pirod="'.$tm.'",extra="'.$ext.'",status="A" where `id`="'.$cst_id.'"';
		$conn->query($sql);
		if ($conn->query($sql) === TRUE) 
		{
			$msg = 'Producty Updated Successfully';
			$msgClass = 'alert-success';
		   
		} 
		
	}
}
	
	$query = "SELECT * FROM add_product WHERE id='$cst_id'";
	$result = mysqli_query($conn, $query);
	$firm = mysqli_fetch_array($result);



?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        
          <div class="container">
            <!-- Alert Messages -->
            <div class="form-row">
            <div class="col-md-12">
                <?php if($msg != ''): ?>
                    <div class="text-center alert <?php echo $msgClass?>"> <h5><?php echo $msg; ?></h5></div>
                <?php endif; ?>
            </div>
            </div>
           <h3 class="text-center bg-light">Add New Product:</h3>
           
<form class="needs-validation" method="POST" action="update_product.php?id=<?php echo $cst_id ?>">
 
 
 <div class="form-row bg-success pt-3">
      
     
  <div class="col-md-6 mb-3">
      
       <select class="form-control" name="cata_id">
                            <option value="0">Select Category Name</option> 
                             <?php 
							$sql = "SELECT * FROM cata";
                            $result = $conn->query($sql);
							while($row = $result->fetch_assoc()) 
	                      {
							  if($firm["cata_id"]==$row["id"])
							  {
							    echo " <option selected="."selected"." value=" . $row["id"].">". $row["name"] ." </option> "; 
							  }
							  else
							  {
								  echo " <option value=" . $row["cata_id"].">". $row["name"] ." </option> ";
							  }
						   }

                          ?> 
                            
                        </select>
      
      <div class="invalid-feedback text-white">
        Please Enter Package Name.
      </div>
    </div>
    
    
     




  <div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom03" name="nm" placeholder="Enter Enter Product Name" value="<?php echo $firm["name"] ?>" required>
      <div class="invalid-feedback text-white">
        Please Enter Product Name.
      </div>
    </div>


  <div class="col-md-6 mb-3">
      <input type="number" class="form-control" id="validationCustom03" name="pr" placeholder="Enter Price" value="<?php echo $firm["price"] ?>"  required>
      <div class="invalid-feedback text-white">
        Please Enter Price.
      </div>
    </div>
    
      <div class="col-md-6 mb-3 ">
      
      <input type="number" class="form-control" id="validationCustom01" name="offpr" placeholder="Total Offer Price " value="<?php echo $firm["offr_price"] ?>"  required>
      <div class="invalid-feedback text-white">
        Please Enter Offer Price.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>
    
    
      <div class="col-md-6 mb-3 ">
      
      <input type="number" class="form-control" id="validationCustom01" name="time" placeholder="Time" value="<?php echo $firm["time_pirod"] ?>"  required>
      <div class="invalid-feedback text-white">
        Please Enter Time.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>



  <div class="col-md-6 mb-3 ">
      
      <select class="form-control" name="time_format">
                            <option value="0">Select Time Format</option> 
                            <option value="Min">Minutes</option>
                            <option value="Hours">Hours</option>
                            <option value="Days">Days</option>
                        </select>

      <div class="invalid-feedback text-white">
        Please Enter Loan Start Date.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>






<div class="col-md-9 mb-3 ">
      
      <textarea class="form-control" id="validationCustom01" name="ext" placeholder="About Extra Remarks Of Item"  required>
      <?php echo $firm["extra"] ?>
      </textarea>
      <div class="invalid-feedback text-white">
        Please Enter Formula Upper.
      </div>
      <div class="valid-feedback">
        Looks good!
      </div>
    </div>

<div class="col-md-6 mb-3">
        <select class="form-control" name="statu">
        <option value="">Select Status</option>
        <?php if($firm["status"]=="A"){?>
        <option selected="selected">Active</option>
        <option value="">Deactive</option>
        <?php }else{?>
        <option >Active</option>
        <option selected="selected">Deactive</option> 
        <?php }?>
        </select>
</div>
   
     
        </div>
 

   
  <div class="form-row">
  <div class="col-md-4 mb-3">
</div>
  <div class="col-md-4 mb-3">
<input type="submit" value="Update" name="regbtn" class="btn btn-primary">
</div>
  
</div>

</form>



 
 <script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
             
           
      
    </div>
          
          
          
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
