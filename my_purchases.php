
<!-- Header Include -->
<?php
require('inc/creds.php');
if(isset($_COOKIE['id']) && !empty($_COOKIE['id'])){
 include("inc/header.php"); ?>
<?php
  $uid= $_COOKIE['id'];
  $getuserdetails=getUserData($conn,$uid);

?>
<!--My Profile Details-->
<br>
<div class="container-fluid">
   <center><h2 style="color:#f229a1;">My Purchases</h2></center>
	 <div style="min-height:400px;" class="row service-card">
         <div class="col-md-3 col-sm-3 col-xs-12">
           <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#myPurchases" data-toggle="tab">All Purchase History</a></li>
            <!-- <li><a href="#change_pass" data-toggle="tab">Change Password</a></li> -->
          </ul>
	      </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div class="tab-content">
              <div id="myPurchases" class="tab-pane fade in active">
                <div class="row">
                  <div class="row margin_bottom purchase_panel">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            Order Id: GPS-001 
                          </div>
                          <div class="panel-body">
                            <div ><span>Details:<span> </div>
                            <div class="pull-right"><span class="order_date">Dated: 03-03-2018</span></div>
                          </div>
                        </div>

                         <div class="panel panel-success">
                          <div class="panel-heading">
                            Order Id: GPS-002 
                          </div>
                          <div class="panel-body">
                            <div ><span>Details:<span> </div>
                            <div class="pull-right"><span class="order_date">Dated: 01-03-2018</span></div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

	       </div>
	<!--//My profile cards-->	
    
       
       </div>
      <br>
  </div>
     
     <!--//offers-->
<!-- Footer Include -->
<?php include("inc/footer.php"); 
}else{
  header("Location: ".HOME_URL);
die();
}
?>