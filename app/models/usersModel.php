<?php
function allUsers() {
    global $pdo;
    try {
        $query = "SELECT *
                        FROM users";
                            
        $req = $pdo->query($query);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $users = $req->fetchAll();
        $req->closeCursor();
        return $users; 
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function newAutor($autor) {
    global $pdo;
    try {
        $data =[ 
            'autor'=> $autor
        ];
        $query = "INSERT INTO users
                    (user_name)
                    VALUES
                    (:autor)";
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function updateAutor($autor, $id) {
    global $pdo;
    try {
        $data =[ 
            'autor'=> $autor,
            "id"=> $id,
        ];
        //var_dump($data);
        $query = "UPDATE users 
                    SET
                    user_name= :autor
                    WHERE user_ID = :id" ;
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}