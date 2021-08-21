<?php
    require_once ('../inc/database.php');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $isUpdate = updateNews($_POST);
        print_r($_POST);
        if ($isUpdate){
            header("Location: http://localhost/PHP_Project/index.php");
        }
    }
?>