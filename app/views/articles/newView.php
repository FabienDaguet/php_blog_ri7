<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="area-layout">
    <div class="form-container">
        <div class="form-container-box">
            <div class="form-container-article">
                <h1>Nouvel Article</h1>
                <form action="index.php?page=article_new" method="post"  class="area-layout">
                    <div class="form-content">
                        <label class="label" for="title">Titre</label>
                        <input class="input" type="text" name="title" value="" required>
                    </div>
                    <div class="form-content">
                        <label class="label" for="content">Contenu</label>
                        <textarea class="input" name="content" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="form-content">
                        <label class="label" for="autor">Auteur</label>
                        <select class="input" type="text" name="autor">
                            <option value="">auteur : </option>
                            <?php foreach ($users as $user) { ?>
                                <option value="<?= $user["user_ID"] ?>"><?= $user["user_name"] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-button-container">
                        <button class="back-button button form-button"><a href="index.php?page=article_index">Retour</a></button>
                        <input type="submit" value="Valider" class="button form-button validate-button"> 
                    </div>
                </form>
            </div>
            <div class="form-container-add">
                <h2>Nouvel auteur</h2>
                <form action="index.php?page=article_new" method="post"  class="area-layout">
                    <div class="area-add">
                        <div class="form-content form-content-add">
                            <label class="label" for="newAutor">Nom</label>
                            <input type="text" name="newAutor">
                        </div>
                        <div class="form-button-container">
                            <input type="submit" value="Valider" class="button form-button validate-button add-button"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>