<?php
include 'connection.php';


    $name=$_POST['username'];
    $id=$_POST['userid'];
    $des=$_POST['selectrole'];
    $join=$_POST['join_year'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $hash=sha1($pass);


$sql = "INSERT INTO faculty (userid,username,designation,join_year,email,password)
VALUES ('$id','$name','$des','$join','$email','$hash')";

if (mysqli_query($conn, $sql)) {
 
        ?>
        <script>
          alert("Registrated Successfully!");
          location.href='login.php';
        </script>
  
       <?php
       
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

     
   
?>