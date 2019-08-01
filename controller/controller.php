<?php

require_once('model/PostManager.php');

function listPosts()
{
    $postManager = new PostManager();
    $posts = $postManager->getPosts();

    require('view/indexView.php');
}

function post()
{
    $postManager = new PostManager();

    $post = $postManager->getPost($_GET['id']);

    require('view/postView.php');
}