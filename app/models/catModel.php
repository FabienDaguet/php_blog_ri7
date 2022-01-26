<?php

function allCat() {
    global $pdo;
    try {
        $query = "SELECT *
                        FROM category";
                            
        $req = $pdo->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $users = $req->fetchAll();
        $req->closeCursor();
        return $users; 
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function newCat($cat) {
    global $pdo;
    try {
        $data =[ 
            'catName'=> $cat
        ];
        $query = "INSERT INTO category
                    (cat_name)
                    VALUES
                    (:catName)";
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}