<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="articleView">
    <h2 class="article-title"><?= $post[0]["post_title"] ?></h2>
    <div class="article-content"><?= $post[0]["post_content"] ?></div>
    <div class="articleView-footer">
        <div class="articleView-infos">
            <div class="article-date">Date : <?= $post[0]["post_date"] ?> - </div>
            <div class="article-auteur">Auteur : <?= $post[0]["user_name"] ?></div>
        </div>
        <div class="articleView-actions">
            <div class="article-back">
                <button class="back-button button"><a href="index.php?page=article_index">Retour</a></button>
            </div>
            <div class="articleView-edit">
                <button class="edit-button button"><a href="index.php?page=article_edit&id=<?= $post[0]["post_ID"] ?>">Modifier</a></button>
                <button class="delete-buton button"><a href="index.php?page=article_delete&id=<?= $post[0]["post_ID"] ?>">Supprimer</a></button>
            </div>
        </div>
    </div>
</div>