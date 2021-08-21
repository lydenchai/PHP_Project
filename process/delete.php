<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];
    $isDelete = deleteNews($id);
    if ($isDelete){
        header("Location: http://localhost/PHP_Project/index.php");
    }
?>