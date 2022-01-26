<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="area-layout">
    <div class="form-container">
        <div class="form-container-box">
            <div class="form-container-article">
            <h2>Nouvel auteur</h2>
                <form action="index.php?page=user_new" method="post"  class="area-layout">
                    <div class="area-add">
                        <div class="form-content form-content-add">
                            <label class="label" for="newAutor">Nom</label>
                            <input type="text" name="newAutor">
                        </div>
                    </div>
                    <div class="form-button-container">
                        <button class="back-button button form-button"><a href="index.php?page=article_index">Retour</a></button>
                        <input type="submit" value="Valider" class="button form-button validate-button send-button"> 
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>