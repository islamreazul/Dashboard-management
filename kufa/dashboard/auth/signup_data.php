<?php
session_start();
require_once('../db_connect.php');
$name =htmlspecialchars($_POST['user_name']);
$email =htmlspecialchars($_POST['user_email']);
$password =htmlspecialchars($_POST['user_Password']);
$user_confirm_password =htmlspecialchars($_POST['user_confirm_Password']);

// email_check_database
$email_check_query = "SELECT COUNT(*) AS 'result' FROM admins WHERE email ='$email'";
$email_check_db = mysqli_query($db_connect,$email_check_query);
$email_check_result =(mysqli_fetch_assoc( $email_check_db));

$flag = false;


if($name){
if ($name===ucfirst($name)) {

   $remove_name_space = str_replace(" ","",$name);
   if (ctype_alpha($remove_name_space)){
      $_SESSION['old_name']= $name;
      
   }else{
      $flag = true;
      $_SESSION['name_error']='name a nmbr diso';
     
   }
}else{
   $flag = true;
  $_SESSION['name_error']='first letter capital dau nai ';
  
}
}else{
   $flag = true;
  $_SESSION['name_error']='name dao nai';
  
}

if($email) {
 if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
   if ($email_check_result['result'] == 1){
      $flag = true;
      $_SESSION['email_error']='email ase';
   }
   $_SESSION['old_email']= $email;
 }

 else{
    $flag = true;
    $_SESSION['email_error']='email not valid';
    
 }
}
else{
   $flag = true;
   $_SESSION['email_error']='email dao nai';
   
}
 if ($password) {
    if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))  {
      
    }else{
      $flag = true;
      $_SESSION['Password_error']='Password strong hoi nai ';
    }
   }else{
    $flag = true;
    $_SESSION['Password_error']='Password dao nai';
    
 }
 if($user_confirm_password){
   if(!($password===$user_confirm_password)){
      $flag = true;
      $_SESSION['user_confirm_password_error']="didn't password match";
   }
   
 }else{
   $flag = true;
    $_SESSION['user_confirm_password_error']='confirm Password dao nai ';
 }

   
if ($flag) {
    header('location:./signup.php');
   
}else{
   $password_encode = sha1($password);
   $myadmin_query = "INSERT INTO admins (name,email,password) VALUES ('$name','$email','$password_encode')";
    mysqli_query($db_connect,$myadmin_query);
    $_SESSION['signin_status'] = "Wellcome : $name";
    header('location:./signin.php');
}


?>