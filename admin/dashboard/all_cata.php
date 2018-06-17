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

   $query = "SELECT * FROM cata";
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
           <div id="rec1"></div>
            <div class="row">
                                <h4 class="text-center text-white form-text">All Category</h4>
                  <table class="display table bg-light border-danger" width="100%" >

<thead>
<th>Index</th>
<th>Category</th>
<th>Description</th>
<th>Action</th>
</thead>
 <?php foreach($firms as $firm) : ?>  
<tbody>

<tr>
<td><input type="text" name="abc<?php echo $firm['id']; ?>" id="abc<?php echo $firm['id']; ?>" value="<?php echo $firm['itmnu']; ?>"/><button onClick="abc(id)" id="<?php echo $firm['id']; ?>">Update</button></td>
<td><?php echo $firm['name']; ?></td>
<td><?php echo $firm['descr']; ?></td>
<td><a href="add_cata_update.php?id=<?php echo $firm['id']; ?>">Edit</a></td>
</tr>
</tbody>
<?php endforeach; ?>

</table>
            
                
                
             </div>
 
            
            
            
            
        </div>
   
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
