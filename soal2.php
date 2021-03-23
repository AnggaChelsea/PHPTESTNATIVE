

<?php

if(isset($_POST['submit'])){
  //check email
  if(empty($_POST['email'])){
    echo 'excuse me email required';
  }else{
   $email = $_POST['email'];
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo 'email must be valid ';
   }else{
    echo htmlspecialchars($_POST['email']);
   }
  }

  //check username
  if(empty($_POST['username'])){
    echo 'excuse me Username is require';
  }else{
    $username = $_POST['username'];
    if(!preg_match('/^[a-zA-Z\s]+s/', $username)){
      echo 'username must be letters and space';
    }else{
      echo htmlspecialchars($_POST['username']);
    }
  }

  //check name 
  if(empty($_POST['name'])){
    echo 'excuse me Name is required';
  }else{
    echo htmlspecialchars($_POST['name']);
  }

} //end checking

?>

<form action="" method="POST">
  <input type="text" name="email" value="email">
  <input type="text" name="username" value="username">
  <input type="text" name="name" value="name">
  <input type="submit" value="submit" name="submit">
</form>