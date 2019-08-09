<?php
 session_start();

 if(isset($_GET['lang']) && !empty($_GET['lang'])){
      if ($_GET['lang']=="en") {
      	$_SESSION['lang']="en";
      }
      else if($_GET['lang']=="bang"){
        $_SESSION['lang']="bang";
      }
 }else{
 	$_SESSION['lang']="en";
 }
  
     
      require_once 'language/' . $_SESSION['lang'] . '.php';
?>