<?php

include_once("app/models/usersModel.php"); 


    if (!empty($_POST)) {

        $createAutor = newAutor($_POST["newAutor"]);

        header("Location: index.php?page=article_index");
    } 

include("app/views/users/newView.php");