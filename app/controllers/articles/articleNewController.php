<?php

include_once("app/models/postsModel.php"); 
include_once("app/models/usersModel.php"); 

    $users= allUsers();

    if (!empty($_POST)) {

        var_dump($_POST);
        if (empty($_POST["newAutor"])) {

            $create = newPost($_POST["titre"], $_POST["contenu"], $_POST["autor"]);

        } else {

            $createAutor = newAutor($_POST["autor"]);
            $create = newPost($_POST["titre"], $_POST["contenu"], $_POST["autor"]);

        }
        
        
        //var_dump($create);

        //header("Location: index.php?page=article_index");
    }

include("app/views/articles/newView.php");

