<?php
require_once('../db_connect.php');
 session_start();

$email = htmlspecialchars( $_POST['email']);
$password = htmlspecialchars(($_POST['password']));
$password_hashed=sha1($password);
$signin_query = "SELECT COUNT(*) as 'result' FROM admins WHERE email='$email' AND Password='$password_hashed';";
    $signin_query_check = mysqli_query($db_connect, $signin_query);
    $signin_query_result = mysqli_fetch_assoc($signin_query_check);

$flag = false;

if ($email) {
   
}else{
    $flag=true;
    $_SESSION['email_error']='email deo nai';
}

if ($password) {
    if ($signin_query_result['result']==1 ) {
        header('location:../home.php');

        
    }else{
        $flag=true;
        $_SESSION['password_error']='password vul';
    }
   
}else{
    $flag=true;
    $_SESSION['password_error']='password deo nai';
}

if($flag){
    header('location:./signin.php');
}


?>