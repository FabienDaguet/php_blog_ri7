<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="articleView">
    <h2 class="article-title"><?= $post["post_title"] ?></h2>
    <div class="article-content"><?= $post["post_content"] ?></div>
    <div class="articleView-footer">
        <div class="articleView-infos">
            <div class="article-date">Date : <?= $post["post_date"] ?> - </div>
            <div class="article-auteur">Auteur : <?= $post["user_name"] ?></div>
        </div>
        <div class="view-actions">
            <div class="article-back">
                <button class="back-button button"><a href="index.php?page=article_index">Retour</a></button>
            </div>
            <div class="articleView-edit">
                <button class="edit-button button"><a href="index.php?page=article_edit&id=<?= $post["post_ID"] ?>">Modifier</a></button>
                <button class="delete-buton button"><a href="index.php?page=article_delete&id=<?= $post["post_ID"] ?>">Supprimer</a></button>
            </div>
        </div>
    </div>
</div>