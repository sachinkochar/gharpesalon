<?php
$sp_id = rand(1, 1000000);
$cookie_name = "user";
$cookie_value = $sp_id;
if(!isset($_COOKIE[$cookie_name]))
{
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
} 
else
{
  $_SESSION['userid']=$_COOKIE[$cookie_name];   
 // echo $_SESSION['userid'];
 }
?>
<!-- Header Include -->
<?php include("inc/header.php"); ?>
<?php include("inc/slider.php"); ?>

<!--popup-->
<?php
if(!isset($_COOKIE[$cookie_name]))
{
?>
<script LANGUAGE='JavaScript'> 
setTimeout(function(){
    $('#LoginMod').modal(); 
}, 2000);
</script>
<?php } ?>
<!--//popup-->
<?php
if(isset($_COOKIE['id']) && isset($_COOKIE['username']))
{ 
    $_SESSION['id1']=$_COOKIE['id'];
    $_SESSION['username1']=$_COOKIE['username'];
    
}        
?>
<!-- banner-bottom -->

<!--Spin-->
<a data-toggle="modal" data-target="#spinbox"  class="fixedspin" ><img data-toggle="tooltip" class="spin-size" data-placement="right" title="Daily Spin!"  src="images/wheelmove.gif"  id="fixedbutton"></a>
<!--//Spin-->
<br>

<div class="container">
    <center><h2 class="custom-heading">Exclusive Packages</h2></center><br>
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="thumbnail">
			<div class="img-holder">
					<img  src="images/package 1.jpg" alt="offers-1" style="width:100%">
                    <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div> 
         
      
				
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="thumbnail ">
					<div class="img-holder">
					<img  src="images/package 2.jpg" alt="offers-1" style="width:100%">
                   <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="thumbnail ">
					<div class="img-holder">
					<img  src="images/package 3.jpg" alt="offers-1" style="width:100%">
                   <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 4.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		
	
		
		<div class="col-md-3 col-sm-6 col-xs-6 hide1 hide2">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 5.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		
		
		<div class="col-md-3 col-sm-6 col-xs-6 hide1 hide2">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 6.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		
		
		<div class="col-md-3 col-sm-6 col-xs-6 hide1 hide2">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 7.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-6 hide1 hide2">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 8.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		
			<div class="col-md-4 col-sm-3 col-xs-3 hide1 hide2"></div>
		
		
		<div class="col-md-4 col-sm-6 col-xs-6 hide1 hide2">
			<div class="thumbnail ">
	<div class="img-holder">
					<img  src="images/package 9.jpg" alt="offers-1" style="width:100%">
                  <a onclick="get_district2(1)" href="#packs"  class="btn  btn-offer link scroll" href=""><i class="fa fa-cart-plus"></i></a>
         </div>
			</div>
		</div>
		
			<div class="col-md-4 col-sm-3 col-xs-3 hide1 hide2"></div>
		
		
	</div>
	<div class="row">
	    <div class="col-md-5 col-sm-5 col-xs-5 "></div>
<div class="col-md-2 col-sm-2 col-xs-2 text-center"><a id="view_more" class="custom_link"><center></center><span id="view_arrow" class="fntawsm1"></span></center></a></div>
<div class="col-md-5 col-sm-5 col-xs-5"></div>
</div>
</div>
<!-- //banner-bottom -->
<br>

<script>

$("#view_more").click(function(){
 $("#view_arrow").toggleClass("fntawsm2");

  $(".hide2").fadeToggle();
   $("#view_more").toggleClass("custom_link2");
  
}); 
    
</script>
<script>
   $(document).ready(function(){
    $(".hide2").hide();
       });
    
</script>



<!-- Cart starts here-->
<div class="container">
<div class="row">



<!--Package loading-->
<?php

$package = "select * from cata ORDER BY itmnu ASC"; 
$package1 = mysqli_query($conn, $package);
?>
<!--//Packag loading-->

<!-- packages starts Here-->

<div id="packs" class="col-md-12 col-sm-12 col-xs-12">
 <div class="jax-categories">
  <ul  class="nav nav-pills">
      
<!--while package loading-->      
<?php
if($package1->num_rows >0 ){
while($package2=mysqli_fetch_assoc($package1)){                          
?> 
<div  class="col-md-2 col-sm-6 col-xs-6">
    <li  id="state"><a onclick="get_district(this.id)" data-toggle="pill" class="btn btn-default class_remove btn-cat" id="<?php echo $package2["id"]; ?>"><?php echo $package2["name"]; ?></a></li>
</div>
<?php
}
}
?>
<!--// while package loading-->

  </ul>
   </div>
</div>

   </div>
<!-- end of packages-->
<br>
   
<!--Accordians starts here-->
<div class="container">
   <div class="row">
      
          <div class="col-md-7">
              <div id="subpackages"  class="tab-content">
                 
                     <!--Subpackages with accordians-->
                     
                     <div id="" class="tab-pane fade in active">
                     
                     <div id="district">
                     
                     
                     </div>
               
               
               
            </div> 
              
      </div>
   </div>
<!-- // end of subpackages with accordian-->

<!--Cart Box Starts here-->
  <div class="col-md-5">
     <div style="box-shadow: rgb(170, 170, 170) 0px 0px 20px 0px;"  class="panel panel-default">
        <div style="background-color:#f229a1; color:#FFFFFF;" class="panel-heading">Booking Summary</div>
           <div class="panel-body">
            
             
          
<!--            cart start with ajax      -->           
             <div id="cart">
            
            </div>
            
    <!--            cart end with ajax      -->                 
           
            
      </div>
   </div>
 </div>
<!--Cart Box Starts ends here-->



</div>
</div>
</div>
</div>
<!--Cart Ends here-->


<!-- How It Works Section -->
<div id="how-it-works" style="background-color:inherit;">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12  col-sm-12 col-xs-12 ">
				<div class="col-xs-12" style="background-color: #FFF; color: #45004f; border-radius: 10px;">
					<div style="margin: 25px 10px; border: 1px solid #f229a1; border-radius: 10px;">
					   <h2 class="how-it-works">How It Works</h2><br>
						<div class="row" data-sr>
							<div class="col-sm-12">
								<div class="col-sm-4">
									<div>
										<img src="images/how-it-works-1.png" alt="Step 1: Book a service from home" />
									</div>
									<div style="font-size: 18px; color:#f229a1; font-weight: bolder;">BOOK</div>
									<div class="col-xs-12">
										<p style="font-size: 14px; color: #333;">Tell us when and where you want to get your services</p>
										<br>

									</div>
								</div>
								<div class="col-sm-4">
									<div>
										<img src="images/how-it-works-2.png" alt="Step 2: Wait for the beautician" />
									</div>
									<div style="font-size: 18px; font-weight: bolder; color:#f229a1;">GET</div>
									<div class="col-xs-12">
										<p style="font-size: 14px; color: #333;">Get a trained artist who will come over to your home</p>
										<br>
									</div>
								</div>
								<div class="col-sm-4">
									<div>
										<img src="images/how-it-works-3.png" alt="Step 3: Relax and enjoy service at home" />
									</div>
									<div style="font-size: 18px; font-weight: bolder; color:#f229a1;">ENJOY</div>
									<div class="col-xs-12">
										<p style="font-size: 14px; color: #333;">Sit back, relax and enjoy the services at your home</p>
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //How It Works -->



<!-- Footer Include -->
<?php include("inc/footer.php"); ?>