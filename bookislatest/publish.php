<?php

session_start();

require_once 'server/db.php';

if (!$_SESSION['userEmail']) {
  header('location: signup.php');
}

echo $_SESSION['userEmail'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>publish</title>
  </head>
  <body>
    <div class="condition">
      <h1>Application available on mobile screens only!</h1>
    </div>
    <div class="app form">
      <div class="main form">
        <div>
          <form action="" class="publish-form">
            <label for="title">Book Title</label>
            <input type="text" />
            <label for="about-text">About (Max of 100 words)</label>
            <textarea name="" id="about-text" cols="30" rows="10"></textarea>

            <label for="">Book genre</label>
            <select name="book-genre" id="">
              <option value="1">Entertainment</option>
              <option value="2">Education</option>
            </select>
            <label for="category-1"> Category</label>
            <select name="category" id="category-1">
              <option value="1">Romance</option>
              <option value="2">Fantasy</option>
              <option value="3">Mystery</option>
              <option value="4">Thriller</option>
              <option value="5">Sci-fi</option>
              <option value="6">Adventure</option>
            </select>
            <select name="category" id="category-2" class="hide">
              <option value="1">Growth</option>
              <option value="2">Motivation</option>
              <option value="3">History</option>
              <option value="4">Science</option>
              <option value="5">Business</option>
              <option value="6">Health</option>
            </select>
            <label for="">Book Cover</label>
            <div class="background">
              <div>
                <p>Background</p>
                <input type="color" value="#ffcc80" />
              </div>
              <div>
                <p>Image</p>
                <label for="file">
                  <img
                    src="./images/Rectangle 5 (1).svg"
                    alt=""
                    class="img-file"
                  />
                </label>
                <input type="file" name="" id="file" />
              </div>
            </div>
            <div class="book_create">

            <h3>Chapter one</h3>
            <label for="">Title</label>

            <div> <input type="text"></div>
            <br><br>
            <div><label for="">Content</label></div>
            <textarea name="" id="chaper-one" cols="50" rows="20"></textarea>

            <br><br><br>
            
            <h3>Chapter Two</h3>
            <label for="">Title</label>

            <div> <input type="text"></div>
            <br><br>
            <div><label for="">Content</label></div>
            <textarea name="" id="chaper-one" cols="50" rows="20"></textarea>


             
            </div>
            <button type="submit" class="publish-btn">Publish</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
