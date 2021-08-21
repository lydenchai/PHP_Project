<?php require_once('../partial/header.php');?>
<div style="width: 100%; height: 90vh; margin-top: 3%;">
    <div class="d-flex p-2" style="margin-left:19.5%">
        <a href="http://localhost/PHP_Project/index.php" class="btn btn-danger"><i class="fa fa-arrow-circle-left" style="font-size:20px">Back</i></a>
    </div>
    <div class="container p-4" style="width: 60%; height:70vh; border: 1px solid cygen;background: #daede2">
        <?php
            require_once('../inc/database.php');
            $updateNews = selectOneNews($_GET['id']);
            foreach( $updateNews as $data):
        ?>
        <form action="edit_news_model.php" method="post" style="width:70%; margin-top: 5%;margin-left: 15%">
            <input type="hidden"  name="id" value="<?= $data['postID']?>">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Post Title" name="title" value="<?=$data['title']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Caption" name="description" style="box-sizing: border-box; widht: 100%; height: 15vh;" value="<?=$data['description']?>">
            </div>
            <div>
                <label for="up" class="btn " style="background: #40f56b">Add Photo</label>
                <div>
                    <input type="file" name="image" ref="file" id="up" hidden>
                </div>    
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
</div>

