<?php

function createPost($id, $title, $content,$date_created)
{
	$db = dbconnect();
	$req = $db -> prepare('INSERT INTO billets (id, title, content, date_created) VALUES (?, ?, ?, NOW())');
	$result = $req -> execute(array($id, $title, $content));
	return $result;
}
function deletePost($id)
{
	$db = dbconnect();
	$req = $db-> prepare('DELETE FROM billets WHERE id = ? LIMIT 1');
	$req -> execute(array($id));
	return $result;
}
function editPost($id, $nvtitre, $nvcontent)
{
	$db = dbconnect();
	$req = $db-> prepare('UPDATE billets SET title = :nvtitre, content = :nvcontent WHERE id = :id');
	$req->execute(array(
		'nvtitre' => $nvtitre,
		'nvcontent' => $nvcontent,
		'id' => $id
		));
}
function signaléComments($postId)
{
	$db = dbConnect();
	$req = $db-> prepare('SELECT * FROM comments WHERE post_id = ?');
	$req -> execute(array($postId));
	$result = $req -> fetch();
	return $result;
}
