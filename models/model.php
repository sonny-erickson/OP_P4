 <?php 
function getPosts()
{
    $db = dbConnect();
    $req = $db->query('SELECT * FROM billets ORDER BY date_created');
    $result = $req -> fetchAll();
    return $result;
}
function getPost($postId)
{
	$db = dbConnect();
	$req = $db-> prepare('SELECT * FROM billets WHERE id = ?');
	$req -> execute(array($postId));
	$result = $req -> fetch();
    return $result;
}
function getComments($postId)
{
	$db = dbConnect();
	$req = $db -> prepare('SELECT * FROM comments WHERE post_id = ? ORDER BY date_comment');
	$req -> execute(array($postId));
	$result = $req -> fetchAll();
	return $result;
}
function postComment($postId, $author, $comment)
{
	$db = dbconnect();
	$req = $db -> prepare('INSERT INTO comments(post_id, author, comment, date_comment) VALUES (?, ?, ?, NOW())');
	$result = $req -> execute(array($postId, $author, $comment));
	return $result;
}
function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=projetphp;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
function signaléComm($id)
{
    $db = dbconnect();
    $req = $db-> prepare('UPDATE comments SET signalement = signalement + 1 WHERE id = :id');
    $req->execute(array('id' => $id));
}

