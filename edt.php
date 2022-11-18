<?php

include 'connection.php';

session_start();
$username=$_SESSION['Username'];

$uid=$_SESSION['userid'];
$design=$_SESSION['Designation'];
$Joinyear=$_SESSION['JoinYear'];
$emailid=$_SESSION['Emailid'];


?>



<html>
  <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
   
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    -->
     <style>
         body{
          
          background-image: url("images/background1.png");
          background-repeat: no-repeat;  
            background-position: center;
            background-size: cover;
            }
        
        form{
          background-color:transparent;
        }
        body{
          background-color: lavenderblush;
        }

       form{
         margin-top: 6em;
         margin-left: 13em;
         margin-right:20em;
         margin-bottom: 10em;
         padding: 30px;
         box-shadow: 10px 10px 8px 10px #888888;
       }
       #dropdown{
        width:100%;
       }
     </style>
      <title>
</title>


  

    </head>
    <body>
      
        <div class="container">
        <form action="edit_profile.php" method="post">
          <h2>Register Here</h2>
          <div class="mb-3">
            <label for="exampleInputname" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputName" value="<?php echo $username?>" maxlength="32" name="username"
            title="Must contain only alphabets"  required></label>  
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label" > Faculty ID</label>
              <input type="text" class="form-control" id="as" value="<?php echo $uid?>" name="userid" required>
            </div>
            
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email ID</label>
    <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $emailid?>" name="email" required>
    
    
  </div>
  <div class="mb-3">
    <label for="designation" class="form-label">designation</label>
    <select name="selectrole" id="dropdown"  >
      <option value="" disabled selected hidden>Select Role</option>
      <option value="Head of the Department">Head of the Department</option>
      <option value="Assistant Professor">Assistant Professor</option>
      <option value="Associate Professor">Associate Professor</option>
      <option value="Professor">Professor</option>
   </select>
  </div>

  <div class="mb-3">
    <label for="exampleInputyear" class="form-label">Join year</label>
    <input type="date" class="form-control" id="Join_year" value="<?php echo $Joinyear?>" name="join_year" required>
  </div>
  <div class="mb-3">
      <label for="password" class="form-label">Current Password</label>
      <input type="password" class="form-control" id="Current_password" name="Current_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
      title="Must contain atleast one number and one uppercaseand one lowercase letter and 8 characters">
    </div> 
    <div class="mb-3">
      <label for="password" class="form-label">New Password</label>
      <input type="password" class="form-control" id="New_password" name="New_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
      title="Must contain atleast one number and one uppercaseand one lowercase letter and 8 characters">
    </div> 
     <div class="mb-3">
      <label for="password" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" id="Confirm_password" name="Confirm_password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
      title="Must contain atleast one number and one uppercaseand one lowercase letter and 8 characters">
    </div> 
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>

  </form>
  
</body>


    

    </html>