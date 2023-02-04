<?php
    
    $chkemail = $_SESSION['userEmail'];
    $sql = "SELECT `rating` FROM users WHERE `email` = '$chkemail' ";
  
    $result = mysqli_query($conn, $sql);
  
    
    if($result){
  
      while($row = mysqli_fetch_assoc($result)){
         $rating = $row['rating'];
      }
    }
  
 //echo $rating;


    switch ($rating) {
    case 0:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>Not rated yet</p>
        </div>
       <?php
        break;
    case 1:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>1.0</p>
        </div>
       <?php
        break;
    case 2:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>2.0</p>
        </div>
       <?php
        break;
    case 3:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>3.0</p>
        </div>
       <?php
        break;  
    case 4:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>4.0</p>
        </div>
       <?php
        break; 
    case 5:
        ?>  
        <div class="profile-rating"> 
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" />
        <img src="images/Vector (1).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>5.0</p>
        </div>
       <?php
        break;   
        
    default:
        
    }

  
  ?>
  
  