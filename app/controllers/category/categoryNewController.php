<?php

include_once("app/models/catModel.php"); 


    if (!empty($_POST)) {

        $createAutor = newCat($_POST["newCat"]);

        header("Location: index.php?page=article_index");
    } 

include("app/views/category/newView.php");