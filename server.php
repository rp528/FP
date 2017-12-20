<?php
session_start();
$email     = "";
$fname     = "";
$lname     = "";
$phone     = "";
$birthday  = "";
$gender    = "";
$password  = "";
$errors = array(); 
$_SESSION['success'] = "";

$db = mysqli_connect('sql2.njit.edu', 'rp528', 'alumna66', 'rp528');

if (isset($_POST['reg_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $fname = mysqli_real_escape_string($db, $_POST['fname']);
  $lname = mysqli_real_escape_string($db, $_POST['lname']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $birthday = mysqli_real_escape_string($db, $_POST['birthday']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);  
  $password = mysqli_real_escape_string($db, $_POST['password']);
     
  $sql = "INSERT INTO accounts (email, fname, lname, phone, birthday, gender, password)
  			  VALUES($email, $fname, $lname, $phone, $birthday, $gender, $password')";
    
    mysqli_query($db, $sql);
  
  	$_SESSION['email'] = $fname;
  	$_SESSION['success'] = "Welcome Abroad";
      	
    header('location: index.php');
}
