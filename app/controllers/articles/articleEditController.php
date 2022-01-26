<?php

include_once("app/models/postsModel.php"); 
    $post = postById($_GET["id"]);
 
    if (!empty($_POST)) {
        $update = updatePost($_POST["title"], $_POST["content"], $_GET["id"]);
        var_dump($update);

        header("Location: index.php?page=article_view&id=".$_GET["id"]);
    }

    
include("app/views/articles/editView.php");