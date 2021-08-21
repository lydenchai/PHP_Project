
<?php
    include_once('inc/database.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $newsData = searchPost($_POST);
    }else{
        $newsData = selectAllNews();
    }
?>
<div style="background:#cdd4cf">
    <br>
    <div class="container-fluid d-flex " style="width: 100%; justify-content:space-between; ">
        <div style="width:68.5%; height: 73vh;">
            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner" style="width: 100%; height: 100%;">
                    <div class="carousel-item active">
                        <img src="assets/images/sport1.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/society.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/farm2.gif" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/covid_vaccine.jpg" alt="">
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <hr>
        </div>   
        <div style="width:30%; height: auto; margin-top: -10px;">
            <form action="" method="post" class="form-inline my-2 my-lg-0">
                <input name="key" class="form-control bg-dark mr-sm-2 text-white" type="search" placeholder="Search Here..." aria-label="Search" style="width:79.5%; margin: 10px; margin-left: -2px">
                <button class="btn btn-success my-2 my-sm-0 " type="submit">Search</button>
            </form>
            <img src="assets/images/khmer.gif" alt="" style="width: 100%;">
            <br>
            <br>
            <div>
                <h5 style="font-family: 'Roboto Mono', monospace;">Popular Articles</h5>
                <div class="d-flex">
                    <div class="card-image mr-3" style="height: auto; box-sizing: border-box; ">
                        <img class="img-fluid" width="200" src="assets/images/1.jpg" alt="">
                    </div>
                    <div class="info" style="height: auto; box-sizing: border-box;">
                        <p>Three people fall from plane after trying to flee Afghanistan.</p>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <h5 style="font-family: 'Roboto Mono', monospace; ">New Articles</h5>
                <div class="d-flex">
                    <div class="card-image mr-3" style="height: auto; box-sizing: border-box; ">
                        <img class="img-fluid" width="200" src="assets/images/c1_2082743.jpg" alt="">
                    </div>
                    <div class="info" style="height: auto; box-sizing: border-box;">
                        <p>Blackpink member Rose releases first album, Lisa's solo music.  </p>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="card" style="margin:15px; width: 97.5%;">
        <?php
            foreach( $newsData as $data):
                $description = readMore($data['description'], 20000);
        ?>
        <div class="card-body">
            <div class="action d-flex justify-content-end">
                <a href="process/edit_news_html.php?id=<?= $data['postID']?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                <a href="process/delete.php?id=<?= $data['postID']?>" class="btn btn-danger btn-sm mr-2"><i class="fa fa-trash"></i></a>
            </div>
            <div class="d-flex">
                <div class="card-image mr-3"  style="width: 450px; height: auto; box-sizing: border-box;">
                    <img class="img-fluid" style="width: 100%; height: 300px;"src="uploadImg/<?= $data['image']?>" alt="Error Img">
                </div>
                <div class="info" style="height:auto; width: 100%; box-sizing: border-box;">
                    <h3><?= $data['title']?></h3>
                    <strong><?= $data['date']?></strong> 
                    <p style="box-sizing: content-box;"><?=$description?></p>
                    <a href="read/detail.php?id=<?=$data['postID']?>" class="btn btn-primary ">Read More</a>
                </div>
            </div>   
        </div>
        <?php endforeach; ?>
    </div>
    <br>
    <section class="mb-4" style="display: flex; text-align: center; align-items: center; justify-content: center;">
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i>1</i>
        </a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i>2</i>
        </a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i>3</i>
        </a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i>4</i>
        </a>
        <a class="btn btn-outline-dark btn-floating m-1" href="#!" role="button">
            <i>5</i>
        </a>
    </section>
    <br>
</div>

