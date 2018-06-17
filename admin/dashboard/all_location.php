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

   $query = "SELECT cityloc.name,cityloc.id,city.name AS ct FROM cityloc INNER JOIN city ON cityloc.city_name=city.name";
			$result = mysqli_query($conn, $query);
            $firms = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?> 
    
        <div class="container">
            <!-- Alert Messages -->            
                <?php if($msg != ''): ?>
                    <div class="text-center alert <?php echo $msgClass?>"> <h5><?php echo $msg; ?></h5></div>
                <?php endif; ?>
           
            <div class="row">
                                <h4 class="text-center text-white form-text">All Category</h4>
                  <table class="display table bg-light border-danger" width="100%" >

<thead>
<th>City</th>
<th>Location</th>
<th>Action</th>
</thead>
 <?php foreach($firms as $firm) : ?>  
<tbody>

<tr>
<td><?php echo $firm['ct']; ?></td>
<td><?php echo $firm['name']; ?></td>
<td><a href="update_loc.php?id=<?php echo $firm['id']; ?>">Edit</a></td>
</tr>
</tbody>
<?php endforeach; ?>

</table>
            
                
                
             </div>
 
            
            
            
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
