<?php

require_once('model/PostManager.php');

class PostController
{
	public function listPosts()
	{
		$postManager = new PostManager();
		$posts = $postManager->getPosts();

		require('view/indexView.php');
	}

	public function post()
	{
		$postManager = new PostManager();
		$commentManager = new CommentManager();

		$post = $postManager->getPost($_GET['id']);
		$comments = $commentManager->getComments($_GET['id']);

		require('view/postView.php');
	}
}


