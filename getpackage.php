   <?php
include "inc/config.php";

if(isset($_POST["id"]))
{

 $subpackage = $_POST["id"];
 if($subpackage=="0")
 {
 $query  = "SELECT ct.name AS cate, pd.id, pd.name,pd.price,pd.offr_price,pd.time_pirod,pd.extra FROM add_product pd INNER JOIN cata ct ON pd.cata_id=ct.id WHERE pd.status='A'";
 }
 else
 {
	$query  = "SELECT ct.name AS cate, pd.id, pd.name,pd.price,pd.offr_price,pd.time_pirod,pd.extra FROM add_product pd INNER JOIN cata ct ON pd.cata_id=ct.id WHERE pd.status='A' AND  ct.id='".$subpackage."' ";
 }
 
 
 $res = mysqli_query($conn, $query);
 
 



 
  while($row = mysqli_fetch_assoc($res))
 {

$abc="";
$ab="";

   if($row["offr_price"]=="0")
   {
	  $abc= '<div class="col-md-2 col-sm-2 col-xs-2">
             <h6  style="text-decoration: line-through;" class="panel-title resp-accordian1">
             <i style="color:#FFFFFF;" ></i></h6> 
        </div>
      
         <div class="col-md-3 col-sm-3 col-xs-3"> 
          <h6  class="panel-title resp-accordian1">
         <i  class="fa fa-inr resp-accordian1"></i>&nbsp;'.$row["price"].'</h6>
         </div>';
		 
		 $ab=' <li>Price : <i class="fa-fa-inr"></i>&nbsp;'.$row["price"].'</li>';

   }
   else
   {
       $dis=$row["price"]-$row["offr_price"];
	   $abc= '<div class="col-md-2 col-sm-2 col-xs-2">
             <h6  style="text-decoration:line-through;" class="panel-title resp-accordian1">
             <i  class="fa fa-inr resp-accordian1"></i>&nbsp;'.$row["price"].'</h6> 
        </div>
      
         <div class="col-md-3 col-sm-3 col-xs-3">
          <h6   class="panel-title resp-accordian1">
         <i  class="fa fa-inr resp-accordian1"></i>&nbsp;'.$row["offr_price"].'</h6>
         </div>';
		 
		  $ab=' <li>Price : <i class="fa-fa-inr"></i>&nbsp;'.$row["price"].'</li>
                
                <li>You Saved : <i class="fa-fa-inr"></i>&nbsp;'.$dis.'</li>
                ';
   }

  echo '<div id="'.$row["cate"].'" class="tab-pane fade in active">
       <div class="panel-group" id="accordion">
          <div  class="panel panel-default">
              <div style="background-color:#f229a1;" class="panel-heading">
                  <div class="row">
      
           <div class="col-md-3 col-sm-3 col-xs-3">
             <h4  class="panel-title resp-accordian">'.$row["name"].'</h4>
           </div>
      
        '.$abc.'
		
		
		      
         <div class="col-md-2 col-sm-2 col-xs-2">
          <h4 class="panel-title resp-accordian">
            <a   style="cursor:pointer;" onclick="get_cart(this.id)"  id="'.$row["id"].'"> <i id="'.$row["id"].'"  class="fa fa-plus resp-accordian"></i> </a>
          </h4>
         </div>
      
        <div class="col-md-2 col-sm-2 col-xs-2">
          <h4 class="panel-title resp-accordian">
            <a  style="text-decoration:none;" class="fntawsm collapsed" data-toggle="collapse" data-parent="#accordion" href="#a'.$row["id"].'">
             
            </a>
         </h4>
        </div>
      
         </div>
      </div>
      
      <div id="'."a".$row["id"].'" class="panel-collapse collapse ">
        <div class="panel-body">
        
           <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-6">
                <ul style="list-style-type:none; color:#f229a1;">
                   <li>Duration : '.$row["time_pirod"].'</li>
                   '.$ab.'
                         
                </ul>
            </div>
        
        <div class="col-md-6 col-sm-6 col-xs-6">
            <ul style="list-style-type:none; color:#f229a1; margin-left:5px;">
             <li>'.$row["extra"].'</li>
                
             </ul>
                           </div>
                        </div> 
                     </div>
                  </div>
               </div>
            </div> 
         </div>
      
      ';
      
      
 }

}
else
{ 
 echo 'Packages Not Found';
}

?>