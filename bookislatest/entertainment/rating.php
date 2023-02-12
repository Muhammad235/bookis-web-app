<!-- <?php
    
    $chkemail = $_SESSION['userEmail'];
    $sql = "SELECT `rating` FROM users WHERE `email` = '$chkemail' ";
  
    $result = mysqli_query($conn, $sql);
  
    
    if($result){
  
      while($row = mysqli_fetch_assoc($result)){
         $rating = $row['rating'];
      }
    }
  
 echo $rating;


    switch ($rating) {
    case 0:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>Not rated yet</p>
        </div>
       <?php
        break;
    case 1:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>1.0</p>
        </div>
       <?php
        break;
    case 2:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>2.0</p>
        </div>
       <?php
        break;
    case 3:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>3.0</p>
        </div>
       <?php
        break;  
    case 4:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (2).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>4.0</p>
        </div>
       <?php
        break; 
    case 5:
        ?>  
        <div class="star-rating"> 
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" />
        <img src="../images/Vector (1).svg" alt="" class="rating" /> 
        </div>
        <div>
        <p>5.0</p>
        </div>
       <?php
        break;   
        
    default:
        
    }

  
  ?>
  



   <div class="star-rating">
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
    </div>


   

        <div class="top-half">
                    <div class="save">
                        <img src="images/save.png" alt="" class="save-icon">
                    </div>
                    <div class="book-cover-section">
                        <img src="../images/coverbook1.png" alt="" class="view-book">
            
                        <h2 class="view-book-title"><?= $book_name?></h2>
              
                    </div>
                </div>
                <div class="bottom-half">
                    <button class="interest-list view-category">Romance</button>
                    <div class="about-content">
                    

                            <div class="img-name">
                            <img src="../images/Ellipse 18.png" alt="">
                            <div class="name-mail">
                                <h2 class="name"><? $book_author?></h2> 
                                <p class="publisher-email"> ade@gmail </p>
                            </div>
                        </div>
                        <?= require 'rating.php' ?>
                        <h2 style="margin-bottom: 10px;">About</h2>
                        <p class="description">
                            <?= $about_book ?>
                        </p>.
                        <a href="download.php?file=dummy.pdf" class="download-btn">Download </a>
                        <a href="" class="read-now">Read Now</a>
                

   -->