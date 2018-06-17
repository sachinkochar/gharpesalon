<?php
session_start();
include('inc/config.php');
?>
<!-- Header Include -->
<?php include("inc/header.php"); ?>


<div style="min-height:550px;" class="container">
    
 <center><h2 class="custom-heading1">Checkout Details</h2></center><br>

  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
     
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
         <a data-toggle="collapse" data-parent="#accordion" href="#login"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;
         <?php if(isset($_SESSION['id1']) && isset($_SESSION['username1']))
         { 
              echo "Already Logged In"; 
              $flag=1;
              
              } 
              
              else if(isset($_SESSION['guest_name']) && isset($_SESSION['guest_email']))
         { 
              echo "Continue as a Guest"; 
              $flag=1;
              
              } 
     else
     { 
     echo "Login Details";
     $flag=0;
     
     } 
     ?>
     
     </a>
        </h4>
      </div>
      
    <?php if($flag==0){ ?>
     
      <div  id="login" class="panel-collapse collapse in">
          <div class="panel-body">
           <div class="row">
           <div class="col-md-6 col-xs-6 col-sm-6">
           <ul class="list-inline">
           <li><a class="btn btn-login" data-toggle="modal" data-target="#LoginMod"  >Login</a></li>
           <li><a class="btn btn-login" id="Guest1">Continue as Guest</a></li>
           </ul>
           </div>
           
           <div class="col-md-6 col-xs-6 col-sm-6"></div>
           </div>
        </div>
    </div>
     <?php
     }
    
    ?>
     
    </div>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
           <i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;<a data-toggle="collapse" data-parent="#accordion" href="#address_full">Address Details</a>
        </h4>
      </div>
      
      <?php if($flag==1){ ?>
      <div id="address_full" class="panel-collapse collapse in">
        <div class="panel-body"
        <form class=form-horizontal action="" method="POST">
          <div class="row">
           
           
           
           
            <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
        <div class="form-group">
          <input required="" class="form-control" type="text" id="city" name="city" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} ?>"  />
           </div>
           </div>
           </div>
           
           <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
        <div class="form-group">
          <input required="" class="form-control" type="text" id="area" name="area" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['area'];} ?>"  />
           </div>
           </div>
           </div>
           
            <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
          <input  class="form-control" type="text" id="landmark" value="<?php if(isset($_SESSION['landmark'])){ echo $_SESSION['landmark'];} ?>" name="landmark" placeholder="Landmark" />
           </div>
           </div>
           
           
            <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
          <input required="" class="form-control" type="text" id="address1" value="<?php if(isset($_SESSION['address'])){ echo $_SESSION['address'];} ?>" name="address1" placeholder="Address" />
           </div>
           </div>
            
            <?php if(isset($_COOKIE['logged_fb']) || isset($_COOKIE['logged_g'])) 
            {
            if($_COOKIE['logged_fb']==1 || $_COOKIE['logged_g']==1)
            {
            ?>
            
            
            <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
               
          <input required="" class="form-control" type="text" id="phone_number" value="<?php if(isset($_SESSION['phone_number'])){ echo $_SESSION['phone_number'];} ?>" name="phone_number" placeholder="Phone Number" />
           </div>
           <p id="phone_errorv1" style="color:red; display:none;">Phone Number Should be in 10 Digits</p>
           </div>
           <?php } }
           
           
           if(isset($_SESSION['guest_name']) && isset($_SESSION['guest_email'])) 
            {
           
          ?>
          
          <div class="col-md-4 col-xs-4 col-sm-4">
           <div class="form-group">
          <input  class="form-control" type="text" id="phone_number" value="<?php if(isset($_SESSION['phone_number'])){ echo $_SESSION['phone_number'];} ?>" name="phone_number" placeholder="Phone Number" />
           </div>
           </div>
           
           <?php
            }
            ?>
          
          
            <div class="col-md-4 col-xs-4 col-sm-4">
          
          <a style="cursor:pointer; height:30px;" class="btn btn-primary btn-block"  id="add_data">Add</a>
           
           </div>
           
             <div class="col-md-12 col-xs-12 col-sm-12">
           <div class="form-group">
          <textarea disabled style="height:30px; margin-top:5px; display:none;" class="form-control" name="full_address" id="full_address"></textarea>
           </div>
           </div>
           
           
           
       </div>
        
        
        </div>
      </div>
      <?php }?>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
           <i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;<a data-toggle="collapse" data-parent="#accordion" href="#services1">Select Date & Time</a>
        </h4>
      </div>
      <div style="display:none;"  id="services1" class="panel-collapse collapse in">
            <div class="panel-body">
            <p class="custom-heading">Select date & time that best fits your schedule</p>
            <div style="margin-top:10px;" class="row">
           
           
           
          <div class="col-md-6 col-xs-6 col-sm-6">
           <div class="form-group">
          <input required="" 	 class="form-control"  type="date" id="book_date" name="book_date"  />
           </div>
           </div>
           
            <div class="col-md-6 col-xs-6 col-sm-6">
           <div class="form-group">
           
           <select required=""  class="form-control" name="book_time"  id="book_time" >
           <option selected disabled hidden>Select Hour</option>
           <option value="9">9</option>
           <option value="10">10</option>
           <option value="11">11</option>
           <option value="12">12</option>
           <option value="13">13</option>
           <option value="14">14</option>
           <option value="15">15</option>
           <option value="16">16</option>
           <option value="17">17</option>
           <option value="18">18</option>
           <option value="19">19</option>
           <option value="20">20</option>
           <option value="21">21</option>
           </select>
           
           </div>
           </div>
           
            <div class="col-md-6 col-xs-6 col-sm-6">
           <div class="form-group">
           
           <select required=""  class="form-control" name="book_min"  id="book_min" >
           <option selected disabled hidden>Select Minute</option>
           <option value="00">00</option>
           <option value="15">15</option>
           <option value="30">30</option>
           <option value="45">45</option>
           </select>
           
           </div>
           </div>
          
           
          
            <div class="col-md-6 col-xs-6 col-sm-6">
<a class="btn btn-primary btn-block" id="next_data" style="cursor:pointer;">Next</a>
           </div>
           
           
          </div>
            <p><b class="custom-heading">Note:</b> Please Call our Customer Support Team at <b class="custom-heading">1800-1200-4400</b> for confirmation of booking timings at the time of booking.</p> 
            
        </div>
      </div>
    </div>
    
      <div id="coupon_hide" class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
          <i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp; <a data-toggle="collapse" data-parent="#accordion" href="#coupon_wallet">Promo Code or Wallet</a>
        </h4>
      </div>
      
      <?php 
      if(isset($_SESSION['guest_name']) && isset($_SESSION['guest_email']) && !isset($_SESSION['id1']) && !isset($_SESSION['username1'])){ ?>
           <script>
      $(document).ready(function(){
  
        $("#coupon_hide").hide();  
        
    });
 </script>

      
      <?php }  ?>
      
      <div style="display:none;" id="coupon_wallet" class="panel-collapse collapse">
        <div class="panel-body">
            
            
            <p class="custom-heading">Choose Anyone : </p>
             <div style="margin-top:15px;" class="row">
           
           
           
          <div class="col-md-4 col-xs-6 col-sm-4">
           <label class="container1">Any Coupan Code
  <input class="radio_check" type="radio" value="Coupon"   name="coupon_wallet_radio" id="coupon_wallet_radio">
  <span class="checkmark"></span>
</label><br>
 <div class="form-group">
     
     <ul class="list-inline">
         <li>
          <input style="display:none;"  class="form-control"   type="text" id="coupon_code" name="coupon_code" placeholder="Enter Coupon Code Here" />
          </li>
          <li>
          <a style="display:none;" class="btn btn-primary" id="apply_code" >Apply</a>
           </li>         
         </ul>
         
           </div>

           </div>
           
           
           <div class="col-md-4 col-xs-6 col-sm-4">
           <label class="container1">Wallet
  <input class="radio_check" value="Wallet" type="radio" name="coupon_wallet_radio" id="coupon_wallet_radio">
  <span class="checkmark"></span>
</label><br><span id="user_wallet_amount" style="color:#f229a1; diaplay:none;"></span>
           </div>
           
           
           <div class="col-md-4 col-xs-6 col-sm-4">
           <label id="no_feature" class="container1">Continue without these options
  <input class="radio_check" value="No Option" type="radio" name="coupon_wallet_radio" id="coupon_wallet_radio1"> 
  <span class="checkmark"></span>
</label>
           </div>
           
           
                      </div>
           
            
            
        </div>
      </div>
    </div>
    
    
    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title custom-heading">
          <i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp; <a data-toggle="collapse" data-parent="#accordion" href="#payment1">Payment Mode</a>
        </h4>
      </div>
      <div style="display:none;" id="payment1" class="panel-collapse collapse">
        <div class="panel-body">
            
            
            <p class="custom-heading">Pay the amount via: </p>
             <div style="margin-top:15px;" class="row">
           
           
           
          <div class="col-md-4 col-xs-6 col-sm-6">
           <label class="container1">Cash
  <input class="radio_check" type="radio" value="Cash"  name="payment_radio">
  <span class="checkmark"></span>
</label>
           </div>
           
           
           <div class="col-md-4 col-xs-6 col-sm-6">
           <label class="container1">PayUMoney
  <input class="radio_check" value="PayUMoney" type="radio" name="payment_radio">
  <span class="checkmark"></span>
</label>
           </div>
           
           
           <div class="col-md-4 col-xs-6 col-sm-6">
           <label class="container1">Paytm
  <input class="radio_check" value="Paytm" type="radio" name="payment_radio">
  <span class="checkmark"></span>
</label>
           </div>
           
        
                      </div>
           
            
            
        </div>
      </div>
    </div>
    
               <center><a style="margin-top:10px; display:none;" href="order_summary.php" name="proceed" id="proceed" class="btn btn-cat1" >Proceed</a></center>
    
  </div> 
</div>

</form>

 <!-- Modal -->
  <div class="modal fade" id="terms" role="dialog">
    <div class="modal-dialog modal-scroll modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <center><h4 class="modal-title terms-heading">Terms & Conditions</h4></center>
        </div>
        <div id="scroll_div" title="Scroll Down to see AGREE Button" class="modal-body body-scroll">
            <div class="row">
               
               <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Eligible to Use</p></b>
                <ul style="list-style-type:none; margin-top:5px;">
                    <li>1. You have to be 18 years of age or older to use the service or application.</li>
                    <li>2. Ghar pe salon only provides services for females at there door step. </li>
                    
                </ul>
                <br>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Prices & Payment</p></b>
                <p style="margin-top:5px;" align="justify">
                    Prices vary according to type and duration of treatment as described on the site. . Accepted payment methods are as described on the site. By making a booking you agree to provide complete, correct and true information including billing and payment information. Don’t forgot to take the hard copy of the authorised bill from the therapist after completion of your services. 
                </p>
                <br>    
                </div>
                
                
                 <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Customer Responsibilities</p></b>
                 <p style="margin-top:5px;" align="justify">It is your responsibility to provide accurate information at time of booking. Other wise it may result in, without liability to you, cancellation of booking or an inability of the booked. Such failure may also result in loss or incorrect delivery of confirmation of your booking. Once your booking is confirmed. you are responsible for: </p>
                   
                <ul style="list-style-type:none; margin-top:10px;">
                    <li>1. Full payment as applicable.</li>
                    <li>2. Ensuring therapist has access to your designated premises and suitable space and facilities in which the treatment can be performed, including adequate lighting and heating & water.</li>
                    <li>3. Ensuring the health and safety of the therapist whilst at your designated premises.</li>
                </ul>
                <br>
                </div>
                
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Service Quality</p></b>
           
                <ul style="list-style-type:none; margin-top:10px;">
                    <li>1. The quality of a Ghar pe salon professional services is entirely the responsibility of the Ghar pe salon professional who provides such beauty services to you.You understand, therefore, that by using the services of a Ghar pe salon professional, you may be exposed to beauty services that are potentially dangerous, unsafe or otherwise objectionable, and that your use Ghar pe salon professional is at your own risk.</li>
                    <li>2. You agree that: <br>(a) your home (or other space where our therapists are invited to be) is safe<br>(b) you will provide a clean workspace with close proximity to an electrical outlet.</li>
                    <li>3. Ghar pe salon requests background information of its Ghar pe salon professionals, but Ghar pe salon does not and cannot guarantee the accuracy or completeness of any such information-gathering or that a particular Ghar pe salon professional is adequately qualified to perform any given service. </li>
                </ul>
                <br>
                </div>
                
                
                   <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Rescheduling Appointments & Refund</p></b>
                <p style="margin-top:5px;" align="justify">
                   Requests to reschedule an appointment to a different time on the same day of the booked appointment time is free of charge but subject to availability. Request for refund the amount made by online transfer at the time of appointment will be refunded in next 48hrs as per the cancellation policy.
                </p>
                <br>    
                </div>
                
                 <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Prohibited Use</p></b>
                 <p style="margin-top:5px;" align="justify">Use of site or the service for the following is strictly prohibited:</p>
                   
                <ul style="list-style-type:none; margin-top:10px;"> 
                    <li>1. Engage in any inappropriate behaviour including but not limited to illicit or sexually suggestive remarks, sexual advances, or any inappropriate behaviour.</li>
                    <li>2. To the extent permitted by applicable law and subject to our Ghar pre salon policy, you acknowledge and agree that we may use certain third-party vendors and service providers to process payments.</li>
                    <li>3. Restrict or inhibit any other user from enjoying the site or services. </li>
                    <li>4. Harass, abuse, threaten or otherwise infringe or violate the rights of therapists, Ghar pre salon (including its employees and personnel) or others.  </li>
                </ul>
                <br>
                </div>
                
                 <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Rights to Modification & Termination</p></b>
                <p style="margin-top:5px;" align="justify">
                  We may modify these terms including fees and charges for services or terminate use of the site or services at any time by giving notice of termination to you. We may also change, suspend, terminate or discontinue any aspect of the site or services including availability of certain features at any time for any reason. 
                </p>
                <br>    
                </div>
                
                
                <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp; Communication</p></b>
                <p style="margin-top:5px;" align="justify">
                By providing your data, you agree to be communicated by us via email and sms to facilitate offers periodically and as and when required.  
                </p>
                <br>    
                </div>
                
                
                   <div class="col-md-12 col-sm-12 col-xs-12"> 
                <p class="custom-heading"><b><i class="fa fa-cut"></i>&nbsp;&nbsp;Indemnification</p></b>
                 <p style="margin-top:5px;" align="justify">By accepting these user terms and using the application or service, you agree that you shall defend, indemnify and hold Ghar pe salon, its affiliates, its licensors, users, employees, harmless from and against any and all claims, costs, damages, losses, liabilities and expenses (including attorneys' fees and costs) arising out of or in connection with:</p>
                   
                <ul style="list-style-type:none; margin-top:10px;">
                    <li>1. Your violation or breach of any term of these user terms or any applicable law or regulation, whether or not referenced herein. </li>
                    <li>2. Your violation of any rights of any third party, including transportation providers arranged via the application, or use or misuse of any service or application.</li>
                    
                </ul>
                <br>
                </div>
                
                
           
           
            </div>
       </div>
       
        <div class="modal-footer">
          <center><button style="display:none;" type="button" id="accept1" class="btn btn-terms">Agree</button></center>
        </div>
      </div>
    </div>
  </div>
<!-- Footer Include -->
<?php include("inc/footer.php"); ?>