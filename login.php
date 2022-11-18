<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        body{
	background-image: url("images/isedept.jpg");
	background-repeat: no-repeat;  
    background-position: center;
    background-size: cover;
    

}
.submain{
    width: 30%;
	margin:7% auto;
	border-radius: 25px;
	box-shadow: 0 0 17px #333;
	background-color: #f8f9fabd;
    
}
.login{
    padding-left: 0%;
	background-color: #1763e6;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}


h1{
    text-align: center;
	padding-top: 50px;
    color: rgb(6, 6, 6);
	font-size: 200%;
	margin-bottom: 10px;

    
}
    </style>


<?php
session_start();
if($_SESSION['ID'])
{
    $value=$_SESSION['Role'];

if($value=='admin')
{

 header('Location:admin1.php');
 exit();
}
if($value=='Faculty')
{
 
 header('Location:faculty1.php');
 exit();
}
}


?>

    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="Main">

     <div class="submain">
        <h1>LOGIN HERE</h1>
        <div class="container"> 
            <div>         
          <form action="authentication.php" method="post">
                
                <div  class="selectrole">
                    <select name="selectrole" id="dropdown" required>
                        <option value="" disabled selected hidden>Select Role</option>
                        <option value="admin">Admin</option>
                        <option value="Faculty">Faculty</option>
                     </select>
                </div>
                <div class="User_Password">

                    <div id="userid">
                        
                       <label><input type="text" placeholder="Username" maxlength="32" id="user" name="username" 
                        title="Must contain only alphabets"  required></label>
                    </div>
                          <br/>
                    <div id="password"> 
                       <label><input type="password"  placeholder="Password" id="password" name="password" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"
                      title="Must contain atleast one number and one uppercase and one lowercase letter and 8 characters" required></label>
                    </div>
                </div>
                <br/>         
                        <input type="submit" value="Login"class="login">
</div>
                   
          </form>
              
          <div class="F_password_signin">
              <div>
                 <a href="forgotpassword.html">Forgot password?</a>
              </div> 
              <div>
                  <a href="Register.html">Sign Up</a>
              </div>
                </div>
               
         </div>   
    </div>
 </div>
 
</body>
</html>