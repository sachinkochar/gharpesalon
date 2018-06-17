<?php
if(isset($_COOKIE['logged_fb']) || $_COOKIE['logged_fb']===TRUE)
{
    setcookie('logged_fb',"",time() -3600,"/","");
    session_start();
    session_unset();
    session_destroy();
    

}
if(isset($_COOKIE['logged_g']) || $_COOKIE['logged_g']===TRUE)
{
    setcookie('logged_g',"",time() -3600,"/","");
   session_start();
    session_unset();
    session_destroy();
    
}
setcookie('id',"",time() -3600,"/","");
setcookie('logged_in',"",time() -3600,"/","");
setcookie('username',"",time() -3600,"/","");
echo '1';
?>