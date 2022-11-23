<?php
session_start();
if(isset($_POST['submit'])){
   
// Assing Variable
$email= $_POST['email'];
$password= $_POST['password'];

//Validation Rulse
$errors = [];
if(empty($email)){
    $errors['$email']= 'Plase Enter a Email Adress';
}
if(empty($password)){
    $errors['$password']= 'Plase Enter a password';
}

//Rediaction
if(count($errors) > 0){
    $_SESSION['errors']= $errors;
    header("location: ../backend/login.php");
}




}