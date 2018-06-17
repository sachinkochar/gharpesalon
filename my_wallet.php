
<!-- Header Include -->
<?php
require('inc/creds.php');
if(isset($_COOKIE['id']) && !empty($_COOKIE['id'])){
 include("inc/header.php"); ?>
<?php
  $uid= $_COOKIE['id'];
  $getuserdetails=get_refferals($conn,$uid);
  $total_points=total_refferals($conn,$uid);
  $username=get_username($conn,$uid);
  ?>

<!--My Profile Details-->
<br>
<div class="container-fluid">
   <center><h2 style="color:#f229a1;">My Wallet</h2></center>
   <div class="row service-card">
         <div class="col-md-3 col-sm-3 col-xs-12">
           <!-- <ul class="nav nav-pills nav-stacked"> -->
            <!-- <li class="active"><a href="#myProfile" data-toggle="tab">My Wallet</a></li> -->
          <!-- </ul> -->
        </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
             <div class="tab-content">
              <div id="myProfile" class="tab-pane fade in active">
                <div class="row margin_bottom" style="border-bottom:1px solid">
                  <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                      <div><h3 class="color-custom font_32" ><?php echo $username; ?></h3></div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                    <div class="small">Total points earned: <span class="color-custom font_32" ><?php  echo($total_points); ?></span></div>
                  </div>
                </div>
                <div class="row scroll_div purchase_panel">
                  <?php 
                  if($getuserdetails->num_rows >0){
                       while($referrals=$getuserdetails->fetch_assoc()){
                        $user=get_username($conn,$referrals['user_reffered']);
                      ?>
                        <div class="panel panel-success">
                          <div class="panel-heading">
                            <div class="small" style="font-size:12px;">Points earned: <span class="" style="font-size:18px;" >
                              <?php if($uid=$referrals['user_reffering']){
                                echo $referrals['reffering_points'];
                            }elseif($uid=$referrals['user_reffered']){
                              echo $referrals['reffered_points'];
                            }
                            ?>
                            </span></div> 
                          </div>
                          <div class="panel-body">
                            <div >
                              <span style="font-size:12px;">Earned for Reffering: </span><span class="color-custom" style="font-size:18px;" ><?php  echo $user ?> </span>
                              <span class="custom-color"></span></div>
                            <div class="pull-right"><span class="order_date">Dated: <?php echo date($referrals['date_joined']); ?></span></div>
                          </div>
                        </div>
                        <?php }
                      }else{ ?>
                        <div class="no_results"><h4>You have not earned any point(s) from refferral.</h4></div>
                      <?php } ?>
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