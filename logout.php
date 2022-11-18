<?php
session_start();
session_destroy();
header("location:login.php");
exit;
//   if( $x)
//   {

// header('Location:login.php');
//   }
//   else echo "No";
$X=session_unset();
  if($X)
  {
    echo "yes";
  }
  else{
    echo "no";
  }
?>