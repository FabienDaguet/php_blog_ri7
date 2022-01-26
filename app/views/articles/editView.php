<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div>
    <div class="form-container">
        <h1>Modifier : Article <?= $post["post_title"] ?></h1>
        <form action="index.php?page=article_edit&id=<?= $post["post_ID"] ?>" method="post"  class="area-layout">
            <div class="form-content">
                <label for="title" class="label">Titre</label>
                <input type="text" name="title" class="input" value="<?= $post["post_title"] ?>" required>
            </div>
            <div class="form-content">
                <label for="content" class="label">Contenu</label>
                <textarea name="content" cols="30" rows="10" wrap class="input" required ><?= $post["post_content"] ?></textarea>
            </div>
            <div class="form-content form-select">
                <div class="select-container">
                    <label for="autor" class="label">Auteur</label>
                    <select class="input" type="text" name="autor" required>
                            <option value="<?= $post["user_ID"] ?>"><?= $post["user_name"] ?></option>
                            <?php foreach ($users as $user) { ?>
                                <option value="<?= $user["user_ID"] ?>"><?= $user["user_name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                <div class="select-container">
                    <label for="catgory" class="label">Categorie</label>
                    <select class="input" type="text" name="category" required>
                        <option value="<?= $post["cat_ID"] ?>"><?= $post["cat_name"] ?></option>
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?= $category["cat_ID"] ?>"><?= $category["cat_name"] ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="form-button-container">
                <button class="back-button button form-button"><a href="index.php?page=article_view&id=<?= $post["post_ID"] ?>">Retour</a></button>
                <input type="submit" value="Enregistrer" class="button form-button validate-button"> 
            </div>
        </form>    
    </div>
</div>
