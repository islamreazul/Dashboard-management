

<?php

require_once('./db_connect.php');
session_start();
$id= $_SESSION['auth_id'];
$work_tittle= $_POST['work_title'];
$work_heading= $_POST['work_heading'];
$work_description=$_POST['work_descaription'];
$work_image=$_FILES['work_image'];
$work_status=$_POST['work_status'];
if(isset($_POST['update'])){
    if($work_image['name']){
        $update_id=$_POST['update_id'];
        // old image
        // $old_image_query="SELECT work_image FROM work WHERE id=$update_id ";
        // $old_image_query_db= mysqli_query($db_connect,$old_image_query);
        // $old_image= mysqli_fetch_assoc($old_image_query_db)['work_image'];
        // $tmp_path= "./work image/". $old_image;
        // unlink($tmp_path);
    // update image
        $image_name=$work_image['name'];
        $explode_image_name=explode('.',$work_image['name']);
       $extension= end($explode_image_name);
       if($extension ==='png' || $extension ==='jpg'){
     $new_image_name= $id."_".time().".".$extension;
     $tmp_name=$work_image['tmp_name'];
     $tmp_path= "./work image/". $new_image_name;
      move_uploaded_file( $tmp_name,$tmp_path);

      $update_work_query= "UPDATE work SET work_title= '$work_tittle', work_heading= '$work_heading',work_descaription= '$work_description',work_image= '$new_image_name', work_status= '$work_status'WHERE id= $update_id";
    
    $update_work_query_db= mysqli_query($db_connect,$update_work_query);
    $_SESSION['success']='service added';
    header('location:./work_update.php');
     
       }
       
    }
}


?>