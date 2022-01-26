<?php

include_once("app/models/postsModel.php"); 
include_once("app/models/usersModel.php"); 
include_once("app/models/catModel.php"); 

    $users= allUsers();

    //var_dump($_POST);

    if (!empty($_POST)) {

        $create = newPost($_POST["title"], $_POST["content"], $_POST["autor"]);
        //var_dump($createAutor);
        header("Location: index.php?page=article_index");
    } 

include("app/views/articles/newView.php");

