<?php
  session_start();

if(isset($_SESSION['last_active_time']))
{
    if((time()-$_SESSION['last_active_time'])>100)
    {
        header('Location:logout.php');
    }
}
$_SESSION['last_active_time']=time();
 if(!isset($_SESSION['is_login']))
 {

    header('Location:logout.php');
     die();
 }
 ?>