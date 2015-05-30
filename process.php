<?php
  session_start();
  require("new-connection.php");
  $errors = array();
  $errors2 = array();
  $errors3 = array();


if($_POST['action'] == 'register') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors[] = "Email should not be empty<br>";
  }



  if(isset($_POST['name']) && $_POST['name'] == null) {
    $errors[] = "Name should not be empty <br>";
  }

  if(isset($_POST['comment']) && $_POST['comment'] == null) {
    $errors[] = "Comments should not be empty <br>";
  }

  if(isset($_POST['schoolname']) && $_POST['schoolname'] == null) {
    $errors[] = "Schoolname should not be empty <br>";
  }



  if(isset($_POST['password']) && $_POST['password'] == null) {
    $errors[] = "Password should not be empty<br>";
  }else if(strlen($_POST['password']) < 6) {
    $errors[] = "Password must be larger than 6 characters<br>";
  }

  if(isset($_POST['confirmpassword']) && $_POST['confirmpassword'] == null) {
    $errors[] = "Confirm Password should not be empty<br>";
  }

  if($_POST['password'] != $_POST['confirmpassword']) {
    $errors[] = "Passwords do not match<br>";
  }


  if(! empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.html.php');
  }



} else if ($_POST['action'] == 'login') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors2[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors2[] = "Email should not be empty<br>";
  }


  if(isset($_POST['password']) && $_POST['password'] == null) {
    $errors2[] = "Password should not be empty<br>";
  }


     if(! empty($errors2)) {
       $_SESSION['errors2'] = $errors2;
       header('Location: index.html.php');
     }else {
       header('Location: index.html.php');

    }

}  else if ($_POST['action'] == 'contact') {

  if(isset($_POST['email']) && $_POST['email'] != null) {
    if(! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors3[] = "This email is not valid  <br>";
    }
  }else if ($_POST['email'] == null){
    $errors3[] = "Email should not be empty<br>";
  }


  if(isset($_POST['subject']) && $_POST['subject'] == null) {
    $errors3[] = "Subject should not be empty<br>";
  }

  if(isset($_POST['comment']) && $_POST['comment'] == null) {
    $errors3[] = "Comment should not be empty<br>";
  }

  if(isset($_POST['name']) && $_POST['name'] == null) {
    $errors3[] = "Name should not be empty <br>";
  }





     if(! empty($errors3)) {
       $_SESSION['errors3'] = $errors3;
       header('Location: contact_us.html.php');
     }else {
       header('Location: contact_us.html.php');
     }


}












?>
