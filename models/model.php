 <?php 

    class Model extends Manager
    {
        public function getPosts()
        {
            $db = $this -> dbConnect();
            $req = $db->query('SELECT * FROM billets ORDER BY date_created');
            $result = $req -> fetchAll();
            return $result;
        }
        public function getPost($postId)
        {
            $db = $this -> dbConnect();
            $req = $db-> prepare('SELECT * FROM billets WHERE id = ?');
            $req -> execute(array($postId));
            $result = $req -> fetch();
            return $result;
        }
        public function getComments($postId)
        {
            $db = $this -> dbConnect();
            $req = $db -> prepare('SELECT comments.*, member.pseudo FROM comments INNER JOIN member ON member.id_member = comments.member_id WHERE post_id = ? ORDER BY date_comment, id');
            $req -> execute(array($postId));
            $result = $req -> fetchAll();
            return $result;
        }
        public function postComment($postId, $comment, $id_member)
        {
            $db = $this -> dbConnect();
            $req = $db -> prepare('INSERT INTO comments(post_id, comment, date_comment, member_id) VALUES (?, ?, NOW(), ?)');
            $result = $req -> execute(array($postId, $comment, $id_member));
            return $result;
        }
        public function signaleComm($id)
        {
            $db = $this -> dbConnect();
            $req = $db-> prepare('UPDATE comments SET signalement = signalement + 1 WHERE id = :id');
            $req->execute(array('id' => $id));
        }


    }
