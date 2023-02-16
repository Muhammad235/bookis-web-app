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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="../css/style.css">
    <title>users</title>
</head>
<style>
    .img-name{
        display: flex;
        flex-direction: column;
    }

    .pro-pic{
        border-radius: 50%;
        width: 100px;
        height: 100px;
        margin-inline: auto;
    }
</style>
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


<?php

        if(isset($_GET['book_id'])){
            $book_id = $_GET['book_id'];

        //    echo $book_id;

            
        $sql = "SELECT * FROM created_books WHERE id = 1";

        $result = mysqli_query($conn, $sql);

                

               // echo $book_author;

                if ($result) {
                while ($rows = mysqli_fetch_assoc($result)) {


                  
                    $book_author = $rows['book_author'];
                    $book_name = $rows['book_name'];
                    $about_book = $rows['about_book'];

                //     echo ' 


                //     <div class="top-half">
                //     <div class="save">
                //         <img src="images/save.png" alt="" class="save-icon">
                //     </div>
                //     <div class="book-cover-section">
                //         <img src="../images/coverbook1.png" alt="" class="view-book">
            
                //         <h2 class="view-book-title">'.$book_name.'</h2>
              
                //     </div>
                // </div>
                // <div class="bottom-half">
                //     <button class="interest-list view-category">Romance</button>
                //     <div class="about-content">
                    

                //             <div class="img-name">
                //             <img src="../images/Ellipse 18.png" alt="">
                //             <div class="name-mail">
                //                 <h2 class="name">'.$book_author.'</h2> 
                //                 <p class="publisher-email">adelekeyahaya05@gmail.com</p>
                //             </div>
                //         </div>
                //         <div class="star-rating">
                //             <button><i class="fa-solid fa-star"></i></button>
                //             <button><i class="fa-solid fa-star"></i></button>
                //             <button><i class="fa-solid fa-star"></i></button>
                //             <button><i class="fa-solid fa-star"></i></button>
                //             <button><i class="fa-solid fa-star"></i></button>
                //         </div>
                //         <h2 style="margin-bottom: 10px;">About</h2>
                //         <p class="description">'.
                //              $about_book
                //         .'</p>.
                //         <a href="download.php?file=dummy.pdf" class="download-btn">Download </a>
                //         <a href="" class="read-now">Read Now</a>
                // ';
                    
                }
                }

        }


       

?>

 
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
                                <img src="../images/Ellipse 18.png" alt="" class="pro-pic">
                                <div class="name-mail">
                                    <h2 class="name"><?= $book_author ?></h2> 
                                    <!-- <p class="publisher-email"> ade@gmail </p> -->
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
                            <?= $about_book ?>
                        </p>.
                        <a href="download.php?file=dummy.pdf" class="download-btn">Download </a>
                        <a href="aboutbook.php?view=dummy.pdf" class="read-now">Read Now</a>

                </div>
            </div>
        </div>

        <?php

if (isset($_GET['view'])) {
    $book = $_GET['view'];

    
    $file = 'uploaded_books/'.$book;

    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
    readfile($file);
}else{

    // header('location:aboutbook.php');
   // echo 'could not';
}

?>

    <script src="js/app.js"></script>
</body>
</html>