<?php


require "../server/db.php";
session_start();

// if (isset($_SESSION['userEmail'])) {
//     echo '<p>you are logged in!'.$_SESSION['userEmail'].'</p>';
// }else{
//    header('location: ../signup.php');
// }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/style.css">
    <title>users</title>
</head>
<body>
    <!-- error page -->
    <div class="mobile" id="mobile">
        <div class="content">
            <h1 class="oops">OOPS!</h1>
            <p class="main-eror">You can only view this web app on your mobile device</p>
            <p class="coperation">Thanks for your cooperation</p>
        </div>
    </div>
    <section class="app" id="app" style="background-color: #FFE6C0;">
        <div class="container-view" style="display: flex; flex-direction: column;">
   

            <div class="top-half">
                <div class="save">
                    <img src="images/save.png" alt="" class="save-icon">
                </div>
                <div class="book-cover-section">
                    <img src="../images/coverbook1.png" alt="" class="view-book">
        
                    <h2 class="view-book-title">All my love x</h2>
          
                </div>
            </div>
            <div class="bottom-half">
                <button class="interest-list view-category">Romance</button>
                <div class="about-content">

<?php

        if(isset($_GET['book_id'])){
            $book_id = $_GET['book_id'];

            echo $book_id;
        }

            $sql = "SELECT created_books.id, created_books.book_name, created_books.book_author, created_books.about_book, users.fullname
                FROM created_books
                JOIN users ON created_books.users_id = users.id
                WHERE users.id = '$book_id' ";

                $result = mysqli_query($conn, $sql);

               // echo $book_author;

                // if ($result) {
                // while ($rows = mysqli_fetch_assoc($result)) {

                    // $book_author = $rows['book_author'];
                    // $book_name = $rows['book_name'];
                    // $about_book = $rows['about_book'];

                    echo '                             
                            <div class="img-name">
                            <img src="../images/Ellipse 18.png" alt="">
                            <div class="name-mail">
                                <h2 class="name"></h2> 
                                <p class="publisher-email">adelekeyahaya05@gmail.com</p>
                            </div>
                        </div>
                        <div class="star-rating">
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                            <button><i class="fa-solid fa-star"></i></button>
                        </div>
                        <h2 style="margin-bottom: 10px;">About</h2>
                        <p class="description">

                        </p>
                        <a href="" class="download-btn">Download </a>
                        <a href="" class="read-now">Read Now</a>
                ';
                    
                // }
                // }

?>



                </div>
            </div>
        </div>
  
    </section>
    <script src="js/app.js"></script>
</body>
</html>