<?php

class ModelAdmin extends Manager
{
	// Le bouton nouvel article pour inserer dans la bdd le nouvel article
	public function createPost($id, $title, $content,$date_created)
	{
		$db = $this -> dbConnect();
		$req = $db -> prepare('INSERT INTO billets (id, title, content, date_created) VALUES (?, ?, ?, NOW())');
		$result = $req -> execute(array($id, $title, $content));
		return $result;
	}
	// Le bouton édition de l'article
	public function editPost($id, $nvtitre, $nvcontent)
	{
		$db = $this -> dbConnect();
		$req = $db-> prepare('UPDATE billets SET title = :nvtitre, content = :nvcontent WHERE id = :id');
		$req->execute(array(
			'nvtitre' => $nvtitre,
			'nvcontent' => $nvcontent,
			'id' => $id
			));
	}
	// Le bouton suppression de l'article
	public function deletePost($id)
	{
		$db = $this -> dbConnect();
		$req = $db-> prepare('DELETE FROM billets WHERE id = ?');
		$req -> execute(array($id));
		return $result;
	}

	// Affichage des commentaires signalés dans la page admin
	public function signaleComments()
	{	
		$db = $this -> dbConnect();
		$req = $db-> query('SELECT comments.*, member.pseudo FROM comments INNER JOIN member ON member.id_member = comments.member_id  WHERE signalement != 0 ORDER BY post_id');
		$result = $req -> fetchAll();
		return $result;
	}
	// Le bouton approuver pour remettre les commentaires signalés à 0
	public function approuverComment($id)
	{
		$db = $this -> dbConnect();
		$req = $db-> prepare('UPDATE comments SET signalement = 0 WHERE id = :id');
		$req->execute(array(
			'id' => $id
			));
	}
	// Le bouton pour supprimer le commentaire signalé
	public function deleteComment($id)
	{
		$db = $this -> dbConnect();
		$req = $db-> prepare('DELETE FROM comments WHERE id = ?');
		$req -> execute(array($id));
		return $result;
	}
}


