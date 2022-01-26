<?php
function allPosts() {
        global $pdo;
        try {
            $query = "SELECT post_title, LEFT(post_content, " . 300 . ") AS post_content, post_date, post_autor, post_ID, user_name
                            FROM posts, users
                            WHERE post_autor = users.user_ID
                            ORDER BY post_date DESC";
                                
            $req = $pdo->query($query);
            $req->setFetchMode(PDO::FETCH_ASSOC);
            $posts = $req->fetchAll();
            $req->closeCursor();
            return $posts; 
        } catch (Exception $e) {
            die("Erreur MySQL : " .utf8_encode($e->getMessage()));
            }
    }

function postById($id) {
    global $pdo;
    try {
        $query = "SELECT post_title, post_content, post_date, post_autor, post_ID, user_name
                        FROM posts, users
                        WHERE post_autor = users.user_ID
                        AND post_ID = :id";
        $req = $pdo->prepare($query);
        $req->execute([":id"=> $id]);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetchAll();
        $req->closeCursor();
        return $posts; 
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function newPost($title, $content, $autor) {
    global $pdo;
    try {
        $data =[ 
            'title'=> $title,
            'content'=> $content,
            'autor'=> $autor
        ];
        $query = "INSERT INTO posts
                    (post_title, post_content, post_autor)
                    VALUES
                    (:title, :content, :autor)";
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function updatePost($title, $content, $id) {
    global $pdo;
    try {
        $data =[ 
            'title'=> $title,
            'content'=> $content,
            "id"=> $id,
        ];
        //var_dump($data);
        $query = "UPDATE posts 
                    SET
                    post_title= :title, post_content= :content
                    WHERE post_ID = :id" ;
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function postDelete($id) {
    global $pdo;
    try {
        $query = "DELETE 
                    FROM posts 
                    WHERE post_ID = :id";
        $req = $pdo->prepare($query);
        $req->execute([":id"=> $id]);
        return true;
    } catch (Exception $e) {
        return false;
    } 
}