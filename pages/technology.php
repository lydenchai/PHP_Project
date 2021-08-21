<br>
<div>
    <div class="d-flex" style="align-items: center; margin-left: 8%; box-sizing: border-box; ">
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/technology/1.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">The iPhone 13 series is expected to arrive in just over a month's time, and if rumours are true then Apple fans have plenty to look forward to in the next generation of iOS smartphones.</p>
            </div>
        </div>
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/technology/car.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">Hyundai Elantra was named winner of the 2021 North American Car of the Year award today by the North American Car, Utility and Truck of the Year (NACTOY) automotive media jury. </p>
            </div>
        </div>
    </div>
</div>
<div class="card" style="margin:15px; width: 83.5%; margin-left: 8.5%">
    <?php
        include_once('inc/database.php');
        $technology = technology();
        foreach( $technology as $data):
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