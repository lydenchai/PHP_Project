<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style>
        body{
            background-size: cover;
            background-position: center;
            background-image: url(assets/images/background_form.jpg);
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <div  style="width: 100%; height: 100vh; ">
        <div class="p-4 ">
            <?php 
                require_once("inc/database.php");
                $message = "";
                if ($_SERVER["REQUEST_METHOD"]=="POST"){
                    session_start();
                    $_SESSION['name'] = $_POST['username'];
                    $isLogin = login($_POST);
                    if($isLogin){
                        header("Location: http://localhost/PHP_Project/index.php?page=home");
                    }else{
                        $message = "Email or Password not match";
                    }
                }
            ?>
            <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto p-3 bg-none  border border-dark" >
                <div class="text-center">
                    <h3>Admin Login</h3>
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username">
                </div>
                <div class="form-group">
                    <label for="pass">Password</label>
                    <input type="password" name="password" required class="form-control" id="password" placeholder="Password" length="8">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-row">
                    <div class="col-5">
                        <a href="http://localhost/PHP_Project/index.php?page=home"><button type="submit" class="btn btn-success w-100">Login</button></a>
                    </div>
                    <div class="col-2 text-center">
                        <p>OR</p>
                    </div>
                    <div class="col-5">
                        <a href="http://localhost/PHP_Project/process/register.php"><button type="button" class="btn btn-warning w-100"><i class="fa fa-user" aria-hidden="true"></i> Register </button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>