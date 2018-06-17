<!-- Header Include -->
<?php include("inc/header.php"); ?>
<?php
print_r($_COOKIE);
$phone= true;
$address= true; 
if(isset($_COOKIE['logged_fb']) || isset($_COOKIE['logged_g'])) {
    $uid=$_COOKIE['id'];
    $query="SELECT * FROM users_meta WHERE user_id='".$uid."'";
    $data=$conn->query($query);
    $data=$data->fetch_assoc();
    if($data['phone'] === '' || $data['phone'] === null){
        $phone= false;
    }
    if($data['address'] === '' || $data['address'] === null){
        $address= false;
    }
}
?>
<!--Membership Cards-->
<br><br>
<div class="container">
    
   <center><h2 style="color:#f229a1;">Welcome to GPS Club</h2></center>
	 <div class="row service-card">
		 
    <?php
        $plans_query="SELECT * FROM memberships";
        $all_plans=$conn->query($plans_query);
        // print_r($all_plans->num_rows);
        if($all_plans->num_rows > 0){
            while($plan=$all_plans->fetch_assoc() ){
    ?>
         <div class="col-md-4">
            <p class="member-para">Duration : <?php echo $plan['duration'] ?></p>
		      <br>
        	     
				    <?php if($plan['name']==='Personal'  ){ ?>
					    <center><img style="width:187px; height:287px;" src="images/membership-1.png" alt="Membership-1" style="width:100%"></center>
                    <?php }elseif($plan['name']==='Premium'  ){ ?>
                        <center><img style="width:187px; height:287px;" src="images/membership-2.png" alt="Membership-1" style="width:100%"></center>
                    <?php }if($plan['name']==='Platinum'  ){ ?>
                        <center><img style="width:187px; height:287px;" src="images/membership-3.png" alt="Membership-1" style="width:100%"></center>
                    <?php } ?>
				    
			    
             <center><br>
             <ul class="list-inline">
              <li><a href="" class="btn btn-default member-btn">Cards Left :  <?php echo $plan['counter'] ?></a></li>
              <?php
                $id=$_COOKIE['id'];
                $user_details="SELECT * FROM user_membership where user_id=".$_COOKIE['id'];
                $details=$conn->query($user_details);
                if($details->num_rows > 0){  ?>
                    <li><a href="javscript:void(0)" class="btn btn-default member-btn already_mem" id=""><i class="fa fa-cart-plus" ></i>&nbsp;Purchase</a></li>
                <?php }else{
              ?>
               <?php if(!isset($_COOKIE['logged_in']) || empty($_COOKIE['logged_in'])){ ?>
                <li><a href="javscript:void(0)" class="btn btn-default member-btn purchase_login" id=""><i class="fa fa-cart-plus" ></i>&nbsp;Purchase</a></li>
              <?php }elseif((isset($_COOKIE['logged_fb']) || isset($_COOKIE['logged_g'])) && ($phone === false || $address === false)){ ?>
                <li id=""><a href="javscript:void(0)" class="btn btn-default member-btn " onClick="phonePopup(<?php echo $plan['id']; ?>)" ><i class="fa fa-cart-plus "  ></i>&nbsp;Purchase</a></li>
              <?php }else{ ?>
                <li><a href="javscript:void(0)" class="btn btn-default member-btn" onClick="member_purchase(<?php echo $plan['id']; ?>)"><i class="fa fa-cart-plus"  ></i>&nbsp;Purchase</a></li>
              <?php } } ?>
             </ul>
            </center>
            <br>
	      </div>
          <?php }
          } ?>
	<!--//membership cards-->	
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 style="color:#f229a1;">You already have subscribed for a Membership Plan. <a href="/my_membership.php">Click Here</a> to see the details</h2>
        </div>    
       <!--Terms and conditions-->
     
       <div style="margin-top:60px;" class="col-md-12">
       <p align="center" ><a style="padding:12px; font-size:20px;" id="member_link" class="btn btn-primary" >About GPS Club ? &nbsp;<span  id="view_arrow" class="fntawsm3"></span></a></p>
      <br>
      <div style="display:none;" id="member_terms">
          <ul style="list-style-type:none;">
         <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;This membership cards include unlimited hair and skin services for given specific period.</li>
         <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;Service will only be given to the Same Person who will Purchase the membership card.</li>
         <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;Valid ID Proof should be required before the service.</li>
          <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;Prior one day before services booking  is required to avoid any sort of hassle. </li>
         <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;You can Book maximum 3 Services in one time.</li>
         <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;Regarding Urgent booking for same day. You can also call to our Customer care number.</li>
          <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;Purchase of our membership is only valid when it will be purchased from our official Website <span style="color:#f229a1;">www.gharpesalon.com</span>.</li>
           <li  class="member-para2"><i style="color:#f229a1;" class="fa fa-cut" ></i>&nbsp;&nbsp;All the Prices are inclusive of all taxes.</li>
         </ul>
         </div>
      
        </div>
       
        <!--Terms and conditions-->
       
       </div>
      <br>
  </div>
     
     <!--//offers-->
<!-- Footer Include -->
<?php include("inc/footer.php"); ?>