<?php 

 session_start();
   session_destroy();
   setcookie("status",$_COOKIE["status"],time()-1);
   header("Location: index.php");

 ?>
