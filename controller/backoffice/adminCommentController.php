<?php

require_once('model/CommentManager.php');

class AdminCommentController
{
	public function listComment() 
	{
		$commentManager = new CommentManager();
		$comments = $commentManager->adminComments();
		require('view/backoffice/adminCommentView.php');
	}

	public function delComment($id) 
	{
		$commentManager = new CommentManager();
		$affectedLines = $commentManager->deleteComment($id);

		if ($affectedLines === false) {
			throw new Exception('Impossible de supprimer le commentaire !');
		}
		else {
			header('Location: index.php?action=listComment');
		}
	}

		public function revokeComment($id)
	{
		$commentManager = new CommentManager();

		$affectedLines = $commentManager->revComment($id);

		if ($affectedLines === false) {
			throw new Exception('Impossible de révoquer le commentaire !');
		}
		else {
			header('Location: index.php?action=reportedComment');
		}
	}
}
