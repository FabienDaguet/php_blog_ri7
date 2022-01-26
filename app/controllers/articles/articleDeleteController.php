<?php
    var_dump($_GET["id"]);

    if(isset($_GET["id"])){
        
        include_once("app/models/postsModel.php");
        $delete = postDelete($_GET["id"]);
        //var_dump($delete);
    
        header("Location: index.php?page=article_index");
    }
    
   