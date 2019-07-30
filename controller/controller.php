<?php

require('model/model.php');

function listPosts()
{
    $posts = getPosts();

    require('view/indexView.php');
}
