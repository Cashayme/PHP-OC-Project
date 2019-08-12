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

	public function addPost($title, $content, $picture, $description )
	{
		$postManager = new PostManager();
		$content_dir = 'public/media/';
		$tmp_file = $picture;

		if( !is_uploaded_file($tmp_file) )
		{
			exit("Le fichier est introuvable");
		}
		$type_file = $_FILES['picture']['type'];

		if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') && !strstr($type_file, 'png'))
		{
			exit("Le fichier n'est pas une image");
		}

		$name_file = $_FILES['picture']['name'];

		if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
		{
			exit("Impossible de copier le fichier dans $content_dir");
		}

		$dir_file = 'public/media/'.$name_file.'';
		$affectedLines = $postManager->sendPost($title, $content, $dir_file, $description );

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
		$editPost = $postManager->editingPost($id);
		$content_dir = 'public/media/';
		$tmp_file = $picture;
		if ($picture != '') {
			if( !is_uploaded_file($tmp_file) )
			{
				exit("Le fichier est introuvable");
			}
			$type_file = $_FILES['picture']['type'];

			if( !strstr($type_file, 'jpg') && !strstr($type_file, 'jpeg') && !strstr($type_file, 'bmp') && !strstr($type_file, 'gif') && !strstr($type_file, 'png'))
			{
				exit("Le fichier n'est pas une image");
			}

			$name_file = $_FILES['picture']['name'];

			if( !move_uploaded_file($tmp_file, $content_dir . $name_file) )
			{
				exit("Impossible de copier le fichier dans $content_dir");
			}
			$dir_file = 'public/media/'.$name_file.'';
		} else {
			$dir_file = $editPost['picture'];
		}
		
		$affectedLines = $postManager->updateEdit($id, $title, $content, $dir_file, $description );

		if ($affectedLines === false) {
			throw new Exception("l'article n'a pas pu être modifié.");			
		}
		else {
			header('Location: index.php?action=admin');
		}
	}
}


