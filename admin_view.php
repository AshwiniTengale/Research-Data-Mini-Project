
<html>  <br>
<html>


<?php include 'connection.php' ;


?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Dashboard</title>
<style>
    body{
          
	background-image: url("images/background1.png");
	background-repeat: no-repeat;  
    background-position: center;
    background-size: cover;
    }
  #submit{
    padding-left: 0%;
	background-color: #83acf1;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}
.img{
  float:left
}

.topnav{
  background-color: #4CAF50;
	border:none;
	color:white;
	text-align: center;
	display: inline-block;
	font-size: 16px;
	margin:4px 2px;
	cursor: pointer;
  }
  p.one{
    text-align:center;
    font-size:200%;
    font-weight:bold;
  }
  p.two{
    text-align:center;
    font-size:180%;
    
  }
  p.three{
    text-align:center;
    font-size:150%;
    
  }
  
  
</style>
<link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	
</head>
	<body>
  <div class="img">
			<img src="images/logo.png" width="80px" height="80px"></div>
            </div>
				

          <p class="one"> B.V.V SANGHA'S BASAVESHWAR  ENGINEERING COLLEGE (AUTONOMOUS) BAGALKOT</p>
                          <p class="two">DEPARTMENT OF INFORMATION SCIENCE AND ENGINEERING</p>
                          <p class="three"><span style='color:red'>FACULTY RESEARCH DETAILS </span></h3></p>
         


 <div class="topnav">
      
      
      <a href="View.php" class="top" style="margin-right:920px">DISPLAY RESEARCH DETAILS</a>  
       
       
	 
      <a  href="logout.php" class="top">LOGOUT</a><br/><br/>
  </div>
</html>





  

      <form action="" method="post">
    <br>
   
    
    <div  class="selectrole">
    <input type="text" name="userId" placeholder="UserId" />
                    <select name="type_of_activity" id="dropdown" required>
                        <option value="" disabled selected hidden>Select Activity</option>
                        <option value="1">Journal paper</option>
                        <option value="2">Book/Book Chapter</option>
                        <option value="3">Conference publications</option>
                        <option value="4">Patents Awarded</option>
                        <option value="5">Patents Applied</option>
                        <option value="6">phd Awarded </option>
                        <option value="7">phd ongoing</option>
                        
                     
                     </select>
                        
                        <input type="text" id="txtOther"  placeholder="ALL" default="all" name="year" />
                       
                   

               <input type="submit" value="Display" id="submit">
  <br>
  <br>


  <br>
                        
                        </div>
              
                    </form> 
    
   
  </body>

  </html>



     

     