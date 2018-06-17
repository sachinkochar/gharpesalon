
    <footer class="footer">
        
            <div class="container">
                <div class="col-xs-12 text-center">
                    <ul  class="list-inline center-block">
                        <li>
                            <a href="faq.php" style="color:#f229a1;" href="#">FAQ</a>
                        </li>
                        <li>
                            <a style="color:#f229a1;" href="equitte.php">Service Etiquette</a>
                        </li>
                        <li>
                            <a style="color:#f229a1;" href="contact.php">Contact Us</a>
                        </li>
                        <li>
                            <a style="color:#f229a1;" href="career.php">Career</a>
                        </li>
                        
                        <li>
                            <a style="color:#f229a1;" href="t&c.php">Terms And Conditions</a>
                        </li>
                        <li>
                            <a style="color:#f229a1;" href="privacy.php">Privacy Policy</a>
                        </li>
                       
                        <li>
                            <a href="https://www.facebook.com/Ghar-Pe-Salon-178028662999890/" title="Like us on Facebook" target="_blank">
                                <i style="color:#f229a1;" class="fa fa-facebook"></i>
                            </a>
                        </li>
                        
                            <li>
                            <a href="" title="Follow us on Intstagram" target="_blank">
                                <i style="color:#f229a1;" class="fa fa-instagram"></i>
                            </a>
                        </li>
                        
                    
                        
                        
                    </ul>
            
                </div>
            </div>
        </footer>
        <!-- //Footer -->
        <!-- Login Modal -->
        <div class="modal fade" id="LoginMod" tabindex="-1" role="dialog" aria-labelledby="LoginModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="color:black ;">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <div  class="text-center heading">
                                            Salon at your Doorstep</div><br>
                               
                                <div class="login_error"><h3 class="alert"></h3></div>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login-form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="email" class="form-control" name="email" value="" id="email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="password" class="form-control" name="password" value="" id="password" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input  style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Login" class="btn btn-primary btn-block"  name="logbtn" id="logbtn">
                                           
                                        </div>
                                        
                                        <div class="col-xs-12">
                                            
                                            <button class="btn btn-primary btn-block facebook-btn"  onClick="myFacebookLogin()"><i class="fa fa-facebook"></i>&nbsp;&nbsp;Login With Facebook</button>
                                            <!--<div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false"></div>-->
                                        </div>
                                        
                                         <div class="col-xs-12">
                                            <!--<div class="g-signin2" data-onsuccess="onSignIn"></div>-->
                                            <!--<div class="signin-google"></div>-->
                                            <!--<button class="btn btn-primary btn-block google-btn"  onClick=""><i class="fa fa-google"></i>&nbsp;&nbsp;Login With Google</button>-->
                                            <div style="height:40px;" id="gSignInWrapper">
                                              <div id="customBtn" class="customGPlusSignIn">
                                              
                                              <span class="buttonText"><i class="fa fa-google"></i>&nbsp;&nbsp;Login With Google</span>
                                            </div>
                                          </div>
                                          <div id="name"></div>
                                          <script>startApp();</script>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <p class="small text-center text-uppercase">
                                                <a  style="color: #f229a1; text-decoration:none;" id="toReset" href="javascript:void(0)">Forgot password?</a>
                                            </p>
        
                                            <p class="small text-center text-uppercase" style="color:black" id="signup">
                                                Don't have an account?
                                            <a style="color: #f229a1; text-decoration:none; cursor:pointer;"  class="tosignup" href="javascript:void(0)" >Sign Up</a> or <a  style="color: #f229a1; text-decoration:none; cursor:pointer;" href="javascript:void(0)" id="Guest">Continue as Guest</a>
                                            
                                            </p>
                                            
                                        </div>
                                      
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //Login -->

        <!-- Signup Modal -->
        <div class="modal fade" id="SignupMod" tabindex="-1" role="dialog" aria-labelledby="LoginModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: auto ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center; margin-bottom: 0px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="color:black; ">Signup</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                           <div class="col-xs-12 col-sm-8 margin_center">
                                        <div class="text-center heading">
                                            Create Account For GharPeSalon</div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
                                                <div class="login_error_s"><h3 class="alert "></h3></div> 
                                                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"];?>" id="reform" class="form-horizontal">
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input type="text" class="form-control" name="name" id="su_name" value="" placeholder="Enter Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input type="email" class="form-control" name="email" id="su_email" value="" placeholder="Enter Email Address" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input type="text" class="form-control" name="phone" id="su_phone" value="" placeholder="Enter Phone Number " required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input type="text" class="form-control" name="address" id="su_address" placeholder="Enter Your Address" required>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <div class="col-xs-12 text-left">
                                                            <input type="checkbox" name="referral_check" id="referral_check" /><p style="display:inline;">I have a referral Code</p>
                                                            <input type="text" class="form-control" name="s_referral" id="s_referral" placeholder="Enter Referral Code" disabled />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input type="password" class="form-control" name="pwd" id="su_password" placeholder="Enter Your Password" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <input style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Signup" id="signupbtn" class="btn btn-block btn-primary">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-xs-12">
                                                            <p class="small text-center text-uppercase">
                                                                Already a member?
                                                                <a class="tosignin"  style="color: #f229a1; text-decoration:none;">Sign in</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //Signup -->
        
        <!-- Reset Password Modal -->
        <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="LoginModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="color:black ;">Forgot Password</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <!-- <div><h3 class="alert"><?php if($message !=''){echo $message;} ?></h3></div> -->
                                <div class="login_error"><h3 class="alert "></h3></div>
                                <p class=" text-center text-uppercase" style="color:#f229a1;font-size:10px;" id="signup">'Please Enter Your Registered Email Address</p>
                                <p class=" text-center text-uppercase" style="color:#f229a1;font-size:10px" id="signup">A reset link will be sent to your Email."</p>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="login-form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="email" class="form-control" name="r_email" value="" id="r_email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input  style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Send Email" class="btn btn-primary btn-block"  name="logbtn" id="resetBtn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <p class="small text-center text-uppercase">
                                                <a  style="color: #f229a1; text-decoration:none;" id="signinfReset" href="javascrip:void(0)">Sign In</a>
                                            </p>
        
                                            <p class="small text-center text-uppercase" style="color:black" id="signup">
                                                Don't have an account?
                                            <a style="color: #f229a1; text-decoration:none; cursor:pointer;" class="tosignup" href="javascrip:void(0)">Sign Up</a> or  <a style="color: #f229a1; text-decoration:none;" href="javascrip:void(0)" id="Guest" >Continue as Guest</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //Reset Modal -->
         <!-- Phone Modal -->
        <div class="modal fade" id="phonePop" tabindex="-1" role="dialog" aria-labelledby="LoginModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel" style="color:black ;">Enter Phone Number</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <div  class="text-center heading">Please Enter Following Details To continue</div><br>
                               
                                <div class="login_error"><h3 class="alert"></h3></div>
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="phone" class="form-horizontal">
                                        <?php if($phone === false){ ?>
                                        <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control" name="phone" value="" id="phone_mem" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <?php } ?>
                                        <?php if($address === false){ ?>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <input type="text" class="form-control" name="address" value="" id="address_mem" placeholder="Enter address">
                                                
                                            </div>
                                        <?php } ?>
                                         <input type="hidden" class="form-control" name="mem_id" value="" id="mem_id" placeholder="Enter address">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input  style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Submit" class="btn btn-primary btn-block"  name="setPhone" id="setPhone">
                                        </div>
                                          <div id="name"></div>
                                          <script>startApp();</script>
                                        </div>

                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //Phone -->
        
        <!-- Select Modal -->
        <div class="modal fade" id="city_modal" tabindex="-1" role="dialog" aria-labelledby="LoginModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center; margin-bottom: 30px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title"  id="myModalLabel" style="color:black ;">Select City</h4>
                    </div>
                
                    <!--php code to fetch city-->
                     <?php
                     
                     $city = "select * from city";
                     $city1 = mysqli_query($conn, $city);
                     
                     ?>
                     <!--//php code to fetch city-->
                    
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <form   class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                           
                                            <select id="select_city1" name="select_city1" onchange="get_area(this)" class="form-control" required  >
                                            
                                            <option selected disabled hidden >Select City</option>
                                            
                                             <!--php code to fetch city-->
                                             
                                              
                                            <?php
                                            while($city2=mysqli_fetch_assoc($city1))
                                            {
                                            ?> 
                                            
                                            <option  value="<?php echo $city2["name"]; ?>"><?php echo $city2["name"]; ?></option>                        
                                              
                                            <?php
                                            }
                                            ?> 
                     
                     
                                             <!--//php code to fetch city-->
                                            
                                            
                                            
                                           
                                        
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div  class="col-xs-12">
                                            <select class="form-control" required="" id="select_area1" name="select_area1" >
                                            <option selected disabled hidden>Select Area</option>
                                            
                                        </select>
                                        </div>
                                    </div>
                                   
                                   
                                    <div class="form-group">
                                        
                                        <div class="col-xs-12">
                                            <a  style="background-color: #f229a1; color:#fff; border:none; cursor:pointer;" type="button" class="btn btn-block"   name="select_btn" id="select_btn">Select</a>
                                        </div>
                                    
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <!-- //Select City -->
        
        
        
           <!-- Guest Modal -->
        <div class="modal fade" id="GuestMod" tabindex="-1" role="dialog" aria-labelledby="GuestModLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-dialog">
                <div class="modal-content" style="background:white; ; margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                    <div class="modal-header" style="text-align: center; margin-bottom: 30px;">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title"  id="myModalLabel" style="color:black ;">Continue As Guest</h4>
                    </div>
                
                  
                  
                    
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xs-12 col-md-6 col-md-offset-3">
                                <form   class="form-horizontal">
                                       <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="email" required="" class="form-control" name="guest_email" value="" id="guest_email" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" required="" class="form-control" name="guest_name" value="" id="guest_name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-2"></div>
                                        <div class="col-xs-8">
                                            <input  style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Continue" class="btn btn-cat1"  name="continue_guest" id="continue_guest">
                                            <input  style="background-color: #f229a1; color:#fff; border:none;" type="button" value="Continue" class="btn btn-cat1"  name="continue_guest1" id="continue_guest1">
                                        </div>
                                    <div class="col-xs-2"></div>
                                    </div>
                                   
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        </div>
        <!-- //Guest -->
        
        
        
        <!--Spin box-->
        
        <div   class="modal fade spin_modal" id="spinbox" tabindex="-1" role="dialog" aria-labelledby="spinboxLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div  class="modal-dialog" style="height:600px;">
                <div class="modal-content" style="background:transparent;  margin-top: 90px; max-height: 450px ; border-radius: 4px !important;">
                   
                    <div class="modal-body">
                        <div class="row">
                            <div style="margin-left:-20px; margin-top:0px;" class="col-md-12">
                                
                                
                                
                                 <div align="center">
                
                <table cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <div class="power_controls">
                                <br />
                                <br />
                              
                                <br />
                                <img id="spin_button" src="images/spin_off.png" alt="Spin" onClick="startSpin();" />
                                <br /><br />
                               
                            </div>
                        </td>
                       <td width="438" height="582" class="the_wheel" align="center" valign="center">
                            <canvas id="canvas" width="434" height="434">
                                <p style="{color: white}" align="center">Sorry, your browser doesn't support canvas. Please try another.</p>
                            </canvas>
                        </td>
                    </tr>
                </table>
            </div>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- //spin box -->
        
        <!--jquery code goes here-->
         
        
        <!-- Bootstrap JS & Jquery -->
        <script>
    $(document).ready(function(){
        var Guest_Ed="";
        // login ajax
      $('#logbtn').on('click',function(e) {
        e.preventDefault();
        console.log(window.location.href)
        var email= $("#email").val();
        var password= $("#password").val();
        var mail=validateEmail(email);
        var current_url=window.location.href;
        if(mail ===true){
            if(email !=='' && password !==''){
                $.ajax({
                   type: "POST",
                   url: 'inc/login.php',
                   data: {check: 'login' ,email:email , password:password},
                   success: function(data)
                   {
                      if (data === '0') {
                        $(".login_error h3").addClass('alert-danger');
                        $(".login_error h3").fadeIn();
                        $(".login_error h3").html('Email and Password do not match');
                    
                        setTimeout(function(){
                            $(".login_error h3").fadeOut();

                        },2000);

                      }
                      else if(data=== '1') {
                          if(current_url !== ''){
                              window.location.replace(current_url)
                          }else{
                            window.location.replace('index.php')
                          }
                      }else if(data=== '2'){
                        $(".login_error h3").addClass('alert-danger');
                        $(".login_error h3").fadeIn();
                        $(".login_error h3").html('Email does not exists');
                    
                        setTimeout(function(){
                            $(".login_error h3").fadeOut();
                        },2000);

                      }
                        
                   }
               });
            }else{
                   $(".login_error h3").addClass('alert-danger');
                   $(".login_error h3").fadeIn();
                   $("#email").addClass('has-error');
                   $(".login_error h3").html('Email and Password are Mandatory');
                  }
          }else{
             $(".login_error h3").addClass('alert-danger');
                        $(".login_error h3").fadeIn();
                        $(".login_error h3").html('Please Enter a Valid Email Address');
                    
                        setTimeout(function(){
                            $(".login_error h3").fadeOut();
                        },2000);
          }
     });

        // login ajax ends

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        // Signup ajax
      $('#signupbtn').on('click',function(e) {
        e.preventDefault();
        var name= $("#su_name").val();
        var email= $("#su_email").val();
        var phone= $("#su_phone").val();
        var address= $("#su_address").val();
        var password= $("#su_password").val();
        var referral_c=false;
        var referral_code='';
        var mail=validateEmail(email);
        if(mail === true){
            if(phone.length > 10){
                if($('input#referral_check').prop('checked')===true){
                        referral_c=true;    
                        referral_code=$('#s_referral').val();    
                }
                if(name!=='' && email !=='' && phone !=='' && address !== '' && password !==''){
                    if(referral_code==='' && referral_c===true){
                        $(".login_error_s h3").addClass('alert-danger');
                        $(".login_error_s h3").html('Please Enter the Referral Code');
                        setTimeout(function(){
                                $(".login_error_s h3").fadeOut();
                            },2000);
                    }else{
                        $.ajax({
                           type: "POST",
                           url: 'inc/login.php',
                           data: {check:'signup',name: name,email:email, phone:phone ,address:address, password:password,referral_c:referral_c,referral:referral_code},
                           success: function(data)
                           {
                              if (data === '0') {
                                $(".login_error_s h3").addClass('alert-danger');
                                $(".login_error_s h3").fadeIn();
                                $(".login_error_s h3").html('Email already Exists');
                                setTimeout(function(){
                                    $(".login_error_s h3").fadeOut();
                                },2000);
                              }
                              if (data === '2') {
                                $(".login_error_s h3").addClass('alert-danger');
                                $(".login_error_s h3").fadeIn();
                                $(".login_error_s h3").html('Phone Number already Exists');
                                setTimeout(function(){
                                    $(".login_error_s h3").fadeOut();
                                },2000);
                              }
                              if (data === '3') {
                                $(".login_error_s h3").addClass('alert-danger');
                                $(".login_error_s h3").fadeIn();
                                $(".login_error_s h3").html('Invalid Referral Code');
                                setTimeout(function(){
                                    $(".login_error_s h3").fadeOut();
                                },2000);
                              }
                              if (data === '4') {
                                $(".login_error_s h3").addClass('alert-danger');
                                $(".login_error_s h3").fadeIn();
                                $(".login_error_s h3").html('Unable to Signup, Please Try Again!!');
                                setTimeout(function(){
                                    $(".login_error_s h3").fadeOut();
                                },2000);
                              }
                              else if(data=== '1') {
                                window.location.replace('index.php');
                              }
                           }
                       });
                    }
                }else{
                       $(".login_error_s h3").addClass('alert-danger');
                        $(".login_error_s h3").fadeIn();
                       $(".login_error_s h3").html('All Fields are Mandatory');
                        setTimeout(function(){
                            $(".login_error_s h3").fadeOut();
                        },2000);
                      }
                  }else{
                        $(".login_error_s h3").addClass('alert-danger');
                        $(".login_error_s h3").fadeIn();
                        $(".login_error_s h3").html('Phone Number can of Max 10 digits');
                        setTimeout(function(){
                            $(".login_error_s h3").fadeOut();
                        },2000);
                  }
              }else{
                    $(".login_error_s h3").addClass('alert-danger');
                    $(".login_error_s h3").fadeIn();
                    $(".login_error_s h3").html('Please Ener a Valid Email Address');
                    setTimeout(function(){
                        $(".login_error_s h3").fadeOut();
                    },2000);
              }
     });

        // signup ajax ends

         // My profile ajax
      $('#mp_submit').on('click',function(e) {
        e.preventDefault();
        var uid= $("#mp_uid").val();
        var name= $("#mp_name").val();
        var email= $("#mp_email").val();
        var phone= $("#mp_phone").val();
        var address= $("#mp_address").val();
        var check_mail=validateEmail(email);
        if(check_mail=== true){
            if(phone.length <= 10){
                if(uid!=='' && name!=='' && email !=='' && phone !=='' && address !== '' ){
                    $.ajax({
                       type: "POST",
                       url: 'inc/login.php',
                       data: {check:'update_profile',uid:uid,name: name,email:email, phone:phone ,address:address},
                       success: function(data)
                       {
                          if (data === '0') {
                            $(".login_error_mp h3").addClass('alert-danger');
                            $(".login_error_mp h3").fadeIn();        
                            $(".login_error_mp h3").html('Email already Exists');
                            setTimeout(function(){
                                $(".login_error_mp h3").fadeOut();
                            },2000);

                          }
                          if (data === '2') {
                            $(".login_error_mp h3").addClass('alert-danger');
                            $(".login_error_mp h3").fadeIn();   
                            $(".login_error_mp h3").html('Phone Number already Exists');
                            setTimeout(function(){
                                $(".login_error_mp h3").fadeOut();
                            },2000);

                          }
                          else if(data=== '1') {
                            // window.location.replace('index.php')
                            if($(".login_error_mp h3").hasClass(' alert-danger ')){
                                $(".login_error_mp h3").removeClass(' alert-danger');
                            }
                            $(".login_error_mp h3").addClass(' alert-success fade in');
                            $(".login_error_mp h3").fadeIn();
                            $(".login_error_mp h3").html('Profile Updated Successfully');
                            setTimeout(function(){
                                $(".login_error_mp h3").fadeOut();
                            },2000);
                            $("#mp_name").prop('disabled', true);
                            $("#mp_email").prop('disabled', true);
                            $("#mp_phone").prop('disabled', true);
                            $("#mp_address").prop('disabled', true);
                            $("#mp_submit").prop('disabled', true);

                          }
                       }
                   });
                }else{
                       $(".login_error_mp h3").addClass('alert-danger');
                        $(".login_error_mp h3").fadeIn();
                       $(".login_error_mp h3").html('All Fields are Mandatory');
                       setTimeout(function(){
                            $(".login_error_mp h3").fadeOut();
                        },2000);
                      }
                  }else{
                        $(".login_error_mp h3").addClass('alert-danger');
                        $(".login_error_mp h3").fadeIn();
                        $(".login_error_mp h3").html('Phone Number can be of Max 10 Digits');
                        setTimeout(function(){
                            $(".login_error_mp h3").fadeOut();
                        },2000);            
                      }
        }else{
            $(".login_error_mp h3").addClass('alert-danger');
            $(".login_error_mp h3").fadeIn();
            $(".login_error_mp h3").html('Please Enter a Valid Email Address');
            setTimeout(function(){
                $(".login_error_mp h3").fadeOut();
            },2000);
        }
     });

        // My profile ajax ends

        // Change Password ajax
      $('#pass_change').on('click',function(e) {
        e.preventDefault();
        var current_pass= $("#mp_current").val();
        var new_pass= $("#mp_new").val();
        var uid= $("#mp_uid").val();

        if(uid!=='' && current_pass!=='' && new_pass!=='' ){
            $.ajax({
               type: "POST",
               url: 'inc/login.php',
               data: {check:'change_pass',uid:uid,current_pass:current_pass,new_pass: new_pass},
               success: function(data)
               {
                  if (data === '0') {
                    $(".login_error_sp h3").addClass('alert-danger');
                    $(".login_error_sp h3").fadeIn();
                    $(".login_error_sp h3").html('Current Password Does Not match');
                    setTimeout(function(){
                        $(".login_error_sp h3").fadeOut();
                    },2000);
                  }
                  else if(data=== '1') {
                    $(".login_error_sp h3").addClass(' alert-success fade in');
                    $(".login_error_sp h3").fadeIn();
                    $(".login_error_sp h3").html('Password Updated Successfully');
                    setTimeout(function(){
                        $(".login_error_sp h3").fadeOut();
                    },2000);
                  }
               }
           });
        }else{
               $(".login_error_sp h3").addClass('alert-danger');
               $(".login_error_sp h3").html('Both Fields are Mandatory');
              }
     });

        $('#wallet_notlogged').on('click',function(){
            $('#LoginMod').modal("show");
            $(".login_error h3").addClass('alert-danger');
            $(".login_error h3").html('Please Login to access the Wallet');
            $(".login_error h3").fadeIn();
            setTimeout(function(){
                $(".login_error h3").fadeOut();
            },2000);
        });

        // Change Password ajax ends

        // referral check
        $("input#referral_check").on('click',function() {
            if($(this).prop('checked') === true ){
                $("#s_referral").prop('disabled', false);
            }
            if($(this).prop('checked') === false ){
                $("#s_referral").prop('disabled', true);
            }
        });

        //facebook login
        function checkLoginState() {
      FB.getLoginStatus(function(response) {
        statusChangeCallback(response);
      });
    }
        // facebook login ends
    });
    
    $('#setPhone').on('click',function(){
        var phone = $('#phone_mem').val();
        var address = $('#address_mem').val();
        var mem_id= $('#mem_id').val();
        if(phone.length !== 10){
            $(".login_error h3").addClass('alert-danger');
            $(".login_error h3").fadeIn();
            $(".login_error h3").html('Please Enter a valid Phone Number');
            setTimeout(function(){
                $(".login_error h3").fadeOut();
            },2000);
        }
        else if(address === ''){
            $(".login_error h3").addClass('alert-danher');
            $(".login_error h3").fadeIn();
            $(".login_error h3").html('Please Enter address.');
            setTimeout(function(){
                $(".login_error h3").fadeOut();
            },2000);
        }else{
            $.ajax({
            type: "POST",
            url: 'inc/login.php',
            data:{check:'update_phone',phone:phone,address:address,mem_id:mem_id},
            success:function(response){
                if(response=== '1'){
                    $(".login_error h3").addClass('alert-success');
                    $(".login_error h3").fadeIn();
                    $(".login_error h3").html('Details Successfully Entered');
                    // setTimeout(function(){
                    //     $(".login_error h3").removeClass('alert-success');
                    //     $(".login_error h3").fadeOut();
                    //     $('.phnPop').modal('hide');
                    // },1000);
                    window.location.href="/member_summary.php"
                }else if(response === '0'){
                    $(".login_error h3").addClass('alert-danger');
                    $(".login_error h3").fadeIn();
                    $(".login_error h3").html('Phone Number Not Updated, Please Try Again');
                    setTimeout(function(){
                        $(".login_error h3").removeClass('alert-danger');
                        $(".login_error h3").fadeOut();
                    },2000);
                }
            }
        })    
        }
        
        
        
    })
    
   
    </script>


    <script>
    $(document).ready(function(){

            $("#mp_edit").on('click',function(){
            if($("#mp_name").prop('disabled')===true){
                $("#mp_submit").prop('disabled', false);
                $("#mp_name").prop('disabled', false);
                $("#mp_email").prop('disabled', false);
                $("#mp_phone").prop('disabled', false);
                $("#mp_address").prop('disabled', false);
            }else{
                $("#mp_submit").prop('disabled', true);
                $("#mp_name").prop('disabled', true);
                $("#mp_email").prop('disabled', true);
                $("#mp_phone").prop('disabled', true);
                $("#mp_address").prop('disabled', true);
            }
        });
        
    });
        
          $("#select_city1").change(function(){
            var str=$("#select_city1").val();
                
            $("#select_city").hide();
            $("#city_selected").show();
            $("#select_city2").html(str);
            
            
        });


        $("#select_area1").change(function(){
            var str=$("#select_area1").val();
       
           
            $("#area_selected").show();
            $("#select_area2").html(str);
        var str1=$("#select_city1").val();
        
             document.getElementById("city_data").value=str1;
            
             
            
        });
    </script>
    <!--AJAX GOES HERE-->

     <script type="text/javascript">
        $(document).ready(function () {
            
            var id ="2";
             $("a.class_remove").removeClass("btn-cat1");
             $("#2").addClass("btn-cat1");
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"getpackage.php",
                    data:{id:id},
                    success:function(data, textStatus){
                        $("#district").html(data);
                        //alert(data);
                    }
                });
            
            
        });
    </script>



    <script>
    function get_district(id){
                //var id = $('.state a').val();
                var id =id;
                 $("a.class_remove").removeClass("btn-cat1");
                
                 
                  
                 $("#"+id).addClass("btn-cat1");
                    
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"getpackage.php",
                    data:{id:id},
                    success:function(data, textStatus){
                        $("#district").html(data);
                        //alert(data);
                    }
                });
            }
        </script>
        
        <script>
    function get_district1(id){
                //var id = $('.state a').val();
                var id =id;
                 $("a.class_remove").removeClass("btn-cat1");
            
                 $("#"+id).addClass("btn-cat1");
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"getpackage.php",
                    data:{id:id},
                    success:function(data, textStatus){
                        $("#district").html(data);
                        //alert(data);
                    }
                });
            }
        </script>
        
        <script>
    function get_district2(id){
                //var id = $('.state a').val();
                var id =id;
         $("a.class_remove").removeClass("btn-cat1");
            $("#"+id).addClass("btn-cat1"); 
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"getpackage.php",
                    data:{id:id},
                    success:function(data, textStatus){
                        $("#district").html(data);
                        //alert(data);
                    }
                });
            }
        </script>
        
        
    <script>
    function get_area()
    {
        
                var id=$("select#select_city1 option:selected").val()
            
            
                $.ajax({
                    type:"POST",
                    url:"getarea.php",
                    data:{id:id},
                    success:function(data, textStatus){
                        $("#select_area1").html(data);
                        
                    }
                });
            }
    </script>   
       
            


    <script type="text/javascript">
        $(document).ready(function () {
            
            var id ="1";
                var pid =id;
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"cart.php",
                    data:{pid:pid},
                    success:function(data, textStatus){
                    $("#cart").html(data);
                        //alert(data);
                    }
                });
            
            
        });
    </script>



     <script>
            function get_cart1(id){
                
                
                //var id = $('.state a').val();
                var mid =id;
                //alert(mid);
                $.ajax({
                    type:"POST",
                    url:"cart.php",
                    data:{mid:mid},
                    success:function(data, textStatus){
                    $("#cart").html(data);
                        //alert(data);
                    }
                });
            }
        </script>
     <script>
            function get_cart2(id){
                //var id = $('.state a').val();
                var did =id;
                //alert(did);
                $.ajax({
                    type:"POST",
                    url:"cart.php",
                    data:{did:did},
                    success:function(data, textStatus){
                    $("#cart").html(data);
                        //alert(data);
                    }
                });
            }
        </script>
      

       
        <script>
            function get_cart(id){
                 
           <?php if(!isset($_SESSION['city']) && !isset($_SESSION['area']))
            {
            ?>
            
            $('#city_modal').modal("show");
            
            <?php    
            }
            else
            {
            ?>
            
                var id =id;
                //alert(id);
                $.ajax({
                    type:"POST",
                    url:"cart.php",
                    data:{id:id},
                    success:function(data, textStatus){
                    $("#cart").html(data);
                        //alert(data);
                    }
                });
            
            <?php } ?>
             }
        </script>


    <script>
    $(document).ready(function(){
      // Add scrollspy to <body>
      $('body').scrollspy({target: ".scroll", offset: 1});   

      // Add smooth scrolling on all links inside the navbar
      $(".scroll").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }  // End if
      });
    });
    </script>






    <!--toottip-->
    <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
    </script>
    <!--tooltip-->

    <script>
     function phonePopup(id){
            $('#mem_id').val(id);
            $('#phonePop').modal("show");
        };
        
    function member_purchase(id){
        console.log(id);
        var mem_id=id
          $.ajax({
            type: "POST",
            url: 'inc/login.php',
            data:{check:'member_purchase',mem_id:mem_id},
            success:function(response){
                if(response === '1'){
                    window.location.href='/member_summary.php';
                }
                }
          })
    }
    $(document).ready(function(){
        
        $('.purchase_login').on('click',function(){
            $('#LoginMod').modal("show");
            // $('#resetModal').modal("show");
        });
      
        $('#toReset').on('click',function(){
            $('#LoginMod').modal("hide");
            $('#resetModal').modal("show");
        });
        $('#signinfReset').on('click',function(){
            $('#resetModal').modal("hide");
            $('#LoginMod').modal("show");
        });
        $('.tosignup').on('click',function(){
            $('#LoginMod').modal("hide");
            $('#SignupMod').modal("show");
        });
        $('#Guest').on('click',function(){
           
            $('#continue_guest1').hide();
            $('#continue_guest').show();
            $('#LoginMod').modal("hide");
            $('#GuestMod').modal("show");
        });
         $('#Guest1').on('click',function(){
            
            $('#continue_guest').hide();
            $('#continue_guest1').show();
           
            $('#GuestMod').modal("show");
        });
        
         $('#Guest').on('click',function(){
            $('#resetModal').modal("hide");
            $('#GuestMod').modal("show");
        });
        $('.tosignin').on('click',function(){
            $('#SignupMod').modal("hide");
            $('#LoginMod').modal("show");
        });
         $('.button-slider').on('click',function(){
            
            $('#spinbox').modal("show");
        });
        
    });
        
    </script>









    <script>
     // full_address ajax

      $('#add_data').on('click',function(e) {
        e.preventDefault();
        var landmark= $('#landmark').val();
        var address=  $('#address1').val();
        var phone_v1=  $('#phone_number').val();
       
       
    if(address !='' && phone_v1== ''){
           
           
           
            $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {landmark:landmark,address:address},
               success: function(data)
               {
                
                 $('#full_address').html(data);
                 $('#full_address').fadeIn();
                  $("#services1").fadeIn();
                   
               }
           });
        
       }
    if(address !='' && phone_v1 != ''){

          
               $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {landmark:landmark,address:address,phone_v1:phone_v1},
               success: function(data)
               {
                
                 $('#full_address').html(data);
                 $('#full_address').fadeIn();
                 $("#services1").fadeIn();
                   
               }
           });
            }
            
           
            
        
     });
    </script>



    <script>
     // get_time ajax
      $('#next_data').on('click',function(e) {
        e.preventDefault();
        var book_date= $('#book_date').val();
        var book_time= $('select#book_time option:selected').val();
        var book_min= $('select#book_min option:selected').val();
       
        
            if(book_date !='' && book_time !='' && book_min !=''){
         
            $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {book_date:book_date,book_time:book_time,book_min:book_min},
               success: function(data)
               {
                   if(data==1)
                   {
             
               $('#address_full').fadeOut();
               $("#services1").fadeOut();
               $("#payment1").fadeIn();
                   }
                   if(data==0)
                   {
                    $('#address_full').fadeOut();
               $("#services1").fadeOut();
               $("#coupon_hide").show();
              $("#coupon_wallet").fadeIn();
                
              
                   }
               }
           });
            }
     });
    </script>
    <script>

        $('input[type=radio][name=coupon_wallet_radio]').change(function() {
            var radio_data1=$("input[name='coupon_wallet_radio']:checked").val(); 
              
                if(radio_data1!='' && radio_data1=='Coupon')
                {
               $("#coupon_code").fadeIn();
                $("#apply_code").fadeIn();
               $('#apply_code').on('click',function() {
                var code= $("#coupon_code").val();
               if(code!='')
               {
                 $("#coupon_code").fadeOut();
                  $("#apply_code").fadeOut();
                
                
                 $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {radio_data1:radio_data1,code:code},
               success: function(data)
               {
                  
              $("#payment1").fadeIn();
              }
           });
               }
               
               });
                   
               }
        });

    </script>

    <script>

        $('input[type=radio][name=coupon_wallet_radio]').change(function() {
            var radio_data2=$("input[name='coupon_wallet_radio']:checked").val(); 
              
                if(radio_data2!='' && radio_data2=='Wallet')
                {
              
                 $.ajax({
                type: "POST",
               url: 'checkout_data.php',
               data: {radio_data2:radio_data2},
               success: function(data)
               {
                   $("#user_wallet_amount").fadeIn("slow");
                   $("#user_wallet_amount").html(data);
                   $("#payment1").fadeIn();
              }
           });
               
        }
        });

    </script>

    <script>

        $('input[type=radio][name=coupon_wallet_radio]').change(function() {
            var radio_data3=$("input[name='coupon_wallet_radio']:checked").val(); 
              
                if(radio_data3!='' && radio_data3=='No Option')
                {
              
                 $.ajax({
               type: "POST",
               url: 'checkout_data.php', 
               data: {radio_data3:radio_data3},
               success: function(data)
               {
                  
              $("#payment1").fadeIn();
              }
           });
               
        }
        });

    </script>

    <script>

        $('input[type=radio][name=payment_radio]').change(function() {
            var radio_data=$("input[name='payment_radio']:checked").val(); 
              
                if(radio_data!=''){
                 $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {radio_data:radio_data},
               success: function(data)
               {
              
              
                $('#terms').modal("show");
               
               }
           });
           
        }
        });

    </script>
    <script>
    $(document).ready(function(){
     $('#scroll_div').scroll(function() {
      var y = $(this).scrollTop();
      if (y > 500) {
        $('#accept1').fadeIn('slow');
      } else {
        $('#accept1').fadeOut('slow');
      }
    });
    });
    </script>
    <script>
    $("#accept1").click(function(){
         $('#terms').modal("hide");
         $("#coupon_wallet").fadeOut();
          $("#payment1").fadeOut();
     $('#proceed').fadeIn('slow');
    });

    </script>
    <script>

    $("#member_link").click(function(){
     $("#member_terms").fadeToggle("slow");
     $("#view_arrow").toggleClass("fntawsm4");
    }); 
        
    </script>

    <script>
     // city ajax
      $('#select_btn').on('click',function(e) {
        e.preventDefault();
        
        var city= $('select#select_city1 option:selected').val();
        var area=  $('select#select_area1 option:selected').val();

        if(city!='' && area!='' ){
            $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {city:city,area:area},
               success: function(data)
               {
                
                  window.location.replace('index.php');
                 
               }
           });
        }
     });
    </script>
    <script>
     // city ajax
      $('#continue_guest').on('click',function(e) {
        e.preventDefault();

        var email= $("#guest_email").val();
        var name=  $("#guest_name").val();
        
        if(email!='' && name!='' ){
            $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {email:email,name:name},
               success: function(data)
               {
               
                  window.location.replace('index.php');
               }
           });
        }
     });
    </script>
    <script>
     // city ajax
      $('#continue_guest1').on('click',function(e) {
        e.preventDefault();

        var email= $("#guest_email").val();
        var name=  $("#guest_name").val();
        
        if(email!='' && name!='' ){
            $.ajax({
               type: "POST",
               url: 'checkout_data.php',
               data: {email:email,name:name},
               success: function(data)
               {
                
                  window.location.replace('checkout.php');
               }
           });
        }
     });
    </script>
    <script>
    $(document).ready(function() {
        var date = new Date();

        var day = date.getDate();
        var month = date.getMonth() + 1;
        var year = date.getFullYear();

        if (month < 10) month = "0" + month;
        if (day < 10) day = "0" + day;

        var today = year + "-" + month + "-" + day;       
        $("#book_date").attr("value", today);
    });
    </script>
    <script>
    function printDiv(divName) {
         var printContents = document.getElementById(divName).innerHTML;
         var originalContents = document.body.innerHTML;

         document.body.innerHTML = printContents;

         window.print();

         document.body.innerHTML = originalContents;
    }    
    </script>
    </body>
    </html>