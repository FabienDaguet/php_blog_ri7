<?php

include_once("app/models/postsModel.php");
include_once("app/models/usersModel.php");
include_once("app/models/catModel.php");

    $post = postById($_GET["id"]);
    $users = allUsers();
    $categories = allCat();

    //var_dump($_POST);
    //var_dump($_GET);
 
    if (!empty($_POST)) {
        $update = updatePost($_POST["title"], $_POST["content"], $_GET["id"], $_POST["autor"], $_POST["category"]);
        var_dump($update);

        header("Location: index.php?page=article_view&id=".$_GET["id"]);
    }

    
include("app/views/articles/editView.php");