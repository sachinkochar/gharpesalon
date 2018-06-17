<?php
session_start();
include('inc/config.php');

//Check If Not Logged In
if($_SESSION['loginad']==""){
  header("location:../index.php");
}  


//Get Data
$query1 = "SELECT  * FROM sub_user ";
$result1 = mysqli_query($conn, $query1);
$firms1 = mysqli_fetch_all($result1, MYSQLI_ASSOC);




?>
<!-- Header Includes Here -->
<?php include('inc/header.php'); ?>
        <div class="container">
           <div class="col-lg-12">
               <h1 class="text-center">All Sub User</h1>
                <div class="table-responsive">
               
                 <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
               
                    <table class="table table-bordered sm" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Sponser Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <td>Wallet</td>                 
                            </tr>
                        </thead>
                            <?php foreach($firms1 as $firm1) : ?>
                                <tbody>
                                    <tr>
                                      <td><?php echo $firm1['get_sp_id']; ?></td>                                                                                
                                      <td><?php echo $firm1['name']; ?></td>                                        
                                      <td><?php echo $firm1['phone']; ?></td>
                                      <td><?php echo $firm1['pwd']; ?></td>
                                      <td><?php
									         
											$id=$firm1['id'];
										    $query = "SELECT SUM(debit) AS d, SUM(credit) AS c FROM bsuser_wallet WHERE customer_id='$id' ";
											$result = mysqli_query($conn, $query);
											$firms = mysqli_fetch_all($result, MYSQLI_ASSOC);
									        foreach($firms as $firm)
											{
												$a=$firm['d'];
												$b=$firm['c'];
												$a=$b-$a; 
												 echo $a;
											}
										 
									     ?></td>                                                                                                        
                                       
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>
                        </form>
                    </div>
                </div>
           </div>
      
    </div>
<!-- Footer Includes Here -->
<?php include('inc/footer.php'); ?>
