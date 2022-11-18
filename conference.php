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
        border:solid thin black;
         margin-top: 6em;
         margin-left: 13em;
         margin-right:20em;
         margin-bottom: 10em;
         padding: 30px;
        
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
          <h2>Add Conference Details</h2>
        Name of Conference  <input type="text" class="form-control" name="workshopname" required />
  <p>  From
    <input type="date" class="form-control" id="From" name="From" required>
    
   To
    <input type="date" class="form-control" id="To" name="To" required>
    </p>
    <select name="selectactivity" id="dropdown" required>
                        <option value="" disabled selected hidden>Select Role</option>
                        <option value="Attended">Attended</option>
                        <option value="Presented">Presented</option>
                        <option value="Organised">Organised</option>
                     </select>
                    
            
                     <select name="selectactivity" id="dropdown" required>
                        <option value="" disabled selected hidden>Level</option>
                        <option value="national">National</option>
                        <option value="international">International</option>
                        
                     </select></br>
                     
            
  
    
  
  
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
 
  </form>
  
</body>


    

    </html>