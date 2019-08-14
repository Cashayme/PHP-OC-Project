<?php

require_once('model/CommentManager.php');

class CommentController
{
	public function addComment($postId, $author, $comment)
	{
		$commentManager = new CommentManager();

		$affectedLines = $commentManager->postComment($postId, $author, $comment);
		
		if ($affectedLines === false) {
			throw new Exception('Impossible d\'ajouter le commentaire !');
		}
		else {
			header('Location: index.php?action=post&id=' . $postId);
		}
	}

	public function reportComment($id, $postId)
	{
		$commentManager = new CommentManager();

		$affectedLines = $commentManager->preventComment($id);

		if ($affectedLines === false) {
			throw new Exception('Impossible de signaler le commentaire !');
		}
		else {
			header('Location: index.php?action=post&id='. $postId .'#title-comments');
		}
	}
}