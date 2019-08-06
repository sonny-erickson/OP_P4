<?php
// Le bouton nouvel article pour inserer dans la bdd le nouvel article
function createPost($id, $title, $content,$date_created)
{
	$db = dbconnect();
	$req = $db -> prepare('INSERT INTO billets (id, title, content, date_created) VALUES (?, ?, ?, NOW())');
	$result = $req -> execute(array($id, $title, $content));
	return $result;
}
// Le bouton suppression de l'article
function deletePost($id)
{
	$db = dbconnect();
	$req = $db-> prepare('DELETE FROM billets WHERE id = ? LIMIT 1');
	$req -> execute(array($id));
	return $result;
}
// Le bouton édition de l'article
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
// Affichage des commentaires signalés dans la page admin
function signaleComments()
{	
	$db = dbConnect();
	$req = $db-> query('SELECT * FROM comments WHERE signalement != 0 ORDER BY post_id');
	$result = $req -> fetchAll();
	return $result;
}
// Le bouton approuver pour remettre les commentaires signalés à 0
function approuverComment($id, $signalement)
{
	$db = dbconnect();
	$req = $db-> prepare('UPDATE comments SET signalement = 0 WHERE id = :id');
	$req->execute(array(
		'signalement' => $signalement,
		'id' => $id
		));
}
// Le bouton pour supprimer le commentaire signalé
function deleteComment($id)
{
	$db = dbconnect();
	$req = $db-> prepare('DELETE FROM comments WHERE id = ? LIMIT 1');
	$req -> execute(array($id));
	return $result;
}