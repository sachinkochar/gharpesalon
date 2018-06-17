<?php
require('inc/config.php');
require('inc/db_queries.php');

session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ghar Pe Salon - Salon At Your Doorsteps</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Ghar Pe Salon is a salon service provider offering premium salon services at home in BEAUTIFUL CITY CHANDIGARH with well trained and certified trainers , Membership cards - unlimited services ,daily offers and many more book now and get pamppered.">
    
    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    
  

    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <meta name='copyright' content="Ghar Pe Salon">
    <meta name='language' content='EN'>
    <meta name='robots' content='index,follow'>
    <meta name='Classification' content='Business'>
    <meta name='designer' content='Team Grapxcode, info@grapxcode.com'>
    <meta name='reply-to' content='enquiry@gharpesalon.in'>
    <meta name='owner' content='Ghar Pe Salon'>
    <meta name='url' content='https://www.gharpesalon.com/'>
    <meta name='identifier-URL' content='https://www.gharpesalon.com/'>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>
    <meta name='rating' content='General'>
    <meta name='revisit-after' content='7 days'>
    <meta name='target' content='all'>
    <meta name='HandheldFriendly' content='True'>
    <meta name='MobileOptimized' content='320'>

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Ghar Pe salon" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.gharpesalon.com/" />
    <meta property="og:site_name" content="Ghar Pe salon: Salon at your Doorstep, Salon Services for Men & Women" />
    <meta property="og:description" content="Get professionally trained beauticians at home. Ghar Pe Salon provides you  wide range of Salon services including Facials, Clean Up, Bleach, Waxing, Hair Spa and many more at affordable prices. Visit Now for more details!"
    />
    <meta property="og:locale" content="en_US" />

    <meta property="article:author" content="https://www.facebook.com/gharpesalon" />
    <meta property="article:publisher" content="https://www.facebook.com/gharpesalon" />

    <meta property="og:email" content="enquiry@gharpesalon.com" />
    <meta property="og:phone_number" content="+91-8295700111" />

    <!-- Apple tags -->
    <meta name="apple-mobile-web-app-title" content="Ghar Pe Salon">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='format-detection' content='telephone=no'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-signin-client_id" content="336127668856-7ev38rqlbl6d5sa055auad1gsa09ehei.apps.googleusercontent.com">

    <!-- Bootstrap Core & Custom Styles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
        rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- Font Awsome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <script type="text/javascript" src="js/Winwheel.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>

    <!-- Animation-Effect -->
    <link href="css/animate.min.css" rel="stylesheet">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--load everything-->
    
    
    <!--google signin-->
    <script>
      var googleUser = {};
      var startApp = function() {
        gapi.load('auth2', function(){
          // Retrieve the singleton for the GoogleAuth library and set up the client.
          auth2 = gapi.auth2.init({
            client_id: '336127668856-7ev38rqlbl6d5sa055auad1gsa09ehei.apps.googleusercontent.com',
            cookiepolicy: 'single_host_origin',
            // Request scopes in addition to 'profile' and 'email'
            //scope: 'additional_scope'
          });
          attachSignin(document.getElementById('customBtn'));
        });
      };
    
      function attachSignin(element) {
        console.log(element.id);
        auth2.attachClickHandler(element, {},
            function(googleUser) {
                if(googleUser.getBasicProfile().getEmail()==null){
                     function signOut() {
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function () {
                          console.log('User signed out.');
                        });
                      }
              }else{
               var name = googleUser.getBasicProfile().getName();
                var email= googleUser.getBasicProfile().getEmail();
                $.ajax({
                   type: "POST",
                   url: 'inc/login.php',
                   data: {check: 'fblogin',type:'google' ,email:email , name:name},
                   success: function(data)
                    {
                        if(data == '1'){
                              window.location.replace('index.php')
                        }else if(data == '2'){
                            $(".login_error h3").addClass('alert-danger');
                            $(".login_error h3").fadeIn();
                            $(".login_error h3").html('Unable to Login');
                        
                            setTimeout(function(){
                                $(".login_error h3").fadeOut();
                            },2000);

                  }
                    }
               
            });
              }
                console.log(googleUser)
            }, function(error) {
              alert(JSON.stringify(error, undefined, 2));
            });
      }
    </script>
  
  <!--google siginin-->
    <!--google signout-->
    <script>
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
           $.ajax({
                  type: "POST",
                  url: 'inc/logout_fb.php',
                  data:{type:'google_signout'},
                  success:function(resposne){
                      if(resposne=='1'){
                           window.location.replace('index.php')
                      }
                  }
             })
        });
      }
    </script>
    <!--google signout-->
<style type="text/css">
    #customBtn {
        text-align:center;
        border-radius: 5px;
        font-weight: 600;
        padding: 5px;
        color: white;
        background-color: #dd4b39;
        margin-top: 5px;
        border: none;
      box-shadow: 1px 1px 1px grey;
      white-space: nowrap;
    }
    #customBtn:hover {
      cursor: pointer;
    }
    span.label {
      font-family: serif;
      font-weight: normal;
    }
    span.icon {
      background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
      display: inline-block;
      vertical-align: middle;
      width: 42px;
      height: 42px;
    }
    span.buttonText {
      display: inline-block;
      vertical-align: middle;
      padding-left: 42px;
      padding-right: 42px;
      font-size: 14px;
      font-weight: bold;
      /* Use the Roboto font that is loaded in the <head> */
      font-family: 'Roboto', sans-serif;
    }
  </style>

<style>
  /* Icon when the collapsible content is shown */
  .fntawsm:after {
    font-family: "Glyphicons Halflings";
    content: "\e113";
    float: right;
    margin-left: 15px;
  }
  /* Icon when the collapsible content is hidden */
  .fntawsm.collapsed:after {
    content: "\e114";
    
  }
  
   /* Icon when the collapsible content is shown */
  .fntawsm1:after{
    font-family: "Glyphicons Halflings";
    content: "\e114";
    color:#666; 
  }
  /* Icon when the collapsible content is hidden */
  .fntawsm2:after{
    font-family: "Glyphicons Halflings";
    content: "\e113";
  color:#666;
      
  }
  
   .fntawsm3:after{
    font-family: "Glyphicons Halflings";
    content: "\e114";
    color:#fff; 
  }
  /* Icon when the collapsible content is hidden */
  .fntawsm4:after{
    font-family: "Glyphicons Halflings";
    content: "\e113";
  color:#fff;
      
  }
   
</style>
    <style>
        #myCarousel .carousel-inner #slider-social {
            font-size: 24px;
            text-align: center;
            z-index: 1;
            width: 300px;
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg);
            position: absolute;
            top: 50%;
            transform: translateY(-50%) rotate(270deg);
        }
    </style>

<!--Ajax Starts here-->
<script>
function showcity(show1) {
    
    document.getElementById("select_city").style.display="none";
    document.getElementById("city_selected").innerHTML=show1;
    document.getElementById("city_selected").style.display="block";


}
</script>
<!--//end of ajax-->

</head>

<body>
<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    
    if (response.status == "connected") {
      // Logged into your app and Facebook.
    //   FB.api('/me?fields=id,name,email,first_name,last_name,birthday', 'post', {message: 'Hello, world!'});
      FB.api('/me?fields=id,name,email', function(response){
          console.log(response)
              if(response.email==null){
                    FB.getLoginStatus(function(response) {
                    if (response && response.status === 'connected') {
                        FB.logout(function(response) {
                            $(".login_error h3").addClass('alert-danger');
                            $(".login_error h3").fadeIn();
                            $(".login_error h3").html('Not able to fetch information from facebook');
                        
                            setTimeout(function(){
                                $(".login_error h3").fadeOut();
                            },2000);
                            
                        });
                    }
                });
                   
              }else{
                var name = response.name;
                var email= response.email;
                $.ajax({
                   type: "POST",
                   url: 'inc/login.php',
                   data: {check: 'fblogin',type:'facebook' ,email:email , name:name},
                   success: function(data)
                    {
                        if(data == '1'){
                              window.location.replace('index.php')
                        }else if(data == '2'){
                            $(".login_error h3").addClass('alert-danger');
                            $(".login_error h3").fadeIn();
                            $(".login_error h3").html('Unable to Login');
                        
                            setTimeout(function(){
                                $(".login_error h3").fadeOut();
                            },2000);

                  }
                    }
               
            });
          console.log(response)
              }
    }) 
      
  }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
        console.log(response);
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '2121856444726928',
      cookie     : true,  // enable cookies to allow the server to access 
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v2.8' // use graph api version 2.8
    });
FB.getLoginStatus(function(response) {
        console.log(response);
    });
  };
  
  function myFacebookLogin(e) {
      event.preventDefault();
      FB.login(function(){
          FB.getLoginStatus(function(response) {
          statusChangeCallback(response);
        });
        },{scope: 'public_profile,email'})
}
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made
  function myFacebookLogout(){
      console.log('test')
      FB.getLoginStatus(function(response) {
        if (response && response.status === 'connected') {
            FB.logout(function(response) {
                $.ajax({
                  type: "POST",
                  url: 'inc/logout_fb.php',
                  data:{type:'fb_logout'},
                  success:function(resposne){
                      if(resposne=='1'){
                           window.location.replace('index.php')
                      }
                  }
             })
            });
        }
    });
     
  };
  
</script>

  

  
    <!-- header -->
    <div class="header">
        <div class="container">
            <div class="logo-nav">
                <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                    <h1>
                        <a  href="/">Ghar Pe
                            
                            <center><span>Salon</span></center>    
                            
                        </a>
                    </h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header nav_2">
                            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                            <ul class="nav navbar-nav">
                               
                                <li>
                                    <input type="hidden" value="" name="city_data" id="city_data" >
                                    
                                    <a style="<?php if(isset($_SESSION['city'])){?>display:none; <?php } ?>cursor:pointer;" id="select_city" data-toggle="modal" data-target="#city_modal"  class="jax-link">
                                    <?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; } else{ echo "Select City"; } ?>
                                    </a>
                                    
                                     <a style="<?php if(!isset($_SESSION['area'])){?>display:none; <?php } ?> cursor:pointer"; id="city_selected"  data-toggle="modal" data-target="#city_modal" class="jax-link">
                                    <img style="margin-top:-4px;" src="images/location.png" alt="City Icon">&nbsp;&nbsp;<span id="select_city2"><?php if(isset($_SESSION['city'])){ echo $_SESSION['city']; } else{ echo "Select City"; } ?></span>
                                    </a>
                                </li>
                                
                               
                                <li>
                                    <a style="<?php if(!isset($_SESSION['area'])){?>display:none;<?php }?> cursor:pointer" id="area_selected" href="#" class="jax-link">
                                    <img style="margin-top:-4px;" src="images/city.png" alt="location Icon">&nbsp;&nbsp;<span id="select_area2"><?php if(isset($_SESSION['area'])){ echo $_SESSION['area']; } else{ echo "Select Area"; } ?></span>
                                    </a>
                                </li>
                                <!-- Mega Menu -->
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle jax-link" data-toggle="dropdown">Services
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-center">
                                        <li>
                                            <a href="beauty.php">Beauty Services</a>
                                        </li>
                            
                                <li>
                                            <a href="hair.php">Hair Services</a>
                                        </li>
                                        
                                        <li>
                                            <a href="makeup.php">Makeup Services</a>
                                        </li>
                                        
                                       
                            
                                    </ul>
                                    
                                </li>
                            

                               
                                 <li>
                                    <a href="membership.php" class="jax-link">GPS Club</a>
                                </li>
                                <?php 
                                    if(isset($_COOKIE['username']) && isset($_COOKIE['id'])){
                               ?>
                               <li class="dropdown">
                                    <a class="dropdown-toggle jax-link" href="javascrip:void(0)" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_COOKIE['username'] ?>  <b class="caret"></b></a>
                                    <ul class="dropdown-menu dropdown-menu-center">
                                        <li>
                                            <a href="my_profile.php">My Profile</a>
                                        </li>
                            
                                        <li>
                                            <a href="my_purchases.php">My Purchase History</a>
                                        </li>
                                        
                                        <li>
                                            <a href="my_membership.php">My Membersip</a>
                                        </li>
                                        <li>
                                            <?php if(isset($_COOKIE['logged_fb']) || $_COOKIE['logged_fb']===TRUE){ ?>
                                                <a id="logout_fb" onClick="myFacebookLogout();">Logout</a>
                                          <?php  }elseif(isset($_COOKIE['logged_g']) || $_COOKIE['logged_g']===TRUE){ ?>
                                                <a id="logout_fb" onClick="signOut();">Logout</a>
                                          <?php }else{ ?>
                                                <a href="inc/logout.php">Logout</a>
                                            <?php } ?>
                                        </li>
                            
                                    </ul>
                                    
                                </li>


                                <li>
                                    <!-- <i class="fa fa-user"><a><?php echo $_COOKIE['username'] ?></a></i> -->
                                    
                                </li>
                               <?php
                                }else{
                               ?>
                                <li>
                                    <a href="#" class="jax-link" data-toggle="modal" data-target="#LoginMod">Login / Signup</a>
                                </li>
                                <?php } ?>
                                
                               
                                <li style="margin-top:-11px;">
                                    <?php 
                                    if(isset($_COOKIE['id']) && isset($_COOKIE['username'])){
                                     ?>
                                        <a title="Wallet" href="my_wallet.php" class="jax-link"><img src="images/wallet.png" ></a>
                                        <?php }else{ ?>
                                    <a title="Wallet" id="wallet_notlogged" href="javascript:void(0)" class="jax-link"><img src="images/wallet.png" ></a>
                                    <?php } ?>
                                </li>
                               
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //header -->