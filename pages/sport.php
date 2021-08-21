<br>
<div>
    <div class="d-flex" style="align-items: center; margin-left: 8%; ">
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/sport/1.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/sport/2.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
</div>

<div class="card" style="margin:15px; width: 83.5%; margin-left: 8.5%">
    <?php
        include_once('inc/database.php');
        $sport = sport();
        foreach( $sport as $data):
            $description = readMore($data['description'], 20000);
    ?>
    <div class="card-body">
        <div class="d-flex">
            <div class="card-image mr-3"  style="width: 450px; height: auto; box-sizing: border-box;">
                <img class="img-fluid" style="width: 100%; height: 300px;"src="uploadImg/<?= $data['image']?>" alt="">
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