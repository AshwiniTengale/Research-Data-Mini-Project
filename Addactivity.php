<?php

include 'connection.php';
$value=$_POST['type_of_activity'];
session_start();

$_SESSION['value']=$value;

$username=$_SESSION['Username'];


?>
<html>
<head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
<link rel="stylesheet" href="style.css">

 <style>
  
  body{
          
          background-image: url("images/background1.png");
          background-repeat: no-repeat;  
            background-position: center;
            background-size: cover;
            }

   form{
     margin-top: 6em;
     margin-left: 13em;
     margin-right:20em;
     margin-bottom: 10em;
     padding: 30px;
     box-shadow: 10px 10px 8px 10px #888888;
     background-color: white;
   }
   #dropdown{
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    width:100%;
    padding: 8px 12px;
   }

 </style>
  <title>
</title>




</head>
<?php




if($value=='1'||$value=='2')
{
  $a=$value==1?"Title of paper":"Title of Chapter";
  $b=$value==1?"Title of Journal & Publisher":"Title of Book";
  $c=$value==1?"Journal":"Book/Book Chapter";
  ?>

 
    <body>
    <div class="container">
        <form action="addresearchdetails.php" method="post">
          <h2>Add <?php echo $c?> Details</h2>
          
            Authors
            <input type="text" class="form-control" value="<?php echo $username;?>" id="exampleInputName" maxlength="32" name="Authors" 
            title="Must contain only alphabets"  required></label>  
        
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label" > Publication Date</label>
              <input type="date" class="form-control" id="as" name="Yearly" required>
            </div>
            
  <div class="mb-3">
    <label for="chapter" class="form-label" ><?php echo $a?></label>
    <input type="text" class="form-control"  name="Title_name1" required>
    <div class="mb-3">
      <label for="Book" class="form-label"><?php echo $b?></label>
      <input type="text" class="form-control"name="Title_name2"  required>
    </div>
   <label for="volno" class="form-label" > Volume No & Issue No</label>
  <input type="text"  class="form-control" name=" vol_issue_no" >

   <label for="pageno" class="form-label" > Page No</label>
  <input type="text"  class="form-control" name=" page_no" required>
  <label for="pageno" class="form-label" > URL</label>
  <input type="url"  class="form-control" name=" url" required>
  
  <div class="mb-3">
    <label for="in" class="form-label">Scopus Indexed</label>
    <select name="scopus_index" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="yes">Yes</option>
      <option value="No">No</option>
    </select>
    


    <div class="mb-3">
    <label for="in" class="form-label">Web of Science</label>
    <select name="web_of_science" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="yes">Yes</option>
      <option value="No">No</option>
    </select>
    
  

  <label for="issn" class="form-label" > ISSN</label>
  <input type="text"  class="form-control" name=" ISSN" required>
  
  <div class="mb-3">
    <label for="in" class="form-label">Category</label>
    <select name="category" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
      <option value="GEN">General</option>
    </select>

  <div class="mb-3">
    <label for="in" class="form-label">Level</label>
    <select name="level" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="International">International</option>
      <option value="National">National</option>
      
   </select>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
 
    
  </body>
    </html>



   <?php
}

elseif($value=='3')
{?>
   
    <body>
      
    <div class="container">
        <form action="addresearchdetails.php" method="post">
       <h2>Add Phd conference Detailds </h2>
          
            Authors
            <input type="text" class="form-control" value="<?php echo $username;?>" id="exampleInputName" maxlength="32" name="Authors" 
            title="Must contain only alphabets"  required></label>  
        
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label" > Publication Date</label>
              <input type="date" class="form-control" id="as" name="Yearly" required>
            </div>
            
  <div class="mb-3">
    <label for="chapter" class="form-label" >Title of paper</label>
    <input type="text" class="form-control"  name="Title_name1" required>
    <div class="mb-3">
      <label for="Book" class="form-label">Title of Conference</label>
      <input type="text" class="form-control"name="Title_name2"  required>
    </div>
   

  <label for="volno" class="form-label" >Venue</label>
  <input type="text"  class="form-control" name=" conductBy_venue" >


   <label for="pageno" class="form-label" > Page No</label>
  <input type="text"  class="form-control" name=" page_no" required>
  <label for="pageno" class="form-label" > URL</label>
  <input type="url"  class="form-control" name=" url" required>
  
  <div class="mb-3">
    <label for="in" class="form-label">Scopus Indexed</label>
    <select name="scopus_index" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="yes">Yes</option>
      <option value="No">No</option>
    </select>
    


    <div class="mb-3">
    <label for="in" class="form-label">Web of Science</label>
    <select name="web_of_science" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="yes">Yes</option>
      <option value="No">No</option>
    </select>
    
  

  <label for="issn" class="form-label" > ISSN</label>
  <input type="text"  class="form-control" name=" ISSN" required>
  
  <div class="mb-3">
    <label for="in" class="form-label">Category</label>
    <select name="category" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="SC">SC</option>
      <option value="ST">ST</option>
      <option value="GEN">General</option>
    </select>

  <div class="mb-3">
    <label for="in" class="form-label">Level</label>
    <select name="level" id="dropdown" required>
      <option value="" disabled selected hidden></option>
      <option value="International">International</option>
      <option value="National">National</option>
      
   </select>
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
  
    </html>


   
   <?php
}

elseif($value=='4')
{?>
  
    <body>
    <div class="container">
        <form action="addresearchdetails.php" method="post">
          <h2> Enter Patent Awarded Details</h2>
          
            Faculty Members
            <input type="text" class="form-control" id="exampleInputName" value="<?php echo $username;?>" maxlength="32" name="faculty_member"
            title="Must contain only alphabets"  required></label>  
        
            <div class="mb-3">
             Title</label>
              <input type="text" class="form-control" id="as" name="title" required>
            </div>
            
  <div class="mb-3">
   Application No</label>
    <input type="text" class="form-control"  name="application_no" required>
    

 Award Date</label>
  <input type="date"  class="form-control" name=" Yearly" >
  Award Reference No
  <input type="text"  class="form-control" name="Award_ref_no" >
  <button type="submit" class="btn btn-primary">Submit</button>
  
  </form>
  
</body>

    </html>


   
   <?php
}
elseif($value=='5'){

?>
<body>
      
      <div class="container">
      <form action="addresearchdetails.php" method="post">
        <h2>Add Patent Applied Details</h2>
        
          Faculty Members
          <input type="text" class="form-control" id="exampleInputName" maxlength="32" value="<?php echo $username;?>" name="faculty_member"
          title="Must contain only alphabets"  required></label>  
      
          <div class="mb-3">
            <label for="exampleInputPassword2" class="form-label" > Title</label>
            <input type="text" class="form-control" id="as" name="title" required>
          </div>
          
Application No 
<input type="text"  class="form-control" name=" application_no" >



Reference No 
<input type="text"  class="form-control" name=" Referance_no" >

 Reference Date
<input type="date"  class="form-control" name=" Yearly" >


<div class="mb-3">
  Status
  <select name="status" id="dropdown" required>
    <option value="" disabled selected hidden></option>
    <option value="Applied">Applied</option>
    <option value="Published">Published</option>
    <option value="Awarded">Awarded</option>
    
 </select>



<button type="submit" class="btn btn-primary">Submit</button>

</form>

</body>
</html>

<?php
}

elseif($value=='6')
{
?>
<body>


        <form action="addresearchdetails.php" method="post">
          <h2>Add Phd Awarded Detailds </h2>
       <p>  Research Scholar <input type="text" class="form-control" value="<?php echo $username;?>" name="Research_scholor" required /></p>
  
  Title of the Thesis <input type="text" class="form-control" name="thesis_title" required /></p>
  <p> 


<p> Guide Name<input type="text" class="form-control" name="guide_name" required ></p>
 <p>Co-Guide Name<input type="text" class="form-control" name="co_guide_name" required ></p>
 
Date of provisional award <input type="date" class="form-control" name= "Yearly" required>

    Research Center <input type="text" class="form-control" name="Research_center" required>
<button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
  
</body>
<?php
}
elseif($value=='7')
{?>
<body>
  

<form action="addresearchdetails.php" method="post">
          <h2>Add Phd On Going Details </h2>
       <p>  Research Scholor <input type="text" class="form-control" value="<?php echo $username;?>" name="Research_scholor" required /></p>
  <p>  Subject <input type="text" class="form-control" name="subject" required /></p>
  Title of the Thesis <input type="text" class="form-control" name="thesis_title" required /></p>
  <p> 


 University<input type="text" class="form-control" name="university" required >
 <p>Department<input type="text" class="form-control" name="department" required ></p>
 Country <input type="text" class="form-control" name="country" required>

Registration Date<input type="date" class="form-control" name="Yearly" required>          
  
  <button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
</body>
<?php
}?>