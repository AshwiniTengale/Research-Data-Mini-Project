<?php
include 'connection.php' ;?>
<head>
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
  h2{
    text-align:center;
  }
  body{
          
          background-image: url("images/background1.png");
          background-repeat: no-repeat;  
            background-position: center;
            background-size: cover;
            }

  </style>
</head>
<?php



$userid=$_POST['userid'];
$type=$_POST['type_of_activity'];
$year=$_POST['Yearly'];

$table=$type<=3?"faculty_Details":"facultyDetails2";
$sql="Select * from faculty where userid='$userid'";

$result=mysqli_query($conn,$sql);

if($result){
    
    $row1= mysqli_fetch_assoc($result);
    
       $facultyid=$row1['Id'];
if($userid  && $type){



       $sql1=$year==null?"Select * From $table where faculty_id='$facultyid' AND type_of_activity='$type'":"Select * From $table where faculty_id= '$facultyid' AND type_of_activity='$type' AND  year(Yearly)='$year'";
       $result1=mysqli_query($conn,$sql1);

if($result1->num_rows>0){
 
  

  $S=$type<=2?"Paper":"Chapter";
  $T=$type<=2?"Volume No and Issue No":"Conducted by and Venue";

    //if ($result) {
      if($type<=2) {
        $R=$type==1?"Journal Paper":"Book/Book Chapter";
        ?>
        <h2 ><?php echo $R ?></h2>

           
            <table  class="table table-sm">
                <thead class="thead-light">
            <tr>
            <th>Authors</th>
            <th>Publication Date</th>
            <th>Title of the <?php echo $S ?> </th>
            <th>Title </th>
            <th><?php echo $T?></th>
            <th>Page No</th>
            <th>URL</th>
            <th>Scopus Indexed</th>
            <th>Web of Science</th>
            <th>ISSN/ISBN</th>
            <th>SC/ST/GEN</th>
            <th>Level</th>
            </tr>        
           </thead>
          
        
<?php

            while($row = mysqli_fetch_assoc($result1)) {

            

          //all or yearly condition query
            if($row["type_of_activity"]=='1'||$row["type_of_activity"]=='2'){

                

?>     

         <tr>
         
          <td><?php echo $row["Authors"]; ?></td>
          <td><?php echo $row["Yearly"];?></td>
          <td><?php echo $row["Title_name1"];?></td>
          <td><?php echo $row["Title_name2"];?></td>
          <td><?php echo $row["vol_issue_no"];?></td>
          <td><?php echo $row["page_no"];?></td>
          <td><?php echo $row["url"];?></td>
          <td><?php echo $row["scopus_index"];?></td>
          <td><?php echo $row["web_of_science"];?></td>
          <td><?php echo $row["ISSN"];?></td>
          <td><?php echo $row["category"];?></td>
          <td><?php echo $row["level"];?></td>
        </tr>
   <?php }
            
            }
   ?>
       </table>   <?php }
             

  if($type==3) {?>
  <h2>Conference Publications</h2>
    <table  class="table table-sm">
        <thead class="thead-light">
    <tr>
    <th>Authors</th>
    <th>Publication Date</th>
    <th>Title of paper </th>
    <th>Title of conferance </th>
    <th>Venue</th>
    <th>Page No</th>
    <th>URL</th>
    <th>Scopus Indexed</th>
    <th>Web of Science</th>
    <th>ISSN/ISBN</th>
    <th>SC/ST/GEN</th>
    <th>Level</th>
    </tr>        
   </thead>

<?php
    while($row = mysqli_fetch_assoc($result1)) {

  //all or yearly condition query
    if($row["type_of_activity"]=='3'){

?>     

 <tr>
 
  <td><?php echo $row["Authors"]; ?></td>
  <td><?php echo $row["Yearly"];?></td>
  <td><?php echo $row["Title_name1"];?></td>
  <td><?php echo $row["Title_name2"];?></td>
  <td><?php echo $row["conductBy_venue"];?></td>
  <td><?php echo $row["page_no"];?></td>
  <td><?php echo $row["url"];?></td>
  <td><?php echo $row["scopus_index"];?></td>
  <td><?php echo $row["web_of_science"];?></td>
  <td><?php echo $row["ISSN"];?></td>
  <td><?php echo $row["category"];?></td>
  <td><?php echo $row["level"];?></td>
</tr>
<?php }
    }
  }


if($type==4) {?>
<h2>Patents Awarded</h2>
    <table  class="table table-sm">
        <thead class="thead-light">
    <tr>
    <th>Faculty Name</th>
    <th>Title  </th>
    <th>Application Number </th>
    <th>Award Date</th>
    <th>Award Referance Number</th>
    </tr>        
   </thead>

<?php
    while($row = mysqli_fetch_assoc($result1)) {

  //all or yearly condition query
    if($row["type_of_activity"]=='4'){

?>     

 <tr>
 
  <td><?php echo $row["faculty_member"]; ?></td>
  <td><?php echo $row["title"];?></td>
  <td><?php echo $row["application_no"];?></td>
  <td><?php echo $row["Yearly"];?></td>
  <td><?php echo $row["Award_ref_no"];?></td>
  
</tr>
<?php }
    }
  }
  if($type==5) {?>
  <h3>Patents Ongoing</h3>
    <table  class="table table-sm">
        <thead class="thead-light">
    <tr>
    <th>Faculty Name</th>
    <th>Title  </th>
    <th>Application Number </th>
    <th>Referance Number</th>
    <th>Referance Date</th>
    <th>Status</th>
    </tr>        
   </thead>

<?php
    while($row = mysqli_fetch_assoc($result1)) {

  //all or yearly condition query
    if($row["type_of_activity"]=='5'){

?>     

 <tr>
 
  <td><?php echo $row["faculty_member"]; ?></td>
  <td><?php echo $row["title"];?></td>
  <td><?php echo $row["application_no"];?></td>
  <td><?php echo $row["Referance_no"]?></td>
  <td><?php echo $row["Yearly"];?></td>
  <td><?php echo $row["status"];?></td>
  
</tr>
<?php }
    }
  }

  if($type==6) {?>
  <h2>phd Awarded</h2>
    <table  class="table table-sm">
        <thead class="thead-light">
    <tr>
    <th>Research Scholor</th>
    <th>Title of thesis  </th>
    <th>Guide Name </th>
    <th>Co-Guide Name</th>
    <th>Date of Provisional Award</th>
    <th>Research Center</th>
    </tr>        
   </thead>

<?php
    while($row = mysqli_fetch_assoc($result1)) {

  //all or yearly condition query
    if($row["type_of_activity"]=='6'){

?>     

 <tr>
 
  <td><?php echo $row["Research_scholor"]; ?></td>
  <td><?php echo $row["thesis_title"];?></td>
  <td><?php echo $row["guide_name"];?></td>
  <td><?php echo $row["co_guide_name"]?></td>
  <td><?php echo $row["Yearly"];?></td>
  <td><?php echo $row["Research_center"];?></td>
  
</tr>
<?php }
    }
  }
  if($type==7) {?>
  <h2>phd Ongoing</h2>
    <table  class="table table-sm">
        <thead class="thead-light">
    <tr>
    <th>Research Scholor</th>
    <th>Subject </th>
    <th>Title of thesis  </th>
    <th>University</th>
    <th>Department</th>
    <th>Country</th>
    <th>Registration Date</th>
    </tr>        
   </thead>

<?php
    while($row = mysqli_fetch_assoc($result1)) {

  //all or yearly condition query
    if($row["type_of_activity"]=='7'){

?>     

 <tr>
 
  <td><?php echo $row["Research_scholor"]; ?></td>
  <td><?php echo $row["subject"]?></td>
  <td><?php echo $row["thesis_title"];?></td>
  <td><?php echo $row["university"];?></td>
  <td><?php echo $row["department"]?></td>
  <td><?php echo $row["country"];?></td>
  <td><?php echo $row["Yearly"];?></td>
  
</tr>
<?php }
    }
  }
  }
  



else{
    
    ?>
    <script>alert("No data Found"); 
 location.href='admin1.php';</script> 
<?php
}
}




?><?php

if(!$userid){

  $table=$type<=3?"faculty_Details":"facultyDetails2";
  $sqlquery=$year==null?"Select * From $table where type_of_activity='$type'":"Select * From $table where type_of_activity='$type' AND  year(Yearly)='$year'";
  
  $Result=mysqli_query($conn,$sqlquery);
  if($Result->num_rows>0){
 
    
    $S=$type<=2?"Paper":"Chapter";
    $T=$type<=2?"Volume No and Issue No":"Conducted by and Venue";
  
     
        if($type<=2) {
          $R=$type==1?"Journal Paper":"Book/Book Chapter";
          ?>
          <h2 ><?php echo $R ?></h2>
  
             
              <table  class="table table-sm">
                  <thead class="thead-light">
              <tr>
              <th>Authors</th>
              <th>Publication Date</th>
              <th>Title of the <?php echo $S ?> </th>
              <th>Title </th>
              <th><?php echo $T?></th>
              <th>Page No</th>
              <th>URL</th>
              <th>Scopus Indexed</th>
              <th>Web of Science</th>
              <th>ISSN/ISBN</th>
              <th>SC/ST/GEN</th>
              <th>Level</th>
              </tr>        
             </thead>
            
          
  <?php
  
              while($row = mysqli_fetch_assoc($Result)) {
  
              
  
            //all or yearly condition query
              if($row["type_of_activity"]=='1'||$row["type_of_activity"]=='2'){
  
                  
  
  ?>     
  
           <tr>
           
            <td><?php echo $row["Authors"]; ?></td>
            <td><?php echo $row["Yearly"];?></td>
            <td><?php echo $row["Title_name1"];?></td>
            <td><?php echo $row["Title_name2"];?></td>
            <td><?php echo $row["vol_issue_no"];?></td>
            <td><?php echo $row["page_no"];?></td>
            <td><?php echo $row["url"];?></td>
            <td><?php echo $row["scopus_index"];?></td>
            <td><?php echo $row["web_of_science"];?></td>
            <td><?php echo $row["ISSN"];?></td>
            <td><?php echo $row["category"];?></td>
            <td><?php echo $row["level"];?></td>
          </tr>
     <?php }
              }
     ?>
         </table>   <?php }
               
  
    if($type==3) {?>
    <h2>Conference Publications</h2>
      <table  class="table table-sm">
          <thead class="thead-light">
      <tr>
      <th>Authors</th>
      <th>Publication Date</th>
      <th>Title of paper </th>
      <th>Title of conferance </th>
      <th>Venue</th>
      <th>Page No</th>
      <th>URL</th>
      <th>Scopus Indexed</th>
      <th>Web of Science</th>
      <th>ISSN/ISBN</th>
      <th>SC/ST/GEN</th>
      <th>Level</th>
      </tr>        
     </thead>
  
  <?php
      while($row = mysqli_fetch_assoc($Result)) {
  
    //all or yearly condition query
      if($row["type_of_activity"]=='3'){
  
  ?>     
  
   <tr>
   
    <td><?php echo $row["Authors"]; ?></td>
    <td><?php echo $row["Yearly"];?></td>
    <td><?php echo $row["Title_name1"];?></td>
    <td><?php echo $row["Title_name2"];?></td>
    <td><?php echo $row["conductBy_venue"];?></td>
    <td><?php echo $row["page_no"];?></td>
    <td><?php echo $row["url"];?></td>
    <td><?php echo $row["scopus_index"];?></td>
    <td><?php echo $row["web_of_science"];?></td>
    <td><?php echo $row["ISSN"];?></td>
    <td><?php echo $row["category"];?></td>
    <td><?php echo $row["level"];?></td>
  </tr>
  <?php }
      }
    }
  
  
  if($type==4) {?>
  <h2>Patents Awarded</h2>
      <table  class="table table-sm">
          <thead class="thead-light">
      <tr>
      <th>Faculty Name</th>
      <th>Title  </th>
      <th>Application Number </th>
      <th>Award Date</th>
      <th>Award Referance Number</th>
      </tr>        
     </thead>
  
  <?php
      while($row = mysqli_fetch_assoc($Result)) {
  
    //all or yearly condition query
      if($row["type_of_activity"]=='4'){
  
  ?>     
  
   <tr>
   
    <td><?php echo $row["faculty_member"]; ?></td>
    <td><?php echo $row["title"];?></td>
    <td><?php echo $row["application_no"];?></td>
    <td><?php echo $row["Yearly"];?></td>
    <td><?php echo $row["Award_ref_no"];?></td>
    
  </tr>
  <?php }
      }
    }
    if($type==5) {?>
    <h2>Patents Ongoing</h2>
      <table  class="table table-sm">
          <thead class="thead-light">
      <tr>
      <th>Faculty Name</th>
      <th>Title  </th>
      <th>Application Number </th>
      <th>Referance Number</th>
      <th>Referance Date</th>
      <th>Status</th>
      </tr>        
     </thead>
  
  <?php
      while($row = mysqli_fetch_assoc($Result)) {
  
    //all or yearly condition query
      if($row["type_of_activity"]=='5'){
  
  ?>     
  
   <tr>
   
    <td><?php echo $row["faculty_member"]; ?></td>
    <td><?php echo $row["title"];?></td>
    <td><?php echo $row["application_no"];?></td>
    <td><?php echo $row["Referance_no"]?></td>
    <td><?php echo $row["Yearly"];?></td>
    <td><?php echo $row["status"];?></td>
    
  </tr>
  <?php }
      }
    }
  
    if($type==6) {?>
    <h2>phd Awarded</h2>
      <table  class="table table-sm">
          <thead class="thead-light">
      <tr>
      <th>Research Scholor</th>
      <th>Title of thesis  </th>
      <th>Guide Name </th>
      <th>Co-Guide Name</th>
      <th>Date of Provisional Award</th>
      <th>Research Center</th>
      </tr>        
     </thead>
  
  <?php
      while($row = mysqli_fetch_assoc($Result)) {
  
    //all or yearly condition query
      if($row["type_of_activity"]=='6'){
  
  ?>     
  
   <tr>
   
    <td><?php echo $row["Research_scholor"]; ?></td>
    <td><?php echo $row["thesis_title"];?></td>
    <td><?php echo $row["guide_name"];?></td>
    <td><?php echo $row["co_guide_name"]?></td>
    <td><?php echo $row["Yearly"];?></td>
    <td><?php echo $row["Research_center"];?></td>
    
  </tr>
  <?php }
      }
    }
    if($type==7) {?>
    <h2>phd Ongoing</h2>
      <table  class="table table-sm">
          <thead class="thead-light">
      <tr>
      <th>Research Scholor</th>
      <th>Subject </th>
      <th>Title of thesis  </th>
      <th>University</th>
      <th>Department</th>
      <th>Country</th>
      <th>Registration Date</th>
      </tr>        
     </thead>
  
  <?php
      while($row = mysqli_fetch_assoc($Result)) {
  
    //all or yearly condition query
      if($row["type_of_activity"]=='7'){
  
  ?>     
  
   <tr>
   
    <td><?php echo $row["Research_scholor"]; ?></td>
    <td><?php echo $row["subject"]?></td>
    <td><?php echo $row["thesis_title"];?></td>
    <td><?php echo $row["university"];?></td>
    <td><?php echo $row["department"]?></td>
    <td><?php echo $row["country"];?></td>
    <td><?php echo $row["Yearly"];?></td>
    
  </tr>
  <?php }
      }
    }
    }
    
  
else{
    
  ?>
  <script>alert("No data Found"); 
location.href='admin1.php';</script> 
<?php
}
 }
}


     
if($userid && !$type){


$Sqlquery=$year==null?"Select * From  faculty_Details WHERE `faculty_id`='$facultyid' Order by `type_of_activity` " :"Select * From  faculty_Details WHERE `faculty_id`='$facultyid' AND year(Yearly)='$year' Order by `type_of_activity` ";
$RESULT=mysqli_query($conn,$Sqlquery);
if(mysqli_num_rows($RESULT)==0){?>
  <script>

  alert("Please Enter Correct UserId");
  location.href='admin1.php';
</script>
<?php
}


$flag1=$flag2=$flag3=$flag4=$flag5=$flag6=$flag7=0;
while($row = mysqli_fetch_assoc($RESULT)) {
    

   
    switch($row['type_of_activity']){
      
        case "1":
             
             if($flag1==0){ ;
                
               ?>
            
          
    
               
                <table  class="table table-sm">
                <thead class="thead-light">
                <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>Journal Papers</h3><th>
                </tr>
                <tr >
                 
                <th>Authors</th>
                <th>Publication Date</th>
                <th>Title of the Paper </th>
                <th>Title </th>
                <th>Volume No and Issue No</th>
                <th>Page No</th>
                <th>URL</th>
                <th>Scopus Indexed</th>
                <th>Web of Science</th>
                <th>ISSN/ISBN</th>
                <th>SC/ST/GEN</th>
                <th>Level</th>
                </tr>        
             </thead>
                 
                    <?php $flag1=1;
                    } 
             
                                         
                        ?>     

                        <tr>

                        <td><?php echo $row["Authors"]; ?></td>
                        <td><?php echo $row["Yearly"];?></td>
                        <td><?php echo $row["Title_name1"];?></td>
                        <td><?php echo $row["Title_name2"];?></td>
                        <td><?php echo $row["vol_issue_no"];?></td>
                        <td><?php echo $row["page_no"];?></td>
                        <td><?php echo $row["url"];?></td>
                        <td><?php echo $row["scopus_index"];?></td>
                        <td><?php echo $row["web_of_science"];?></td>
                        <td><?php echo $row["ISSN"];?></td>
                        <td><?php echo $row["category"];?></td>
                        <td><?php echo $row["level"];?></td>
                        </tr>
                       
                        <?php 
                        break; 
                    
                        case "2":
                            
             
                            if($flag2==0){ ;
                                
                              ?>
                           
                      
                   
                              
                               <table  class="table table-sm">
                                   <thead class="thead-light">
                                   <tr  align="center" class="tablehead">
                                  <th colspan="12" ><h3>Book/Book Chapters</h3><th>
                                       </tr>
                               <tr>
                               <th>Authors</th>
                               <th>Publication Date</th>
                               <th>Title of the Book Chapter </th>
                               <th>Title </th>
                               <th>Volume No and Issue No</th>
                               <th>Page No</th>
                               <th>URL</th>
                               <th>Scopus Indexed</th>
                               <th>Web of Science</th>
                               <th>ISSN/ISBN</th>
                               <th>SC/ST/GEN</th>
                               <th>Level</th>
                               </tr>        
                              </thead>
                                
                                   <?php $flag2=1;
                                   } 
                                
                                                 
                                       ?>     
               
                                       <tr>
               
                                       <td><?php echo $row["Authors"]; ?></td>
                                       <td><?php echo $row["Yearly"];?></td>
                                       <td><?php echo $row["Title_name1"];?></td>
                                       <td><?php echo $row["Title_name2"];?></td>
                                       <td><?php echo $row["vol_issue_no"];?></td>
                                       <td><?php echo $row["page_no"];?></td>
                                       <td><?php echo $row["url"];?></td>
                                       <td><?php echo $row["scopus_index"];?></td>
                                       <td><?php echo $row["web_of_science"];?></td>
                                       <td><?php echo $row["ISSN"];?></td>
                                       <td><?php echo $row["category"];?></td>
                                       <td><?php echo $row["level"];?></td>
                                       </tr>
                                       <?php 
                                      
                                  // }
                            
                                       ?>
                                       <?php 
                                       break; 
                                            
                        case "3":
             
                            if($flag3==0){
                              ?>
                         
                   
                              
                               <table  class="table table-sm">
                                   <thead class="thead-light">
                                   <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>Conference Details</h3><th>
                </tr>
                               <tr>
                               <th>Authors</th>
                               <th>Publication Date</th>
                               <th>Title of the Paper </th>
                               <th>Title </th>
                               <th>Venue</th>
                               <th>Page No</th>
                               <th>URL</th>
                               <th>Scopus Indexed</th>
                               <th>Web of Science</th>
                               <th>ISSN/ISBN</th>
                               <th>SC/ST/GEN</th>
                               <th>Level</th>
                               </tr>        
                              </thead>
                                
                                   <?php $flag3=1;
                                   } 
                                           
                                       ?>     
               
                                       <tr>
               
                                       <td><?php echo $row["Authors"]; ?></td>
                                       <td><?php echo $row["Yearly"];?></td>
                                       <td><?php echo $row["Title_name1"];?></td>
                                       <td><?php echo $row["Title_name2"];?></td>
                                       <td><?php echo $row["conductBy_venue"];?></td>
                                       <td><?php echo $row["page_no"];?></td>
                                       <td><?php echo $row["url"];?></td>
                                       <td><?php echo $row["scopus_index"];?></td>
                                       <td><?php echo $row["web_of_science"];?></td>
                                       <td><?php echo $row["ISSN"];?></td>
                                       <td><?php echo $row["category"];?></td>
                                       <td><?php echo $row["level"];?></td>
                                       </tr>
                                       <?php 
                                      
                                  // }
                            
                                       ?>
                                        <?php 
                                       break; 
    }  
}
    
$Sqlquery=$year==null?"Select * From  facultyDetails2 WHERE `faculty_id`='$facultyid' Order by `type_of_activity` " :"Select * From  facultyDetails2 WHERE `faculty_id`='$facultyid' AND year(Yearly)='$year' Order by `type_of_activity` ";
$RESULT=mysqli_query($conn,$Sqlquery);




     while($row = mysqli_fetch_assoc($RESULT)) {
         $flag=0;
         
             switch($row['type_of_activity']){
             case "4":
             
                   if($flag4==0){
                 ?>
                  
                    <table  class="table table-sm">
                        <thead class="thead-light">
                        <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>Patent Awarded</h3><th>
                </tr>
                    <tr>
                    <th>Faculty Name</th>
                    <th>Title  </th>
                    <th>Application Number </th>
                    <th>Award Date</th>
                    <th>Award Referance Number</th>
                    </tr>        
                </thead>

                <?php $flag4=1;}
              

                ?>     

                <tr>
                
                <td><?php echo $row["faculty_member"]; ?></td>
                <td><?php echo $row["title"];?></td>
                <td><?php echo $row["application_no"];?></td>
                <td><?php echo $row["Yearly"];?></td>
                <td><?php echo $row["Award_ref_no"];?></td>
                
                </tr>
                <?php 
               break;

               case "5":
             
                if($flag5==0){
?>
                    
                    <table  class="table table-sm">
                        <thead class="thead-light">
                        <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>Patent Ongoing</h3><th>
                </tr>
                    <tr>
                    <th>Faculty Name</th>
                    <th>Title  </th>
                    <th>Application Number </th>
                    <th>Referance Number</th>
                    <th>Referance Date</th>
                    <th>Status</th>
                    </tr>        
                   </thead>
                
                <?php $flag5=1;}
                    
                
                
                ?>     
                
                 <tr>
                 
                  <td><?php echo $row["faculty_member"]; ?></td>
                  <td><?php echo $row["title"];?></td>
                  <td><?php echo $row["application_no"];?></td>
                  <td><?php echo $row["Referance_no"]?></td>
                  <td><?php echo $row["Yearly"];?></td>
                  <td><?php echo $row["status"];?></td>
                  
                </tr>
                <?php 
                break;

                case "6":
                    if($flag6==0){
                        ?>
               
                <table  class="table table-sm">
                    <thead class="thead-light">
                    <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>phd Awarded</h3><th>
                </tr>   
                      

                <tr>
                <th>Research Scholor</th>
                <th>Title of thesis  </th>
                <th>Guide Name </th>
                <th>Co-Guide Name</th>
                <th>Date of Provisional Award</th>
                <th>Research Center</th>
                </tr>        
               </thead>
            
            <?php
                
                    $flag6=1;}
            ?>     
            
             <tr>
             
              <td><?php echo $row["Research_scholor"]; ?></td>
              <td><?php echo $row["thesis_title"];?></td>
              <td><?php echo $row["guide_name"];?></td>
              <td><?php echo $row["co_guide_name"]?></td>
              <td><?php echo $row["Yearly"];?></td>
              <td><?php echo $row["Research_center"];?></td>
              
            </tr>
            <?php 
         break;

         case "7":
             if($flag7==0){
                 ?>
           
                 <table  class="table table-sm">
                     <thead class="thead-light">
                     <tr  align="center" class="tablehead">
                  <th colspan="12" ><h3>phd Ongoing</h3><th>
                </tr>
                 <tr>
                 <th>Research Scholor</th>
                 <th>Subject </th>
                 <th>Title of thesis  </th>
                 <th>University</th>
                 <th>Department</th>
                 <th>Country</th>
                 <th>Registration Date</th>
                 </tr>        
                </thead>
             
             <?php
                  $flag7=1;}
             
             ?>     
             
              <tr>
              
               <td><?php echo $row["Research_scholor"]; ?></td>
               <td><?php echo $row["subject"]?></td>
               <td><?php echo $row["thesis_title"];?></td>
               <td><?php echo $row["university"];?></td>
               <td><?php echo $row["department"]?></td>
               <td><?php echo $row["country"];?></td>
               <td><?php echo $row["Yearly"];?></td>
               
             </tr>
             <?php 
             break;


              }
                                        
      }                       
      }
                    


