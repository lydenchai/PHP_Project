<?php
    require_once('../inc/database.php');
    $id = $_GET['id'];
    $isDelete = deleteUser($id);
    if ($isDelete){
        header("Location: http://localhost/PHP_Project/index.php?page=user");
    }
?>