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
        $query = "SELECT post_ID, post_title, post_content, post_date, post_autor, post_cat, user_ID, user_name, cat_ID, cat_name
                        FROM posts, users, category
                        WHERE post_autor = users.user_ID
                        AND post_ID = :id
                        AND post_cat = category.cat_ID";
        $req = $pdo->prepare($query);
        $req->execute([":id"=> $id]);
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $posts = $req->fetch();
        $req->closeCursor();
        return $posts; 
    } catch (Exception $e) {
        die("Erreur MySQL : " .utf8_encode($e->getMessage()));
        }
}

function newPost($title, $content, $autor, $cat) {
    global $pdo;
    try {
        $data =[ 
            'title'=> $title,
            'content'=> $content,
            'autor'=> $autor,
            'cat'=> $cat
        ];
        $query = "INSERT INTO posts
                    (post_title, post_content, post_autor, post_cat)
                    VALUES
                    (:title, :content, :autor, :cat)";
        $req = $pdo->prepare($query);
        $req->execute($data);
        return true;
    } catch (Exception $e) {
        return false;
    }
}

function updatePost($title, $content, $id, $autor, $cat) {
    global $pdo;
    try {
        $data =[ 
            'title'=> $title,
            'content'=> $content,
            'id'=> $id,
            'autor'=> $autor,
            'cat'=> $cat
        ];
        //var_dump($data);
        $query = "UPDATE posts 
                    SET
                    post_title= :title, post_content= :content, post_autor= :autor, post_cat= :cat
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