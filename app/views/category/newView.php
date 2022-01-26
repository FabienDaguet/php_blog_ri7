<?php
 include(dirname( __FILE__ ).'/../layout/header.inc.php') ;
 ?>

<div class="area-layout">
    <div class="form-container">
        <div class="form-container-box">
            <div class="form-container-article">
            <h2>Nouvelle catégorie</h2>
                <form action="index.php?page=category_new" method="post"  class="area-layout">
                    <div class="area-add">
                        <div class="form-content form-content-add">
                            <label class="label" for="newCat">Nom</label>
                            <input type="text" name="newCat">
                        </div>
                        <div class="form-button-container">
                            <input type="submit" value="Valider" class="button form-button validate-button send-button"> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>