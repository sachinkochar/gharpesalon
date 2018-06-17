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



if(isset($_GET['did'])){
	 $id = $_GET['did'];
	 
	$sql = "DELETE FROM add_product WHERE id=$id";	
	if ($conn->query($sql) === TRUE) 
	{
	    $msg= 'Record deleted successfully';
		$msgClass = 'alert-success';
	} 
	else 
	{
	echo "Error deleting record: " . $conn->error;
	}

	 
	   	 
 }






            $query = "SELECT ct.name,pd.id,pd.name AS pname,pd.price,pd.offr_price,pd.time_pirod,pd.extra,pd.status FROM add_product pd INNER JOIN cata ct ON pd.cata_id=ct.id"; 
			$result = mysqli_query($conn, $query);
            $firms = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        
         <div class="container">
           <div class="col-lg-12">
                <div class="table-responsive">
                         
                  <table id="myTable" class="display table" width="100%" >

<thead>
<th>Category</th>
<th>Name</th>
<th>Price</th>
<th>Offer Price</th>
<th>Timing</th>
<th>About</th>
<th>Satuts</th>
<th>Action</th>
</thead>
 <?php foreach($firms as $firm) : ?>  
<tbody>

<tr>
<td><?php echo $firm['name']; ?></td>
<td><?php echo $firm['pname']; ?></td>
<td><?php echo $firm['price']; ?></td>
<td><?php echo $firm['offr_price']; ?></td>
<td><?php echo $firm['time_pirod']; ?></td>
<td><?php echo $firm['extra']; ?></td>
<td><?php if($firm['status']=="A"){ ?>Active<?php }else{?>Deactive <?php }?></td>
<td><a href="update_product.php?id=<?php echo $firm['id']; ?>">Edit</a> | <a href="all_product.php?did=<?php echo $firm['id']; ?>" class="delete">Delete</a></td>
</tr>
</tbody>
<?php endforeach; ?>

</table>
            
                
                
             </div>
 
            
            </div>
            
            
        </div>
          
          
          
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
