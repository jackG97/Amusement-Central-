<?php

ob_start();
session_start();
if( isset($_SESSION['user'])!=""){
    header ("Location: Information.php");
}
 include_once 'dbconnect.php'
  
  
  $error= false;
  
 ?> 