

<?php

include 'connection.php';


session_start();
$uId=$_SESSION['ID'];


$type=$_SESSION['value'];


    
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
 

$sql1 = "INSERT INTO faculty_Details (`faculty_id`,`type_of_activity`,`Authors`,`Yearly`,`Title_name1`,`Title_name2`,`vol_issue_no`,`conductBy_venue`,`page_no`,`url`,`scopus_index`,`web_of_science`,`ISSN`,`category`,`level`)
VALUES ('$uId','$type','$author','$publiction','$title1','$title2',".($vol_no==NULL?"NULL" :"'$vol_no'").",".($venue==NULL?"NULL" :"'$venue'").",'$page','$url','$scopus','$web','$ISSN','$cat','$level')";

$sql2= "INSERT INTO facultyDetails2 (`faculty_id`,`type_of_activity`,`faculty_member`,`title`,`application_no`,`Referance_no`,`Yearly`,`status`,`Award_ref_no`,`Research_scholor`,`thesis_title`,`guide_name`,`co_guide_name`,`Research_center`,`subject`,`university`,`department`,`country`)
  VALUES('$uId','$type',".($facultyMember==NULL?"NULL" :"'$facultyMember'").",".($title==NULL?"NULL" :"'$title'").",".($app==NULL?"NULL" :"'$app'").",".($ref==NULL?"NULL" :"'$ref'").",".($reg_date==NULL?"NULL" :"'$reg_date'").",".($status==NULL?"NULL" :"'$status'").",".($award_no==NULL?"NULL" :"'$award_no'").",".($Research_scholor==NULL?"NULL" :"'$Research_scholor'").",".($thesis==NULL?"NULL" :"'$thesis'").",".($guideName==NULL?"NULL" :"'$guideName'").",".($Co_guide==NULL?"NULL" :"'$Co_guide'").",".($research_center==NULL?"NULL" :"'$research_center'").",".($Subject==NULL?"NULL" :"'$Subject'").",".($university==NULL?"NULL" :"'$university'").",".($dept==NULL?"NULL" :"'$dept'").",".($country==NULL?"NULL" :"'$country'").")";
  
  $insert=$type<=3?"$sql1": "$sql2";


    if (mysqli_query($conn, $insert))
     {
     ?>
     <script>alert("Inserted Successfully");
     location.href='adddetails.php';
    </script>
   
<?php
    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
    mysqli_close($conn);
  
         
      
     ?>




