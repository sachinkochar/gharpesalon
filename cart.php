   <?php
 
include "inc/config.php";
session_start();
if(isset($_SESSION['id1']))
{
$uid=$_SESSION['id1'];
 $random = 'UPDATE cart SET uid="'.$_SESSION['id1'].'" where uid="'.$_COOKIE['user'].'" ';
  						   $conn->query($random);  
}
else
{
$uid=$_COOKIE['user'];
}




if(isset($_POST["pid"]))
{ 
 

 $sql = "SELECT pd.name,pd.id,ct.pr AS pr,ct.qty,pd.time_pirod  FROM cart ct INNER JOIN add_product pd ON pd.id=ct.pid WHERE ct.uid='$uid'";
	$result = $conn->query($sql);					
	if ($result->num_rows > 0) 
	{
					// output data of each row
					$output="";
					$output .='
					 <div  style="display:block;" id="full">
                     <div class="pic-container">
                     <div class="pic-row">
					
					 					 <div class="row cart-data1">
                     <div class="col-md-6 col-sm-6 col-xs-6">Product Name</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Duration</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Qty</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Price</div>
                     </div>
					<div class="row cart-item">';
			while($row = $result->fetch_assoc()) 
			{
                  $qty=$row["qty"];
				  $pric=$row["pr"];
                  $total=$qty*$pric;

                  $output .= '<div class="col-md-6 col-sm-6 col-xs-6 cart-item3">'.$row["name"].'</div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-2" >'.$row["time_pirod"].'</div>  
                      <div class="col-md-2 col-sm-2  col-xs-2" >
                      <i  onclick="get_cart1(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer;" aria-hidden="true" class="fa fa-minus-square carticon"></i>
                      <div  class="qty">'.$row["qty"].'</div> 
                      <i  onclick="get_cart(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer; margin-left:-11px;" aria-hidden="true" class="fa fa-plus-square carticon"></i>
                      </div>
					  
                      <div class="col-md-2 col-sm-2 col-xs-2"><span style="margin-left:-11px;"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$total.'</span> 
                      <i onclick="get_cart2(this.id)"  id="'.$row["id"].'" aria-hidden="true" title="remove" class="fa fa-close" style="color:#f229a1; cursor:pointer;"></i>
                      </div>
                   
                  ';  
				  
			}
			
			$sql1 = "SELECT SUM(tpr) AS tp FROM cart WHERE uid='$uid'";
	        $resultch = mysqli_query($conn, $sql1);
            $firmch = mysqli_fetch_array($resultch);
			
			$output .= '</div> 
			          <div class="row cart-item2">                          
                      <div class="col-xs-12">
                      <div class="col-md-7 col-sm-7 col-xs-7 text-left padding-0"></div>
                      <div style="color:#f229a1;" class="col-md-2 col-sm-2 col-xs-2">Total:</div> 
                      <div class="col-md-3 col-sm-3 col-xs-3 padding-3"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$firmch["tp"].'</div> 
                      </div>                          
                      </div>
					  
					  <a href="checkout.php" class="btn btn-default cart-btn"><i class="fa fa-cart-plus"></i>&nbsp;Checkout</a>
                    
                                            
                      </div>
                   </div>
                 </div>
			';
			echo $output; 
}
else
{
	
	echo'   <div style="display:block;"  id="empty">
                     <div class="row"> 
                     <div class="col-md-12">
                     <center> <h4 class="cartempty">Your Cart is Empty</h4></center>
                     <center><h4 class="cartempty1"><i class="fa fa-shopping-cart fa-3x"></i></h4></center>
                     </div>
                     </div>
                     </div>';
	
	
}
 
 
}
 
 if(isset($_POST["id"]))
{

                    $subpackage = $_POST["id"];
					
				    $sql = "SELECT * FROM cart WHERE pid='$subpackage' AND uid='$uid'";
					$result = $conn->query($sql);					
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) 
						{
						   $qty = $row["qty"];
						   $qty1=$qty+1;
						   
							$query = "SELECT * FROM add_product WHERE id='$subpackage'";
							$result = mysqli_query($conn, $query);
							$firm = mysqli_fetch_array($result);
							$ofpr=$firm['offr_price'];
								$pr="";
								if($ofpr=="0")
								{
								   $pr=$firm['price'];
								}
								else
								{
									$pr=$firm['offr_price'];
								}
							 $tpr=$pr*$qty1;   
						   
						   $sql5 = 'UPDATE cart SET qty="'.$qty1.'",tpr="'.$tpr.'" where pid="'.$subpackage.'" AND `uid`="'.$uid.'"';
  						   $conn->query($sql5);
						}
					} 
					else 
					{
						$query = "SELECT * FROM add_product WHERE id='$subpackage'";
						$result = mysqli_query($conn, $query);
						$firm = mysqli_fetch_array($result);
						$apr=$firm['offr_price'];
						$pr="";
						if($apr=="0")
						{
						   $pr=$firm['price'];
						}
						else
						{
						    $pr=$firm['offr_price'];
						}
						
					     $sql = "INSERT INTO cart(pid,qty,pr,tpr,uid) 
					     VALUES ('$subpackage','1','$pr','$pr','$uid')";				       
					     if ($conn->query($sql) === TRUE) 
						{
								 
						}    
					}
				   
				   

	$sql = "SELECT pd.name,pd.id,ct.pr AS pr,ct.qty,pd.time_pirod  FROM cart ct INNER JOIN add_product pd ON pd.id=ct.pid WHERE ct.uid='$uid'";
	$result = $conn->query($sql);					
	if ($result->num_rows > 0) 
	{
					// output data of each row
					$output="";
					$output .='
					 <div  style="display:block;" id="full">
                    <div class="pic-container">
                         <div class="pic-row">
					
					  <div class="row cart-data1">
                     <div class="col-md-6 col-sm-6 col-xs-6">Product Name</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Duration</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Qty</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Price</div>
                     </div>
					<div class="row cart-item">';
			while($row = $result->fetch_assoc()) 
			{
                  $qty=$row["qty"];
				  $pric=$row["pr"];
                  $total=$qty*$pric;

                  $output .= ' <div class="col-md-6 col-sm-6 col-xs-6 cart-item3">'.$row["name"].'</div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-2">'.$row["time_pirod"].'</div>  
                      <div class="col-md-2 col-sm-2  col-xs-2">
                       <i  onclick="get_cart1(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer;" aria-hidden="true" class="fa fa-minus-square carticon"></i>
                      <div  class="qty">'.$row["qty"].'</div> 
                      <i onclick="get_cart(this.id)"  id="'.$row["id"].'" style="color:#f229a1; margin-left:-11px; cursor:pointer;" aria-hidden="true" class="fa fa-plus-square carticon"></i>
                      </div>
					  
                      
                      <div class="col-md-2 col-sm-2 col-xs-2"><span style="margin-left:-11px;"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$total.'</span> 
                      <i  onclick="get_cart2(this.id)"  id="'.$row["id"].'"  style="color:#f229a1; cursor:pointer;" aria-hidden="true" title="remove" class="fa fa-close"></i>
                      </div>
                   
                  ';  
				  
			}
			
			$sql1 = "SELECT SUM(tpr) AS tp FROM cart WHERE uid='$uid'";
	        $resultch = mysqli_query($conn, $sql1);
            $firmch = mysqli_fetch_array($resultch);
			
			$output .= '</div> 
			          <div class="row cart-item2">                          
                      <div class="col-xs-12">
                      <div class="col-md-7 col-sm-7 col-xs-7 text-left padding-0"></div>
                      <div style="color:#f229a1;" class="col-md-2 col-sm-2 col-xs-2">Total:</div> 
                      <div class="col-md-3 col-sm-3 col-xs-3 padding-3"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$firmch["tp"].'</div> 
                      </div>                          
                      </div>
					 	  <a href="checkout.php" class="btn btn-default cart-btn"><i class="fa fa-cart-plus"></i>&nbsp;Checkout</a>
                    
                                            
                      </div>
                   </div>
                 </div>
			';
			echo $output; 
}
else
{
		echo'   <div style="display:block;"  id="empty">
                     <div class="row"> 
                     <div class="col-md-12">
                     <center> <h4 style="color:rgb(102,102,102); font-weight:500;" class="cartempty">Your Cart is Empty</h4></center>
                     <center><h4 class="cartempty1"><i style="color:rgb(102,102,102);" class="fa fa-shopping-cart fa-3x"></i></h4></center>
                     </div>
                     </div>
                     </div>';
}
}



if(isset($_POST["mid"]))
{

                    $subpackage = $_POST["mid"];
					
				    $sql = "SELECT * FROM cart WHERE pid='$subpackage' AND uid='$uid'";
					$result = $conn->query($sql);					
					if ($result->num_rows > 0) {
					// output data of each row
						while($row = $result->fetch_assoc()) 
						{
						   $qty = $row["qty"];
						   $qty1=$qty-1;
						   if($qty1=="0")
						   {
							   $sql5 = 'DELETE FROM cart where pid="'.$subpackage.'" AND `uid`="'.$uid.'"';
							   $conn->query($sql5); 
						   }
						   else
						   {
								$query = "SELECT * FROM add_product WHERE id='$subpackage'";
								$result = mysqli_query($conn, $query);
								$firm = mysqli_fetch_array($result);
								$ofpr=$firm['offr_price'];
								$pr="";
								if($ofpr=="0")
								{
								   $pr=$firm['price'];
								}
								else
								{
									$pr=$firm['offr_price'];
								}
								$tpr=$pr*$qty1;   
							   
							   $sql5 = 'UPDATE cart SET qty="'.$qty1.'",tpr="'.$tpr.'" where pid="'.$subpackage.'" AND `uid`="'.$uid.'"';
							   $conn->query($sql5);
						   }
						}
					} 
					else 
					{
						$query = "SELECT * FROM add_product WHERE id='$subpackage'";
						$result = mysqli_query($conn, $query);
						$firm = mysqli_fetch_array($result);
						$pr=$firm['offr_price'];
						
					    $sql = "INSERT INTO cart(pid,qty,pr,tpr,uid) 
					     VALUES ('$subpackage','1','$pr','$pr','$uid')";				       
					     if ($conn->query($sql) === TRUE) 
						{
								 
						}    
					}
				   
				   

	$sql = "SELECT pd.name,pd.id,ct.pr AS pr,ct.qty,pd.time_pirod  FROM cart ct INNER JOIN add_product pd ON pd.id=ct.pid WHERE ct.uid='$uid'";
	$result = $conn->query($sql);					
	if ($result->num_rows > 0) 
	{
					// output data of each row
					$output="";
					$output .='
					 
					 <div  style="display:block;" id="full">
                    <div class="pic-container">
                         <div class="pic-row">
					
					 <div class="row cart-data1">
                     <div class="col-md-6 col-sm-6 col-xs-6">Product Name</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Duration</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Qty</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Price</div>
                     </div>
					<div class="row cart-item">';
			while($row = $result->fetch_assoc()) 
			{
                  $qty=$row["qty"];
				  $pric=$row["pr"];
                  $total=$qty*$pric;

                  $output .= '<div class="col-md-6 col-sm-6 col-xs-6 cart-item3">'.$row["name"].'</div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-2">'.$row["time_pirod"].'</div>  
                      <div class="col-md-2 col-sm-2  col-xs-2">
                      <i onclick="get_cart1(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer" aria-hidden="true" class="fa fa-minus-square carticon"> </i>
                      <div class="qty">'.$row["qty"].'</div> 
                      <i  onclick="get_cart(this.id)"  id="'.$row["id"].'" style="color:#f229a1; margin-left:-11px; cursor:pointer;" aria-hidden="true" class="fa fa-plus-square carticon"></i>
                      </div>
					  
                      <div class="col-md-2 col-sm-2 col-xs-2"><span style="margin-left:-11px;"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$total.'</span> 
                      <i  onclick="get_cart2(this.id)"  id="'.$row["id"].'" aria-hidden="true" title="remove" class="fa fa-close" style="color:#f229a1; cursor:pointer;"></i>                      
                      </div>
                   
                  ';  
				  
			}
			
			$sql1 = "SELECT SUM(tpr) AS tp FROM cart WHERE uid='$uid'";
	        $resultch = mysqli_query($conn, $sql1);
            $firmch = mysqli_fetch_array($resultch);
			
			$output .= '</div> 
			          <div class="row cart-item2">                          
                      <div class="col-xs-12">
                      <div class="col-md-7 col-sm-7 col-xs-7 text-left padding-0"></div>
                      <div style="color:#f229a1;" class="col-md-2 col-sm-2 col-xs-2">Total:</div> 
                      <div class="col-md-3 col-sm-3 col-xs-3 padding-3"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$firmch["tp"].'</div> 
                      </div>                          
                      </div>
					 	  <a href="checkout.php" class="btn btn-default cart-btn"><i class="fa fa-cart-plus"></i>&nbsp;Checkout</a>
                                            
                      </div>
                   </div>
                 </div>
			';
			echo $output; 
}
else
{
		echo'   <div style="display:block;"  id="empty">
                     <div class="row"> 
                     <div class="col-md-12">
                     <center> <h4 style="color:rgb(102,102,102); font-weight:500;" class="cartempty">Your Cart is Empty</h4></center>
                     <center><h4 class="cartempty1"><i style="color:rgb(102,102,102);" class="fa fa-shopping-cart fa-3x"></i></h4></center>
                     </div>
                     </div>
                     </div>';
}
}




if(isset($_POST["did"]))
{

	$subpackage = $_POST["did"];

	$sql5 = 'DELETE FROM cart where pid="'.$subpackage.'" AND `uid`="'.$uid.'"';
	$conn->query($sql5); 
						  
	$sql = "SELECT pd.name,pd.id,ct.pr AS pr,ct.qty,pd.time_pirod  FROM cart ct INNER JOIN add_product pd ON pd.id=ct.pid WHERE ct.uid='$uid'";
	$result = $conn->query($sql);					
	if ($result->num_rows > 0) 
	{
					// output data of each row
					$output="";
					$output .='
					 
					 <div  style="display:block;" id="full">
                    <div class="pic-container">
                         <div class="pic-row">
					
					 <div class="row cart-data1">
                     <div class="col-md-6 col-sm-6 col-xs-6">Product Name</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Duration</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Qty</div> 
                     <div class="col-md-2 col-sm-2 col-xs-2">Price</div>
                     </div>
					<div class="row cart-item">';
			while($row = $result->fetch_assoc()) 
			{
                  $qty=$row["qty"];
				  $pric=$row["pr"];
                  $total=$qty*$pric;

                  $output .= ' <div class="col-md-6 col-sm-6 col-xs-6 cart-item3">'.$row["name"].'</div> 
                      
                      <div class="col-md-2 col-sm-2 col-xs-2">'.$row["time_pirod"].'</div>  
                      <div class="col-md-2 col-sm-2  col-xs-2">
                      <i onclick="get_cart1(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer;" aria-hidden="true" class="fa fa-minus-square carticon"> </i>
                      <div class="qty">'.$row["qty"].'</div> 
                     <i  onclick="get_cart(this.id)"  id="'.$row["id"].'" style="color:#f229a1; cursor:pointer; margin-left:-11px;" aria-hidden="true" class="fa fa-plus-square carticon"></i>

                      </div>
					  
                      <div class="col-md-2 col-sm-2 col-xs-2"><span style="margin-left:-11px;"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$total.'</span> 
                      <i  onclick="get_cart2(this.id)"  id="'.$row["id"].'" aria-hidden="true" title="remove" class="fa fa-close" style="color:#f229a1; cursor:pointer;"></i>
                      </div>
                   
                  ';  
				  
			}
			
			$sql1 = "SELECT SUM(tpr) AS tp FROM cart WHERE uid='$uid'";
	        $resultch = mysqli_query($conn, $sql1);
            $firmch = mysqli_fetch_array($resultch);
			
			$output .= '</div> 
			          <div class="row cart-item2">                          
                      <div class="col-xs-12">
                      <div class="col-md-7 col-sm-7 col-xs-7 text-left padding-0"></div>
                      <div style="color:#f229a1;" class="col-md-2 col-sm-2 col-xs-2">Total:</div> 
                      <div class="col-md-3 col-sm-3 col-xs-3 padding-3"><i style="color:#f229a1;" class="fa fa-inr"></i>&nbsp;'.$firmch["tp"].'</div> 
                      </div>                          
                      </div>
					  <a href="checkout.php" class="btn btn-default cart-btn"><i class="fa fa-cart-plus"></i>&nbsp;Checkout</a>
                                            
                      </div>
                   </div>
                 </div>
			';
			echo $output; 
}
else
{
		echo'   <div style="display:block;"  id="empty">
                     <div class="row"> 
                     <div class="col-md-12">
                     <center> <h4 style="color:rgb(102,102,102); font-weight:500;" class="cartempty">Your Cart is Empty</h4></center>
                     <center><h4 class="cartempty1"><i style="color:rgb(102,102,102);" class="fa fa-shopping-cart fa-3x"></i></h4></center>
                     </div>
                     </div>
                     </div>';
}
}








?>



