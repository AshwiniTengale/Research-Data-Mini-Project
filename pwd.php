<html>
  <head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    -->
     <style>
         body{
            background-image:url('images/ISE_DEPT.jpeg');
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
        <form action="" method="post">
          <h2>Add Patent Details</h2>
    Title of Patent  <input type="text" class="form-control" name="PatentName" required />
  <p>  Year
    <input type="date" class="form-control" id="Year" name="Year" required>
    
  Patent Number <input type="text" id="pnum" />
    Funds Genarated<input type="text" id ="funds" />
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
  
</body>


    

    </html>