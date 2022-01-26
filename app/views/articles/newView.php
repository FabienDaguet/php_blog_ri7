<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="area-layout">
    <div class="form-container">
            <h1>Nouvel Article</h1>
            <form action="index.php?page=article_new" method="post"  class="area-layout">
                <div class="form-content">
                    <label class="label" for="titre">Titre</label>
                    <input class="input" type="text" name="titre" value="" required>
                </div>
                <div class="form-content">
                    <label class="label" for="contenu">Contenu</label>
                    <textarea class="input" name="contenu" cols="30" rows="10" required></textarea>
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
                <div class="form-content">
                    <label class="label" for="newAutor">Nouvel auteur</label>
                    <input class="input" type="text" name="newAutor">
                </div>
                <div class="form-button-container">
                    <button class="back-button button form-button"><a href="index.php?page=article_index">Retour</a></button>
                    <input type="submit" value="Valider" class="button form-button validate-button"> 
                </div>
            </form>
    </div>
</div>