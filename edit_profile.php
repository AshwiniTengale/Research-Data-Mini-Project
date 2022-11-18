<?php
include 'connection.php';
session_start();
$UID=$_SESSION['ID'];
echo $UID;

$name=$_POST['username'];
$uid=$_POST['userid'];
$email=$_POST['email'];
$Current_password=sha1($_POST['Current_password']);
$New_password=sha1($_POST['New_password']);
$Confirm_password=sha1($_POST['Confirm_password']);
$design=$_POST['selectrole'];
$join_year=$_POST['join_year'];

echo $Current_password;
echo "<br>";
echo $New_password;
echo "<br>";
echo $Confirm_password;
echo "<br>";
// if($New_password!=$Confirm_password){
//   echo "Your New password and Current password Does not match";
// }


$checkpassword = "Select password from faculty where Id = '$UID' ";
$res_pass= mysqli_query($conn,$checkpassword);

// $value = mysqli_fetch_rows($res_pass);
if (mysqli_num_rows($res_pass) > 0) {
  // output data of each row
  if($row = mysqli_fetch_assoc($res_pass)) {
    
   if($Current_password==$row["password"]){
    if($New_password!=$Confirm_password){
  echo "Your New password and Current password Does not match";
}else{
    $update_pass="Update faculty set password='$New_password' where Id = '$UID' ";
    $update_query=mysqli_query($conn,$update_pass);

         if($update_query) {?>
          <script>
          alert("New password updated successfully");    
        </script>
    <?php
   };
 } 
}
 else{
    echo "please enter Correct Password";
  }
}
}else{
  echo "The Username does not Exist";

}

exit;

$update="Update faculty set userid='$uid',username='$name',
designation='$design',join_year='$join_year',email='$email',password='$hash' where Id='$UID'";
$result=mysqli_query($conn,$update);


if($result) {?>
      

<?php
echo $result;
}
else{
?>
<script>

alert("Something when Wrong");
location.href='login.html';
</script>  
<?php
}

?>