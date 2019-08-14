<?php
require_once("model/Manager.php");

class PostManager extends Manager
{
	public function getPosts()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM billets ORDER BY ID ');

		return $req;
	}

	public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, picture, content FROM billets WHERE id = ?');
        $req->execute(array($postId));
        $post = $req->fetch();

        return $post;
    }

	public function sendPost($title, $content, $picture, $description )
	{
        $db = $this->dbConnect();
        $newpost = $db->prepare('INSERT INTO billets(title, content, picture, description ) VALUES(?, ?, ?, ?)');
        $affectedLines = $newpost->execute(array($title, $content, $picture, $description));

        return $affectedLines;
		
	}

	public function deletePost($id) {
		$db = $this->dbConnect();

		$req = $db->prepare('SELECT * FROM billets WHERE id = ?');
		$req->execute(array($id));
        $infos = $req->fetch();

        unlink($infos['picture']);

		$deletePost = $db->prepare('DELETE FROM billets WHERE id= ?');
		$affectedLines = $deletePost->execute(array($id));

		return $affectedLines;
	}

	public function editingPost($id) {
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT * FROM billets WHERE id = ?');
		$req->execute(array($id));
        $infos = $req->fetch();

        return $infos;
	}

	public function updateEdit($id, $title, $content, $picture, $description ) {
        $db = $this->dbConnect();
        $editPost = $db->prepare('UPDATE billets SET title = ?, content = ?, picture = ?, description = ? WHERE id= ?');
        $affectedLines = $editPost->execute(array($title, $content, $picture, $description, $id));

        return $affectedLines;
		
	}
}