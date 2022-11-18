<?php
include 'connection.php';
session_start();
$table=$type<=3?"faculty_Details":"facultyDetails2";
echo $table;


$uId=$_SESSION['ID'];


if(isset($_POST['a']))
{
    $uId=$_POST['a'];
    echo $uId;
    exit;
    $sql="delete from 'faculty_Details' where id=$uId";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo "deleted successfully";
    }
    else{
        echo"error";
    }
}

?>