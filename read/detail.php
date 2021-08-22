<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read More</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <style>
        body{
            background: #e3e1e1;
        }
    </style>    
</head>
<body>
    <div >
        <div class="d-flex p-2" style="margin-top: 3%;margin-left:8%;">
            <a href="http://localhost/PHP_Project/index.php?page=home" class="btn btn-danger"><i class="fa fa-arrow-circle-left" style="font-size:20px">Back</i></a>
        </div>
        <div class="card" style="margin:15px; width: 83.5%; margin-left: 8.5%; border: 1px solid #8adecd; ">
            <?php
                include_once('../inc/database.php');
                $id = $_GET['id'];
                $newsData = selectOneNews($id);
                foreach( $newsData as $data):
            ?>
            <div class="card-body">
                <div class="d-flex">
                    <div class="card-image mr-3"  style="width: 450px; height: auto; box-sizing: border-box;">
                        <img class="img-fluid" style="width: 100%; height: 300px;"src="../uploadImg/<?= $data['image']?>" alt="">
                    </div>
                    <div class="info" style="height:auto; width: 100%; box-sizing: border-box;">
                        <h2><?= $data['title']?></h2>
                        <strong><?= $data['date']?></strong> 
                        <p style="box-sizing: content-box;"> <?= $data['description']?></p>
                    </div>
                </div>   
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
