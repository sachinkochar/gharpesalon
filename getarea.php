<?php
include "inc/config.php";

if(isset($_POST["id"]))
{
$area = mysqli_real_escape_string($conn, $_POST["id"]);
$area1 = "select * from cityloc where city_name='".$area."'";
$area2 = mysqli_query($conn, $area1);
$area="";
$area4="<option selected disabled hidden>Select Area</option>";

while ($area3=mysqli_fetch_assoc($area2)){
$area4 .= '<option  value="'.$area3["name"].'">'.$area3["name"].'</option>';
}
echo $area4;
}else{
echo "No Location Found" ;    
}    
?>