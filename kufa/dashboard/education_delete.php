<?php
require_once("./db_connect.php");
$id = $_GET["id"];
$education_delete_query = "DELETE FROM `educations` WHERE ID=$id";
mysqli_query($db_connect, $education_delete_query);
header("location:./education_list.php");
?>