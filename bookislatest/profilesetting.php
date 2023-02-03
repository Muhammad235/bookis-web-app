<?php

session_start();

require_once 'server/db.php';

if (!$_SESSION['userEmail']) {
  header('location: signup.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <script defer src="./js/profile.js"></script>
    <title>profile setting</title>
  </head>
  <style>
    .upload{
      margin-top: -20px;
    }
  </style>
  <body>
    <div class="condition">
      <h1>Application available on mobile screens only!</h1>
    </div>
    <div class="app">
      <div class="main">
        <div class="modal hide">
          <div>
            <p>Are you sure you want to log out?</p>
            <div>
              <form action="server/logout.php" method="post">
               <button name="logout"><img src="./images/Done.svg" alt="" /></button> 
              </form>

              <img src="./images/Close.svg" alt="" class="close-btn" />
            </div>
          </div>
        </div>
        <nav class="nav-bar">
          <img src="images/Bookis 9.svg" alt="" class="logo" />
        </nav>
        <div class="top">
          <div class="profile-author">

          <!-- require avatar display code to display avatar-->
          <?php  require 'includes/displayavatar.php'; ?>

            <h4> <?= $_SESSION['fullname'];?></h4>

           <p> <?= $_SESSION['userEmail'];?></p>
          
          <!-- require the rating system to display stars-->
           <?php  require 'includes/rating.php' ?>

          </div>
        </div>
        <div class="line"></div>

        <div class="down">
          <div class="book-setting">
            
            <button class="setting-icon">
              <img src="images/Vector (19).svg" alt="" />
            </button>
            <div class="setting-title">
      
                <label>
                  <input type="file" name="file" id="file"  />
                  <h2 class="upload">Upload Image</h2>
                  <span id="uploaded_image"></span>
                </label>
   
            </div>
          </div>
          <div class="book-setting">
            <button class="setting-icon">
              <img src="images/Vector (18).svg" alt="" />
            </button>
            <div class="setting-title">
              <h2><a href="forget-password.php">Change Password</a></h2>
            </div>
          </div>
          <div class="book-setting">
            <button class="setting-icon">
              <img src="images/Vector (16).svg" alt="" />
            </button>
            <div class="setting-title">
              <h2>Save</h2>
            </div>
          </div>
          <div class="book-setting" id="log-out">
            <button class="setting-icon">
              <img src="images/Vector (17).svg" alt="" />
            </button>
            <div class="setting-title">
              <h2>Log out</h2>
            </div>
          </div>
        </div>
        <div class="end-line"></div>
        
      </div>
    </div>

    <script>
      $(document).ready(function(){
      $(document).on('change', '#file', function(){
        var name = document.getElementById("file").files[0].name;
        var form_data = new FormData();
        var ext = name.split('.').pop().toLowerCase();
        if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
        {
        alert("Invalid Image File");
        }
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("file").files[0]);
        var f = document.getElementById("file").files[0];
        var fsize = f.size||f.fileSize;
        if(fsize > 2000000)
        {
        alert("Image File Size is very big");
        }
        else
        {
        form_data.append("file", document.getElementById('file').files[0]);
        $.ajax({
          url:"uploadavatar.php",
          method:"POST",
          data: form_data,
          contentType: false,
          cache: false,
          processData: false,
          beforeSend:function(){
          $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
          },   
          success:function(data)
          {
          $('#uploaded_image').html(data);
          }
        });
        }
      });
      });
  </script>
  </body>
</html>
