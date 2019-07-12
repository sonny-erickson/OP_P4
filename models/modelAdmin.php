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
