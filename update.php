<?php
include 'connection.php' ;
session_start();

$UID=$_SESSION['ID'];
$table=$_SESSION['table'];


$author=$_POST['Authors'];
$publiction=$_POST['Yearly'];
$title1=$_POST['Title_name1'];
$title2=$_POST['Title_name2'];
$vol_no=$_POST['vol_issue_no'];
$venue=$_POST['conductBy_venue'];
$page=$_POST['page_no'];
$url=$_POST['url'];
$scopus=$_POST['scopus_index'];
$web=$_POST['web_of_science'];
$ISSN=$_POST['ISSN'];
$cat=$_POST['category'];
$level=$_POST['level'];

$facultyMember=$_POST['faculty_member'];
    $title=$_POST['title'];
    $app=$_POST['application_no'];
    $ref=$_POST['Referance_no'];
    $reg_date=$_POST['Yearly'];
    $status=$_POST['status'];
    
    $award_no=$_POST['Award_ref_no'];
    $Research_scholor=$_POST['Research_scholor'];
    $thesis=$_POST['thesis_title'];
    $guideName=$_POST['guide_name'];
    $Co_guide=$_POST['co_guide_name'];
   
    $research_center=$_POST['Research_center'];
    $Subject=$_POST['subject'];
    $university=$_POST['university'];
    $dept=$_POST['department'];
    $country=$_POST['country'];

 
 

$update1="Update $table set Authors='$author',Yearly='$publiction',Title_name1='$title1',Title_name2='$title2',vol_issue_no='$vol_no',conductBy_venue='$venue',page_no='$page',url='$url',scopus_index='$scopus',web_of_science='$web',ISSN='$ISSN',category='$cat',level='$level' where faculty_id='$UID' ";
$update2= "Update $table set faculty_member='$facultyMember',title='$title',application_no='$app',Referance_no='$ref',Yearly='$reg_date',status='$status',Award_ref_no='$award_no',Research_scholor='$Research_scholor',thesis_title= '$thesis' , guide_name= '$guideName',co_guide_name=' $Co_guide',Research_center=' $research_center',subject='$Subject',university='$university',department='$dept',country=' $country' where  faculty_id='$UID' " ;

$sql=$table=="faculty_Details"?"$update1": "$update2";
$result=mysqli_query($conn,$sql);

if($result) {
    ?>
      
    <script>

    alert("Data Updated Successfully");

  </script>

<?php
}
else{
?>
<script>

alert("Something when Wrong");

</script>  
<?php
}





?>