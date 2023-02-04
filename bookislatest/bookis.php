<?php

require "server/db.php";
session_start();

if (isset($_SESSION['userEmail'])) {
    echo '<p>you are logged in!'.$_SESSION['userEmail'].'</p>';
}else{
   header('location: signup.php');
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <script defer src="js/script.js"></script>
    <title>users</title>
  </head>
  <body>
    <div class="condition">
      <h1>Application available on mobile screens only!</h1>
    </div>
    <div class="app">
      <nav class="down-nav">
        <button class="control" data-id="library">
          <img src="./images/Vector (11).svg" alt="" />
        </button>
        <button class="control active-btn" data-id="home">
          <img src="./images/Vector (12).svg" alt="" />
        </button>
        <button class="control" data-id="profile">
          <img src="./images/Vector (14).svg" alt="" />
        </button>
      </nav>
      <div class="main hide" id="library">
        <nav class="nav-bar">
          <img src="images/users 9.svg" alt="" class="logo" />
        </nav>
        <div class="topp">
          <input type="text" placeholder="Search" class="search-category" />
        </div>

        <div class="liner"></div>
        <div class="down">
          <h3>Library</h3>
          <div class="book-library">
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <div class="book-author">
              <p class="title">All my love X</p>
              <div class="author">
                <img src="images/Ellipse 18.svg" alt="" class="author-images" />
                <div class="author-name">
                  <h4>Ber Lerrer</h4>
                  <p>berlerrejohnr@gmail.com</p>
                </div>
              </div>
              <div class="author-rating">
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (2).svg" alt="" class="rating" />
              </div>
              <div class="progress">
                <input type="range" value="70" class="thickness-bar" disabled />
                <p>70%</p>
              </div>
            </div>
          </div>
          <div class="book-library">
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <div class="book-author">
              <p class="title">All my love X</p>
              <div class="author">
                <img src="images/Ellipse 18.svg" alt="" class="author-images" />
                <div class="author-name">
                  <h4>Ber Lerrer</h4>
                  <p>berlerrejohnr@gmail.com</p>
                </div>
              </div>
              <div class="author-rating">
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (1).svg" alt="" class="rating" />
                <img src="images/Vector (2).svg" alt="" class="rating" />
              </div>
              <div class="progress">
                <input type="range" value="40" class="thickness-bar" disabled />
                <p>40%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="main hide active-nav" id="home">
        <nav class="nav-bar">
          <img src="images/users 9.svg" alt="" class="logo" />
        </nav>
        <div class="topp">
          <input type="text" placeholder="Search" class="search-category" />

          <div class="categories">
            <button class="category active" data-id="ent">Entertainment</button>
            <button class="category" data-id="educ">Education</button>
          </div>
        </div>
        <div class="liner"></div>

        <h3 style="color: var(--primaryDeep)">Your Interests</h3>
        <div class="interests" id="ent">

        <button value="1" class="interest active" id="all" name="romance">Romance</button> 

        <button value="2" class="interest" id="culture" name="fantasy">Fantasy</button> 

          <button class="interest" id="politics">Mystery</button>
          <button class="interest" id="finance">Thriller</button>
          <button class="interest" id="business">Sci-fi</button>
          <button class="interest">Adventure</button>
        </div>
        <div class="interests" id="educ" style="display: none">
          <button class="interest active">Growth</button>
          <button class="interest">Motivation</button>
          <button class="interest">History</button>
          <button class="interest">Romance</button>
          <button class="interest">Arts</button>
          <button class="interest">Science</button>
        </div>


      
        

        <div class="books">
          
          <div class="">
            <div class="book-img politics">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div> 
          
           <div class="">
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div>

            <div class="">
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div>

           <div class="">
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div>
        </div> 

        

      </div>

      <div class="main hide" id="profile">
        <nav class="nav-bar">
          <img src="images/users 9.svg" alt="" class="logo" />
          <a href="./profilesetting.php">
            <img src="images/Setting.svg" alt="" class="set" />
          </a>
        </nav>
        <div class="top">
          <div class="profile-author">
         
           <?php require_once 'includes/displayavatar.php'; ?>

            <h4><?= $_SESSION['fullname']; ?></h4>
            <p><?= $_SESSION['userEmail']; ?></p>

      
            <!-- require the rating system to display stars-->
            <?php  require 'includes/rating.php' ?>

      
            <div style="display: flex; gap: 10px">
              <button class="create">
                <label for="file">
                  <img src="./images/Vector (15).svg" alt="" />
                  <input type="file" id="file" />
                  <p>Upload</p>
                </label>
              </button>
              <button class="create">
                <a href="./create.html">
                  <label>
                    <img src="./images/Vector (10).svg" alt="" />
                    <p>Create</p>
                  </label>
                </a>
              </button>
            </div>
          </div>
        </div>
        <div class="liner"></div>
    <?php

      $user_book_id = $_SESSION['user_id'];

          $sql = "SELECT created_books.book_name, created_books.book_author, users.fullname
                FROM created_books
                JOIN users ON created_books.user_id = users.id
                WHERE users.id = '$user_book_id' ";

                $result = mysqli_query($conn, $sql);
  
                if ($result) {
                  while ($rows = mysqli_fetch_assoc($result)) {
                    $book_name = $rows['book_name'];
                    $book_author = $rows['book_author'];
                  }
                }

                echo  $book_name,  $book_author;
    ?>

        <h3>Your books</h3>
        <div class="books">
          <div>
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p><?= $book_name ?></p>
          </div>
          <div>
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p><?= $book_name ?></p>
          </div>
          <div>
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div>
          <div>
            <div class="book-img">
              <img src="images/Rectangle 9.png" alt="" class="book" />
            </div>
            <p>Book title</p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
