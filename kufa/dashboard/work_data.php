<?php 
require_once('./db_connect.php');
session_start();
$id = $_SESSION['auth_id'];
$work_title = $_POST['work_title'];
$work_heading = $_POST['work_heading'];
$work_descaription = $_POST['work_descaription'];
$work_status = $_POST['work_status'];
$work_image = $_FILES['work_image'];


if ($work_image['name']) {
    $image_name = $work_image['name'];
    $explode_image_name = explode('.',$work_image['name']);
    $extension = end( $explode_image_name);
    if ($extension === 'png' || $extension === 'jpg') {
       $new_image_name =$id."_". time()."." . $extension;
       $tmp_name = $work_image['tmp_name'];
       $filepath="./work image/". $new_image_name;
       move_uploaded_file($tmp_name,$filepath);
      
      
    }
}
$work_query = "INSERT INTO work (`work_title`, `work_heading`, `work_descaription`, `work_status`, `work_image`) VALUES ('$work_title','$work_heading','$work_descaription','$work_status ','$new_image_name')";
mysqli_query($db_connect,$work_query);
$_SESSION['success'] = 'work added';
header('location:./work_add.php')

       


?>