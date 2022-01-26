<?php

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