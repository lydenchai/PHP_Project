<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create News</title>
</head>
<body>
    <div style="width: 100%; height: auto; background: #fff">
        <div class="d-flex p-2" style="margin-left:19.5%">
            <a href="http://localhost/PHP_Project/index.php?page=home" class="btn btn-danger"><i class="fa fa-arrow-circle-left" style="font-size:20px">Back</i></a>
        </div>
        <div class="container p-4" style="width: 60%;margin-left: 20%; height:auto; border: 1px solid cygen;background: #daede2">
            <form action="http://localhost/PHP_Project/process/create_news_model.php" method="post" style="width:90%; margin-left: 6%;" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Post Title" name="title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Caption" name="description" >
                </div>
                <div>
                    <select name="categoryID" class="form-group" style="border: 1px solid #bdeaf2">
                        <option value="1">Entertainment</option>
                        <option value="2">Sport</option>
                        <option value="3">Society</option>
                        <option value="4">Technology</option>
                    </select>
                </div>
                <div>
                    <label for="up" class="btn " style="background: #40f56b">Add Photo</label>
                    <div>
                        <input type="file" name="image" ref="file" id="up" hidden>
                    </div>    
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Create Post</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</body>
</html>