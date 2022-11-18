<html>
<?php
session_start();
$uId=$_SESSION['ID'];

?>

<?php 
include 'connection.php' ;
 include 'header.php' ;?>
    <div class="tabledashboard">
    <p>
      
       <?php

$sql="Select * From faculty where Id='$uId'";
$result=mysqli_query($conn,$sql);

       if($result)
   {

       $row= mysqli_fetch_assoc($result)
  
          ?>
         <p >
           <?php  
         echo "FACULTY ID: ".$row["userid"]."<br>"."NAME: " . $row["username"]. " <br>"."DESIGNATION: " . $row["designation"]. " <br>"."JOIN YEAR: " . $row["join_year"]. " <br>"."EMAIL ID: " . $row["email"].
         " <br>";
         ?>
         </p> 
        
        <?php
         session_start();
         $_SESSION['Username']=$row["username"];
         $_SESSION['userid']=$row["userid"];
         $_SESSION['Designation']=$row["designation"];
         $_SESSION['JoinYear']=$row["join_year"];
         $_SESSION['Emailid']=$row["email"];
         $_SESSION['faculty_id']=$row["Id"];
        
      
     }
     else{
      echo "Error:No data";
     }

  

     ?>