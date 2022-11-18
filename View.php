<?php include 'header.php' ;?>
  <br>
  

      <form action="displayDetails.php" method="post">
    <br>
    
    <div  class="selectrole">
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



     

     