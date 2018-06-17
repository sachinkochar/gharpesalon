<?php

setcookie('id',"",time() -3600,"/","");
setcookie('logged_in',"",time() -3600,"/","");
setcookie('username',"",time() -3600,"/","");
session_start();
session_unset();
session_destroy();
header("Location: ../index.php");
?>