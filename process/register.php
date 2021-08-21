<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style>
        body{
            background-size: cover;
            background-position: center;
            background-image: url(../assets/images/background_form.jpg);
        }
    </style>
</head>
<body>
    <div  style="width: 100%; height: 100vh;">
    <?php
        include_once('../inc/database.php');
        $message = "";
        if($_SERVER['REQUEST_METHOD'] == "POST") {
            $isCreat = addUser($_POST);
            if($isCreat) {
                header("location: http://localhost/PHP_Project/index.php?page=home");
            } else {
                $message = "This email is already exist or password is not match";
            }
        }
    ?>
        <div class="p-4 ">
            <div class="d-flex p-2" style="margin-top: 3%;margin-left:28.5%">
                <a href="http://localhost/PHP_Project/index.php" class="btn btn-danger"><i class="fa fa-arrow-circle-left" style="font-size:20px">Back</i></a>
            </div>
            <form action="#" method="post" class="rounded-lg col-lg-5 col-md-4 m-auto bg-none border border-dark p-3" enctype="multipart/form-data">
                <div class="text-center">
                    <h3>Register For Login</h3>
                </div>
                <small class="text-danger text-center"><?=$message ?></small>
                <div class="form-group">
                    <label for="username" >Username</label>
                    <input type="text" name="username" required class="form-control" id="username" placeholder="Enter username" >
                </div>
                <div class="form-row">
                    <div class="col form-group">
                        <label for="pass" >Password</label>
                        <input type="password" name="pass" required class="form-control" id="pass" placeholder="Password" length="8">
                    </div>
                    <div class="col form-group">
                        <label for="cfpassword" >Confirm password</label>
                        <input type="password" name="cfpassword" required class="form-control" id="cfpass" placeholder="Password" length="8">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" >Email address</label>
                    <input type="email" name="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div>
                    <label for="up" class="btn bg-none" style="background: #fff">Add Photo</label>
                    <div>
                        <input type="file" name="profile_img" ref="file" id="up" hidden>
                    </div>    
                </div>
                <br>
                <div class="form-row">
                    <div class="col-5">
                        <a href="http://localhost/PHP_Project/index.php?page=home"><button type="submit" class="btn btn-success w-100 fa fa-user"aria-hidden="true">Register</button></a>
                    </div>
                    <div class="col-2 text-center">
                        <p>OR</p>
                    </div>
                    <div class="col-5">
                        <a href="login.php"><button type="button" class="btn btn-warning w-100"> Login </button></a>
                    </div>
                </div>
            </form>
        </div>
    </div> 
</body>
</html>

