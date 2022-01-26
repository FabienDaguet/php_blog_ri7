<?php

include("config/config.inc.php");
include("config/pdo.inc.php");


$page = isset($_GET['page']) ? $_GET['page'] : 'article_index';

switch($page) {
    case 'article_index' :
        include_once("app/controllers/articles/articleIndexController.php");
        break;
    case 'article_new' :
        include_once("app/controllers/articles/articleNewController.php");
        break;
    case 'article_view' :
        include_once("app/controllers/articles/articleViewController.php");
        break;
    case 'article_edit' :
        include_once("app/controllers/articles/articleEditController.php");
        break;
    case 'article_delete' :
        include_once("app/controllers/articles/articleDeleteController.php");
        break;
    case 'user_new' :
        include_once("app/controllers/users/userNewController.php");
        break;
    case 'category_new' :
        include_once("app/controllers/category/categoryNewController.php");
        break;
}
