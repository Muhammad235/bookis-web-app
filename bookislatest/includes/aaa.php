from romace 



<?php

$sql = "SELECT created_books.book_name
FROM created_books
JOIN interest_list ON created_books.users_id = interest_list.id
WHERE =interest_list.id = 1";

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



?>



<?php

            $chkemail = $_SESSION['userEmail'];
            $sql = "SELECT `avatar` FROM users WHERE `email` = '$chkemail' ";

            $result = mysqli_query($conn, $sql);
 
            if($result){

              while($row = mysqli_fetch_assoc($result)){
                $avatar = $row['avatar'];
              }
            }

            if ($avatar == 0) {
                ?> <img src="../uploaded_profiles/profile.png" alt="" class="p-image" /><?Php

            }else {
              ?>    <img src="../uploaded_profiles/<?= $avatar ?>" alt="uploaded_profiles/<?= $avatar ?>" class="p-image" />   <?php
              
            }

          ?>





<?php




$sql = "SELECT interest_list.book_title
FROM interest_list
JOIN interest ON interest_list.interest_id = interest.id
WHERE interest.id = 1";

$result = mysqli_query($conn, $sql);

if ($result) {
    while ($rows = mysqli_fetch_assoc($result)) {
       
        echo '             
        <div class="books romance">

            <div class="">
              <div class="book-img politics">
                <img src="images/Rectangle 9.png" alt="" class="book" />
              </div>
              <p>'.$rows['book_title'].'</p>
            </div> 

        </div>
        ';

    }
  }


if (isset($_POST['fantasy'])) {
  $list2 = $_POST['fantasy'];

  echo $list2;

?>

<style>
  .romance{
      display: none;
  }
</style>

<?php


$sql = "SELECT interest_list.book_title
FROM interest_list
JOIN interest ON interest_list.interest_id = interest.id
WHERE interest.id =  $list2";

$result = mysqli_query($conn, $sql);

if ($result) {
while ($rows = mysqli_fetch_assoc($result)) {
  
    echo '             
    <div class="books">

        <div class="">
          <div class="book-img politics">
            <img src="images/Rectangle 9.png" alt="" class="book" />
          </div>
          <p>'.$rows['book_title'].'</p>
        </div> 

    </div>
    ';

}
}elseif(isset($_POST['romance'])){
$list1 = $_POST['romance'];

echo $list1;

?>

<style>
  .fantasy{
      display: none;
  }
</style>

<?php

     
$sql = "SELECT interest_list.book_title
FROM interest_list
JOIN interest ON interest_list.interest_id = interest.id
WHERE interest.id =  $list1";

$result = mysqli_query($conn, $sql);

if ($result) {
while ($rows = mysqli_fetch_assoc($result)) {
  
    echo '             
    <div class="books">

        <div class="">
          <div class="book-img politics">
            <img src="images/Rectangle 9.png" alt="" class="book" />
          </div>
          <p>'.$rows['book_title'].'</p>
        </div> 

    </div>
    ';

}


}


}

}
?> 
