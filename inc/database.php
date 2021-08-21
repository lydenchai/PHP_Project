<?php
    // Connect ot database
    function database() {
        return new mysqli('localhost', 'root', '', 'PHP_Project');
    }

    // Create News
    function createNews($value) {
        $title = $value['title'];
        $description = $value['description'];
        $categoryID = $value['categoryID'];
        $img_Name = $_FILES['image']['name'];
        $img_Size = $_FILES['image']['size'];
        $img_Type = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $dir_fold = "../uploadImg/";
        move_uploaded_file($tmp_name, $dir_fold.$img_Name);
        return database()->query("INSERT INTO post (title, description, image, categoryID) VALUES ('$title','$description', '$img_Name','$categoryID')");
    }

    // Create User
    function addUser($value) {
        $username = $value['username'];
        $password = $value['pass'];
        $cf_password = $value['cfpassword'];
        $email = $value['email'];
        $profileName = $_FILES['profile_img']['name'];
        $profileSize = $_FILES['profile_img']['size'];
        $profileType = $_FILES['profile_img']['type'];
        $profile_tmp_name = $_FILES['profile_img']['tmp_name'];
        $pro_dir = "../uploadImg/".$profileName;
        move_uploaded_file($profile_tmp_name, $pro_dir);
        $isValidEmail = true;
        $allUser = selectAllUser();
        foreach($allUser as $user) {
            if($email == $user['email'] or $password != $cf_password) {
                $isValidEmail = false;
            }
        }
        if($isValidEmail) {
            return database()->query("INSERT INTO user (userName, role, email, password, profile) VALUES ('$username', 'Client', '$email', '$password', '$profileName')");
        } else {
            return $isValidEmail;
        }
    }

    // GET ALL USER 
    function selectAllUser() {
        return database()->query("SELECT * FROM user");
    }
    //remove user from list
    function deleteUser($id) {
        return database()->query("DELETE FROM user WHERE userID = $id");
    }
    // Admin Login 
    function login($value){
        $admin = $value['username'];
        $email = $value['email'];
        $password = $value['password'];
        $login = false;
        $getUser = database()->query("SELECT * FROM user");
        foreach ($getUser as $user){
            if ($user["email"] == $email and $user["password"] == $password){
                $login = true;
            }
        } return $login;
    }

    // Search
    function searchPost($title){
        $title = $title['key'];
        return database()->query("SELECT * FROM post INNER JOIN category ON post.categoryID = category.categoryID AND post.title LIKE '%$title%'");
    }

    // Select News
    function selectAllNews() {
        return database()->query("SELECT * FROM post GROUP BY title DESC");
    }

    function selectOneNews($id) {
        return database()->query("SELECT * FROM post WHERE postID =$id");
    }

    function entertainment(){
        return database()->query("SELECT * FROM post WHERE categoryID = '1'");
    }

    function sport(){
        return database()->query("SELECT * FROM post WHERE categoryID = '2'");
    }

    function society(){
        return database()->query("SELECT * FROM post WHERE categoryID = '3'");
    }

    function technology(){
        return database()->query("SELECT * FROM post WHERE categoryID = '4'");
    }

    function deleteNews($id) {
        return database()->query("DELETE FROM post WHERE postID = $id");
    }

    // Update 
    function updateNews($value) {
        $title = $value['title'];
        $id = $value['id'];
        $description = $value['description'];
        return database()->query("UPDATE post SET title = '$title', description = '$description' WHERE postID = $id");        
    }
    
    // Read More 
    function readMore($text, $number){
        return substr($text, 0, $number);
    }

?>