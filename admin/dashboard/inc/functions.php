<?php
//Genrate Sponser ID
function GetSpId(){
    $sp_id = rand(199, 999);
    return 'SB000'.$sp_id;
}