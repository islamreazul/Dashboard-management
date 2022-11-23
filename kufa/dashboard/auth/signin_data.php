<?php
require_once('../db_connect.php');
 session_start();

$email = htmlspecialchars( $_POST['email']);
$password = htmlspecialchars(($_POST['password']));
$password_hashed=sha1($password);
$signin_query = "SELECT COUNT(*) as 'result' FROM admins WHERE email='$email' AND Password='$password_hashed';";
    $signin_query_check = mysqli_query($db_connect, $signin_query);
    $signin_query_result = mysqli_fetch_assoc($signin_query_check);

    // name query dashbord
    $name_query="SELECT id,name FROM admins WHERE email='$email'";
    $name_query_db = mysqli_query($db_connect, $name_query);
    $name_query_result = mysqli_fetch_assoc($name_query_db);
    $name= $name_query_result['name'];
    $id= $name_query_result['id'];
    


$flag = false;

if ($email) {
    $_SESSION['old_email'];
   
}else{
    $flag=true;
    $_SESSION['email_error']='input your email';
} 

if ($password) {
    if ($signin_query_result['result']==1 ) {
        $_SESSION['auth_email']=$email;
        $_SESSION['auth_name']=$name;
        $_SESSION['auth_id']=$id;
        header('location:../home.php');

        
    }else{
        $flag=true;
        $_SESSION['password_error']='password wrong';
    }
   
}else{
    $flag=true;
    $_SESSION['password_error']='input your password ';
}

if($flag){
    header('location:./signin.php');
}


?>