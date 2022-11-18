<?php

include 'connection.php';


$Id=$_POST["userid"];

$email=$_POST["email"];

$pass=$_POST['password'];

$hash=sha1($pass);
session_start();
$_SESSION['uid']=$Id;

        // output data of each row
    
          $update="Update faculty set password='$hash' where userid='$Id' and email='$email'";
          $result1=mysqli_query($conn,$update);

         if($result1) {?>
      
          <script>

          alert("New password updated successfully");
          location.href='login.php';
        </script>
    
<?php
}
else{
  ?>
  <script>

  alert("Please check your input deatils");
  location.href='forgotpassword.html';
</script>  
<?php
}

      
    
   ?>
   









