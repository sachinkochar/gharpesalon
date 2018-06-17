<?php


$amount="";
$firstname="";
$email="";
$phone="";
$productinfo="";
$surl="";
$furl="";
$service_provider="payu_paisa";
$lastname="";
$curl="";
$address1="";
$address2="";
$city="";
$state="";
$country="";
$zipcode="";
$udf1="";
$udf2="";
$udf3="";
$udf4="";
$udf5="";
$pg="";

$MERCHANT_KEY = "PlWRLZpB";
$SALT = "W0Aqo4ddll";
// Merchant Key and Salt as provided by Payu.

$PAYU_BASE_URL = "https://sandboxsecure.payu.in";		// For Sandbox Mode
//$PAYU_BASE_URL = "https://secure.payu.in";			// For Production Mode

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
		  || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
	$hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';	
	foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;
    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>
<html>
  <head>
  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>
  </head>
  <?php 
include("inc/header.php");
require('inc/config.php');
?>
<?php session_start(); ?>
<body onLoad="submitPayuForm()">
    <?php if($formError) { ?>	
    <?php } ?>
    
    <?php 
    	if(isset($_SESSION['mem_id'])){
			    $mem_id=$_SESSION['mem_id'];
			    $sql1 = "SELECT * FROM memberships  WHERE id=".$mem_id;
    	        $resultch = mysqli_query($conn, $sql1);
                $firmch = mysqli_fetch_array($resultch);
			}
			?>
			
    
    <div class="container"><br>
    
    <center><h2 style="color:#f229a1;">Booking Details</h2></center>
	<div id="printablediv" class="row service-card">

<!--user table starts here-->
 
<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
            
<h4 style="color:#f229a1;">User Details :</h4><br>
             <table class="table table-condensed table-striped">
                 
        <tr>
       <th><p style="color:#999;">User ID</p></th><th><p style="color:#999;">Membership Type</p></th><th><p style="color:#999;">Name</p></th><th><p style="color:#999;">Email</p></th><th><p style="color:#999;">Phone Number</p></th>
        </tr>


<tr>
<td style="color:#999;"><?php if(isset($_SESSION['id1'])){ echo $_SESSION['id1'];  }   ?> </p>
</td>

<td style="color:#999;"><?php if(isset($_SESSION['id1'])){ echo $firmch['name'];  }   ?> </p>
</td>


<td style="color:#999;"><?php if(isset($_SESSION['username1']) && !isset($_SESSION['guest_name'])){ echo $_SESSION['username1'];  } if(!isset($_SESSION['username1']) && isset($_SESSION['guest_name']) ){ echo $_SESSION['guest_name'];  }  ?> </p>
</td>

          	
      <td style="color:#999;">
          <?php 
          if(isset($_SESSION['id1']) && !isset($_SESSION['guest_email']))
          {
              //fetch user data	


$email1 = "select email from users where id=".$_SESSION['id1'];
$email2 = mysqli_query($conn, $email1);
if($email2==true)
{
$email3=mysqli_fetch_assoc($email2);
}
$_SESSION['user_email']=$email3['email'];
echo $_SESSION['user_email'];
}
            
          
          if(isset($_SESSION['guest_email']) && !isset($_SESSION['id1']))
          { 
          echo $_SESSION['guest_email'];  
          }  
          ?></td>

     <td style="color:#999;">
           <?php 
        
              //fetch user data	

if(isset($_SESSION['id1']) && !isset($_COOKIE['logged_fb']) || isset($_SESSION['id1']) && !isset($_COOKIE['logged_g']))
{
$phone1 = "select phone from users_meta where user_id=".$_SESSION['id1'];
$phone2 = mysqli_query($conn, $phone1);
if($phone2==true)
{
$phone3=mysqli_fetch_assoc($phone2);
}
$_SESSION['user_phone']=$phone3['phone'];
echo $_SESSION['user_phone'];
}


          if(isset($_COOKIE['logged_fb']) && !isset($_SESSION['guest_name']) || isset($_SESSION['guest_name']) || isset($_COOKIE['logged_g']) && !isset($_SESSION['guest_name']) )
          { 
          echo $_SESSION['phone_number'];  
          }  
          ?>  
            
            
</td>

 </tr>   
   
   </table>
   </div>
   
   
 <!--//user table ends-->  
       
<!--Address Details-->
<div class="col-md-12 col-sm-12 col-xs-12 table-responsive">
            
<h4 style="color:#f229a1;">Address Details :</h4><br>
             <table class="table table-condensed table-striped">
                 
        <tr>
        <th><p style="color:#999;">City</p></th><th><p style="color:#999;">Address</p></th>
    
        </tr>
        <tr>
            <td style="color:#999;">
          <?php if(isset($_SESSION['city1'])){ echo $_SESSION['city1'];  }  ?> 
</td>



<td style="color:#999;">
          <?php if(isset($_SESSION['address1'])){ echo $_SESSION['address1'];  }  ?> </td>
          
        </tr>
        
</table>
</div>
<!--//address details-->        

  
  
<div class="col-md-12 col-sm-12 col-xs-12">
            <h4 style="color:#f229a1;">Order Summary :</h4><br>
            <div class="table-responsive">
             <table class="table table-condensed table-striped">
        <tr>
        <th>Name</th><th>Price</th>
        </tr>
        
        <tr><td><p style="color:#999;"><?php if(isset($_SESSION['id1'])){ echo $firmch['name'];  }   ?></p></td>
    <td><p style="color:#999;"><?php  $amount=$firmch["price"]; echo "Rs.". $amount; ?></p></td>    
        </tr>
        
  <?php 
  if(isset($_SESSION['id1']))
  {
   $uid=$_SESSION['id1'];   
  }
  else
  {
  $uid=$_COOKIE['user'];    
  }
	?>
	</table>
	</div>
        
        </div>
         <br><br>
     
             <div class="col-md-6 col-sm-6 col-xs-6"></div>
        <div class="col-md-6 col-sm-6 col-xs-6">
        <p style="color:#f229a1;"><b>Payable Amount : <?php  $amount=$firmch["price"]; echo "Rs.". $amount; ?></b></p>
       
       
        </div>
   </div>
  
  
   <div class="row">
         <div class="col-md-4 col-sm-4 col-xs-4"></div>
      <div style="margin-top:30px;" class="col-md-4 col-sm-4 col-xs-4">    
   <form action="<?php echo $action; ?>" method="post" name="payuForm">
      
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
          <input type="hidden" name="amount" value="<?php echo $amount ?>" />
          <input type="hidden" name="firstname" id="firstname" value="<?php if(isset($_SESSION['username1']) && !isset($_SESSION['guest_name'])){ echo $_SESSION['username1'];  } if(!isset($_SESSION['username1']) && isset($_SESSION['guest_name']) ){ echo $_SESSION['guest_name'];  }  ?> " />
          <input type="hidden" name="email" id="email" value="<?php 
          
          if(isset($_SESSION['id1']) && !isset($_SESSION['guest_email']))
          {
              //fetch user data	


$email1 = "select email from users where id=".$_SESSION['id1'];
$email2 = mysqli_query($conn, $email1);
if($email2==true)
{
$email3=mysqli_fetch_assoc($email2);
}
$_SESSION['user_email']=$email3['email'];
echo $_SESSION['user_email'];
}
            
          
          if(isset($_SESSION['guest_email']) && !isset($_SESSION['id1']))
          { 
          echo $_SESSION['guest_email'];  
          }  
          ?>" />
          <input type="hidden" name="phone" value="<?php 
        
              //fetch user data	

if(isset($_SESSION['id1']) && !isset($_COOKIE['logged_fb']) || isset($_SESSION['id1']) && !isset($_COOKIE['logged_g']))
{
$phone1 = "select phone from users_meta where user_id=".$_SESSION['id1'];
$phone2 = mysqli_query($conn, $phone1);
if($phone2==true)
{
$phone3=mysqli_fetch_assoc($phone2);
}
$_SESSION['user_phone']=$phone3['phone'];
echo $_SESSION['user_phone'];
}


          if(isset($_COOKIE['logged_fb']) && !isset($_SESSION['guest_name']) || isset($_SESSION['guest_name']) || isset($_COOKIE['logged_g']) && !isset($_SESSION['guest_name']) )
          { 
          echo $_SESSION['phone_number'];  
          }  
          ?>  " />
          <input type="hidden" name="productinfo" value="Gharpe Salon Booking" />
          <input type="hidden" name="surl" value="https://gharpesalon.com/success1.php" size="64" />
          <input type="hidden" name="furl" value="https://gharpesalon.com/failure.php" size="64" />
          <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
          <input type="hidden" name="lastname" id="lastname" value="----" />
          <input type="hidden" name="curl" value="" />
          <input type="hidden" name="address1" value="<?php if(isset($_SESSION['address'])){ echo $_SESSION['address1'];  }  ?>" />
          <input type="hidden" name="address2" value="<?php if(isset($_SESSION['area'])){ echo $_SESSION['address1'];  }  ?>" />
          <input type="hidden" name="city" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city1'];  }  ?> " />
          <input input type="hidden" name="state" value="Haryana" />
          <input type="hidden" name="country" value="India" />
          <input type="hidden" name="zipcode" value="125055" />
          <input type="hidden" name="udf1" value="<?php 
        
              //fetch user data	

if(isset($_SESSION['id1']) && !isset($_COOKIE['logged_fb']) || isset($_SESSION['id1']) && !isset($_COOKIE['logged_g']))
{
$phone1 = "select phone from users_meta where user_id=".$_SESSION['id1'];
$phone2 = mysqli_query($conn, $phone1);
if($phone2==true)
{
$phone3=mysqli_fetch_assoc($phone2);
}
$_SESSION['user_phone']=$phone3['phone'];
echo $_SESSION['user_phone'];
}


          if(isset($_COOKIE['logged_fb']) && !isset($_SESSION['guest_name']) || isset($_SESSION['guest_name']) || isset($_COOKIE['logged_g']) && !isset($_SESSION['guest_name']) )
          { 
          echo $_SESSION['phone_number'];  
          }  
          ?>  " />
          <input type="hidden" name="udf2" value="<?php   if(isset($_SESSION['mem_id'])){ echo $_SESSION['mem_id'];  }   ?>" />
          <input type="hidden" name="udf3" value="---" />
          <input type="hidden" name="udf4" value="<?php  echo $_SESSION['id1']; ?>" />
        
          <input type="hidden" name="pg" value="ab" />
        
          <?php if(!$hash) { ?>
         
        <center><input style="color:#fff; background-color:#f229a1; border:none;" class="btn btn-primary btn-block" type="submit" value="Submit" /></center>
        <center><input type="button" class="btn btn-primary btn-block"  style="color:#fff; margin-top:10px; background-color:#f229a1; border:none;"  onclick="printDiv('printablediv')" value="Print Reciept" /></center>
         
          <?php } ?>
    
    </form>
  
  </div>
   <div class="col-md-4 col-sm-4 col-xs-4"></div>
  
  
    </div>
 


	</div>
<br>
     </div>
    
    
    
    
    
    
   
<?php include("inc/footer.php"); ?>
