<?php

include_once("app/models/postsModel.php"); 
include_once("app/models/usersModel.php"); 

    $users= allUsers();

    //var_dump($_POST);

    if (!empty($_POST) && empty($_POST["newAutor"])) {

        $create = newPost($_POST["title"], $_POST["content"], $_POST["autor"]);

        //var_dump($createAutor);
        header("Location: index.php?page=article_index");
    } elseif (!empty($_POST["newAutor"])) {

        $createAutor = newAutor($_POST["newAutor"]);
        //var_dump($createAutor);
        header("Location: index.php?page=article_new");
        
    }

include("app/views/articles/newView.php");

