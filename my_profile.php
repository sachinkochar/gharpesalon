
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
<div  class="container-fluid">
   <center><h2 style="color:#f229a1;">My Profile</h2></center>
	 <div style="min-height:400px;" class="row service-card">
         <div class="col-md-3 col-sm-3 col-xs-12">
           <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#myProfile" data-toggle="tab">My Profile</a></li>
            <?php if(!isset($_COOKIE['logged_fb'])) {  ?>
            <li><a href="#change_pass" data-toggle="tab">Change Password</a></li> <?php } ?>
            <li><a href="#referrel" data-toggle="tab">My Refferel</a></li>
          </ul>
	      </div>
          <div class="col-md-9 col-sm-9 col-xs-12">
             <div class="tab-content">
              <div id="myProfile" class="tab-pane fade in active">
                <div class="row margin_bottom" style="border-bottom:1px solid">
                  <div class="col-md-10 col-sm-10 col-xs-10">
                      <div class="login_error_mp"><h3 class="alert"></h3></div>
                  </div>
                  <div class="col-md-2 col-sm-2 col-xs-2">
                    <div class="pull-right"><i class="fa fa-edit" id="mp_edit" title="Edit Profile"></i></div>
                  </div>
                </div>
                <div class="row">
                    <br><br>
                  <form class="form-group">
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="name">Name:</label></div>
                      <div class="col-md-5"><input type="text" name="name" id="mp_name" class="form-control" disabled value="<?php echo $getuserdetails['name'] ?>"></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="email">Email:</label></div>
                      <div class="col-md-5"><input type="email" name="name" id="mp_email" class="form-control" disabled value="<?php echo $getuserdetails['email'] ?>"></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="phone">Phone:</label></div>
                      <div class="col-md-5"><input type="text" name="name" id="mp_phone" class="form-control" disabled value="<?php echo $getuserdetails['phone'] ?>"></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="address">Address:</label></div>
                      <div class="col-md-5"><input type="text" name="name" id="mp_address" class="form-control" disabled value="<?php echo $getuserdetails['address'] ?>"></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-5"><input type="hidden" name="id" id="mp_uid" class="form-control" disabled value="<?php echo $getuserdetails['uid'] ?>" hidden></div>
                    </div>
                    <div class="row pull-left">
                      <div class="col-md-5"><input type="button" value="Submit" disabled id="mp_submit" class="btn btn-primary" ></div>
                    </div>
                  </form>
                </div>
              </div>

              <div id="change_pass" class="tab-pane fade in">
                <div class="row margin_bottom" style="border-bottom:1px solid">
                  <div class="col-md-10 col-sm-10 col-xs-10">
                      <div class="login_error_sp"><h3 class="alert"></h3></div>
                  </div>
                </div>
                  <div class="row">
                      <br><br>
                  <form class="form-group">
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="current_pass">Current Password:</label></div>
                      <div class="col-md-5"><input type="password" name="current_pass" id="mp_current" class="form-control" value=""></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-4"><label for="new_pass">New Password:</label></div>
                      <div class="col-md-5"><input type="password" name="new_pass" id="mp_new" class="form-control" value=""></div>
                    </div>
                    <div class="row margin_bottom">
                      <div class="col-md-5"><input type="hidden" name="id" id="mp_uid" class="form-control" disabled value="<?php echo $getuserdetails['uid'] ?>" hidden></div>
                    </div>
                     <div class="row margin_bottom pull-left">
                      <div class="col-md-5"><input type="button" value="Submit" name="pass_change" id="pass_change" class="btn btn-primary" ></div>
                    </div>
                  </form>
                </div>  
              </div>
              <div id="referrel" class="tab-pane fade in">
                  <br>
                <div class="colmd-4 col-sm-4 col-xs-4" style="font-size:12px;">My Refferel code</div>
                <div class="colmd-8 col-sm-8 col-xs-8 text-center"><h1 style="color:#f229a1"><?php echo $getuserdetails['referral'] ?></h1></div>
                <div class="colmd-12 col-sm-12 col-xs-12 text-right" style="margin-top:30px;"><p style="color:#f229a1;font-size:10px;">**Refer your friends and Earn 100 points on each Referrel!!!</p></div>
              </div>
            </div> <!-- tab content -->

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