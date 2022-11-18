<?php include 'header.php' ;?>
      <form action="DeleteResearch.php" method="post">
                
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
               </div>
                <div>
                        <input type="submit" value="Submit" id="submit"> <br><br>
                       
               </div>      
                    </form>     
         
   
 

  </html>

     