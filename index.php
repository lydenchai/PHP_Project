<?php 
    
    include_once('partial/header.php');
    if (isset($_GET['page'])){
        include_once('partial/navbar.php');
        if ($_GET['page'] == "home"){
            
            include_once('pages/home.php');
        }elseif($_GET['page'] == "entertainment"){
            include_once('pages/entertainment.php');
        }elseif($_GET['page'] == "sport"){
            include_once('pages/sport.php');
        }elseif($_GET['page'] == "society"){
            include_once('pages/society.php');
        }elseif($_GET['page'] == "technology"){
            include_once('pages/technology.php');
        }elseif($_GET['page'] == "user"){
            include_once('pages/users.php');
        }elseif($_GET['page'] == "admin"){
            include_once('process/admin.php');
        }else{
            include_once('pages/404.php');
        }
    }else{
        include_once('process/login.php');
        die();
    }

    include_once('partial/footer.php');
?>