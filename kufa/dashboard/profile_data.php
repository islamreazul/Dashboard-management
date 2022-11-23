<?php
require_once('./db_connect.php');
session_start();

$name=$_POST['name'];
$id=$_SESSION['auth_id'];
$number=$_POST['number'];
$Address=$_POST['Address'];

$flag = false;

if (isset($_POST['update'])) {
   
if($name){
   if ($name===ucfirst($name)) {
   
      $remove_name_space = str_replace(" ","",$name);
      if (!ctype_alpha($remove_name_space)){
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
   }if ($_FILES['profile_pic']['name']) {
      $image_name = $_FILES["profile_pic"]["name"];
      $convert_image_name =explode(".",$image_name);
      $image_name_extension = end($convert_image_name);
      $new_image_name = $id.".".$image_name_extension;
      $tem_name = $_FILES["profile_pic"]["tmp_name"];
      $file_path = './upload_image/'.$new_image_name;
      move_uploaded_file($tem_name, $file_path);
      
      $profile_pic_update_query="UPDATE admins SET profile_pic='$new_image_name' WHERE id=$id";
      $profile_pic_update_db = mysqli_query($db_connect,$profile_pic_update_query);
      header('location:./profile.php');
   }else{
       echo'nai';
   }

if (isset($_POST['change_password'])) {
   $old_password=$_POST['old_password'];
   $new_password=$_POST['new_password'];
   $confirm_password=$_POST['confirm_password'];
   if ($old_password) {
     $old_password_check_query="SELECT password FROM admins WHERE id='$id'";
     $old_password_check_query_db=mysqli_query($db_connect,$old_password_check_query);
     $old_password_from_db=mysqli_fetch_assoc($old_password_check_query_db);
     if (sha1($old_password)===$old_password_from_db['password']) {
     
      if ($new_password) {
         if (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $new_password)) {
            if ($old_password===$new_password) {
               $flag=true;
               $_SESSION['new_password_error']='old password new password same';
            }else{
               if ($confirm_password) {
                  if ($new_password===$confirm_password) {
                     $encode_pass= sha1($new_password);
                     $password_update_query="UPDATE admins SET password='$encode_pass' WHERE id='$id'";
                     $password_update_db = mysqli_query($db_connect,$password_update_query);
                     $flag=true;
                     $_SESSION['confirm_password_success']='your password successfully update';

                  }else{
                     $flag=true;
                     $_SESSION['confirm_password_error']='confirm and new password mile nai';
                  }
               }else{
                  $flag=true;
                  $_SESSION['confirm_password_error']='confirm password dao nai';
               }
            } 
         }else{
            $flag=true;
            $_SESSION['new_password_error']='new password strong na';
         }
      
      }else{
         $flag=true;
         $_SESSION['new_password_error']='new password dao nai';
      }
     }else{
      $flag=true;
      $_SESSION['old_password_error']='old password mile nai';
     }

   }else{
      $flag=true;
      $_SESSION['old_password_error']='old password dao nai';
   }
      
   }
    if ($flag) {
       header('location:./profile.php');
    }else{
    $name_update_query="UPDATE admins SET name='$name',phone_number='$number',Address='$Address' WHERE id='$id'";
    $name_update_db = mysqli_query($db_connect,$name_update_query);
    $_SESSION['auth_name']= $name;
    header('location:./profile.php');
}
   
    ?>