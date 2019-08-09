<?php

session_start();

require('controller/CommentController.php');
require('controller/PostController.php');
require('controller/LoginController.php');

$postController = new PostController();
$commentController = new CommentController();
$loginController = new LoginController();


try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listPosts') {
            $postController->listPosts();
        }
        elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $postController->post();
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $commentController->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }
        elseif ($_GET['action'] == 'admin') {

            if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($loginController->checkLogin($email, $password) == 'Access') {
                    $postController->listPostsAdmin();
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                }
            } 
            elseif (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                    $postController->listPostsAdmin();
                }
            }


        }
        elseif ($_GET['action'] == 'newPost') {
            $postController->newPost();
        }
        elseif ($_GET['action'] == 'addPost') {
            if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {
                $content_dir = 'public/media/';
                $tmp_file = $_FILES['picture']['tmp_name'];
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

                $postController->addPost($_POST['title'], $_POST['content'], $dir_file, $_POST['description']);
            }else{
                    throw new Exception('Tous les champs ne sont pas remplis !');
            }
        }
        elseif ($_GET['action'] == 'delPost') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $postController->delPost($_GET['id']);
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }    
        }
        elseif ($_GET['action'] == 'editPost') {
            $postController->editPost($_GET['id']);
        }
        elseif ($_GET['action'] == 'updatePost') {
            $content_dir = 'public/media/';
            $tmp_file = $_FILES['picture']['tmp_name'];

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

            $postController->updatePost($_GET['id'], $_POST['title'], $_POST['content'], $dir_file, $_POST['description']);
        }
    }
    else {
    	$postController->listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
