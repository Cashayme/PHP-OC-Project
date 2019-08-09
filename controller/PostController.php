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

		public function listPostsAdmin()
	{
		$postManager = new PostManager();
		$posts = $postManager->getPosts();

		require('view/indexViewAdmin.php');
	}

	public function post()
	{
		$postManager = new PostManager();
		$commentManager = new CommentManager();

		$post = $postManager->getPost($_GET['id']);
		$comments = $commentManager->getComments($_GET['id']);

		require('view/postView.php');
	}

	public function newPost() 
	{
		require('view/addPostView.php');
	}

	public function addPost($title, $content, $description, $picture)
	{
		$postManager = new PostManager();

		$affectedLines = $postManager->sendPost($title, $content, $description, $picture);

		if ($affectedLines === false) {
			throw new Exception('Impossible d\'ajouter l\'article !');
		}
		else {
			header('Location: index.php?action=admin');
		}
	}

	public function delPost($id) {
		$postManager = new PostManager();

		$delPost = $postManager->deletePost($id);

		if ($affectedLines === false) {
			throw new Exception('Cet article n\'existe pas.');
		}
		else {
			header('Location: index.php?action=admin');
		}
	}

	public function editPost($id) {
		$postManager = new PostManager();
		$editPost = $postManager->editingPost($id);
		require('view/editPostView.php');
	}

	public function updatePost($id, $title, $content, $picture, $description) {
		$postManager = new PostManager();

		$affectedLines = $postManager->updateEdit($id, $title, $content, $picture, $description );

		if ($affectedLines === false) {
			var_dump($id, $title, $content, $picture, $description);
		}
		else {
			header('Location: index.php?action=admin');
		}
	}
}


