<?php
require_once('./db_connect.php');
session_start();
$id = $_POST['id'];
$service_title = $_POST['service_title'];
$service_icon = $_POST['service_icon'];
$service_description = $_POST['service_description'];
$service_status = $_POST['service_status'];

 //service update query with 
 $service_update_query = "UPDATE services SET service_title='$service_title', service_icon='$service_icon', service_status='$service_status', service_description='$service_description' WHERE id ='$id'";
 
 mysqli_query($db_connect, $service_update_query);
 
 header('location:./service_list.php');
?>