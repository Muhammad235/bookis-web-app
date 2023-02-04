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
      ?> <img src="uploaded_profiles/profile.png" alt="" class="p-image" /><?Php

  }else {
    ?>    <img src="uploaded_profiles/<?= $avatar ?>" alt="uploaded_profiles/<?= $avatar ?>" class="p-image" />   <?php
    
  }

?>
