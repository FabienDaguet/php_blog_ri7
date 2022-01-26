<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
?>
<div class="title-page">
    <h1 class="title">Articles</h1>
    <div class="index-button-container">
        <div class="add-button-container">
            <a href="index.php?page=article_new" ?><i class="fas fa-plus-circle add-button"></i></a>
            <span>article</span>
        </div>
        <div class="add-button-container">
            <a href="index.php?page=user_new" ?><i class="fas fa-plus-circle add-button"></i></a>
            <span>user</span>
        </div>
        <div class="add-button-container">
            <a href="index.php?page=category_new" ?><i class="fas fa-plus-circle add-button"></i></a>
            <span>catégorie</span>
        </div>    
    </div>
</div>


<?php 
if (is_array($posts) || is_object($posts))
{
foreach ($posts as $post) { ?> 
    <div class="articles">
        <h2 class="article-title"><?= $post["post_title"] ?></h2>
        <div class="article-content"><?= $post["post_content"] ?>...</div>
        <div class="article-footer">
            <div class="article-infos">
                <div class="article-date">Date : <?= $post["post_date"] ?></div>
                <span>-</span>
                <div class="article-auteur">Auteur : <?= $post["user_name"] ?></div>
            </div>
            <div class="article-actions">
                <!-- <button><a href="?action=articleViewController&id=<?= $post["post_ID"] ?>">Voir</a></button> -->
                <button class="edit-button button"><a href="index.php?page=article_view&id=<?= $post["post_ID"] ?>">Voir</a></button>
                <button class="delete-buton button"><a href="index.php?page=article_delete&id=<?= $post["post_ID"] ?>">Supprimer</a></button>
            </div>
        </div>
    </div>
<?php } 
            }?>    
