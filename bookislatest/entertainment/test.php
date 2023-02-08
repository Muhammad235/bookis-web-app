
<?php


require "../server/db.php";

$sql = "SELECT created_books.book_name
FROM created_books
JOIN interest_list ON created_books.interest_list_id = interest_list.id
WHERE interest_list.id = 1 ";

$result = mysqli_query($conn, $sql);

if ($result) {
    while ($rows = mysqli_fetch_assoc($result)) {
      
        echo '             
        <div class="books romance">

            <div class="">
              <div class="book-img politics">
                <img src="images/Rectangle 9.png" alt="" class="book" />
              </div>
              <p>'.$rows['book_name'].'</p>
            </div> 

        </div>
        ';

    }
  }


  
  $sql = "SELECT created_books.book_name, created_books.book_author, users.fullname
  FROM created_books
  JOIN users ON created_books.users_id = users.id
  WHERE users.id = 1 ";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    while ($rows = mysqli_fetch_assoc($result)) {
      // $book_name = $rows['book_name'];
      // $book_author = $rows['book_author'];
      echo ' 
          <div>
          <div class="book-img">
            <img src="../book_cover/Rectangle 9.png" alt="" class="book" />
          </div>
          <p>'.$rows['book_name'].'</p>
          </div>     
      
      ';
    }
    }

?>