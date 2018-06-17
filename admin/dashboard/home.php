<?php
session_start();
include('inc/config.php');
include('inc/functions.php');
//Message Vars
$msg = "";
$msgClass = "";

//Check If Logged In
if($_SESSION['admin']==""){
  header("location:../index.php");
}


?>
<?php include('inc/header.php'); ?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="#">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">My Dashboard</li>
</ol>
<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-comments"></i>
        </div>
        <div class="mr-5">
        <?php /*?><?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM users_table where active='1'");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?>
        
        New Booking</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-list"></i>
        </div>
        <div class="mr-5">
<?php /*?>         <?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM users_table where active='2'");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?>
<?php */?>         Total Product</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="looped_users.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5"> 
		<?php /*?><?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM users_table where active='3'");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?> Category</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="#">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-support"></i>
        </div>
        <div class="mr-5">
        <?php /*?> <?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM users_table where active='0'");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?>
         Total Member</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="unpaid_users.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  
  
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-support"></i>
        </div>
        <div class="mr-5">
       <?php /*?> <?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM users_table ");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?>
        All Users!</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="all_users.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5">
        <?php /*?> <?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM sub_user ");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?>
         Compeleant</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="allusers.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fa fa-fw fa-list"></i>
        </div>
        <div class="mr-5">
      <?php /*?>  <?php
				$result = mysqli_query($conn, "SELECT COUNT(*) AS `count` FROM feedback ");
				$row = mysqli_fetch_array($result);
				$new = $row['count'];
				echo $new;

		
		?><?php */?>

         Total Feedback Request</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="feedback.php">
        <span class="float-left">View Details</span>
        <span class="float-right">
          <i class="fa fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  
  
  
  
</div>
<?php include('inc/footer.php'); ?>