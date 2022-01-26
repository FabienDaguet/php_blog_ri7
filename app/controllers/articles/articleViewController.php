<?php

include_once("app/models/postsModel.php"); 

    $post = postById($_GET["id"]);

include("app/views/articles/articleView.php");
