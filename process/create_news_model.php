<?php
    require_once('../inc/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isCreated = createNews($_POST);
        print_r($_POST);
        if ($isCreated){
            header("Location: http://localhost/PHP_Project/index.php?page=home");
        }
    }
?>