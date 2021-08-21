<br>
<div>
    <div class="d-flex" style="align-items: center; margin-left: 8%; ">
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/society/1.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">CFA Institute and CFA Societies work together to raise professional standards and serve investment management </p>
            </div>
        </div>
        <div class="card" style="width: 35rem; margin: 5px;">
            <img class="card-img-top" src="assets/images/society/2.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text">MA Culture, Society and Globalisation Study how we're pushing through traditional boundaries in today's world</p>
            </div>
        </div>
    </div>
</div>

<div class="card" style="margin:15px; width: 83.5%; margin-left: 8.5%">
    <?php
        include_once('inc/database.php');
        $society = society();
        foreach( $society as $data):
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