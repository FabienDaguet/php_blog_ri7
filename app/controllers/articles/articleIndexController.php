<?php

include_once("app/models/postsModel.php"); 
    $posts = allPosts();

  /*   postDelete($_GET["id"]) {
        header("Location:" . $_SERVER["HTTP_REFERER"])
    }; */

include("app/views/articles/indexView.php");