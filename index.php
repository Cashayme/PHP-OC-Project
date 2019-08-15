<?php

session_start();

require('controller/CommentController.php');
require('controller/PostController.php');
require('controller/backoffice/AdminPostController.php');
require('controller/backoffice/AdminCommentController.php');
require('controller/LoginController.php');

$postController = new PostController();
$adminPostController = new AdminPostController();
$commentController = new CommentController();
$adminCommentController = new AdminCommentController();
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

            if (isset($_POST['email']) && isset($_POST['password'])) {
                if ($loginController->checkLogin($_POST['email'], $_POST['password']) == 'Access') {
                    $adminPostController->listPostsAdmin();
                } 
            }
            elseif ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminPostController->listPostsAdmin();
            }
        }
        elseif ($_GET['action'] == 'newPost') {
            $adminPostController->newPost();
        }
        elseif ($_GET['action'] == 'addPost') {
            if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'] && !empty($_FILES['picture']['tmp_name']))) {

                $adminPostController->addPost($_POST['title'], $_POST['content'], $_FILES['picture']['tmp_name'], $_POST['description']);
            }else{
                $_SESSION["notify"] = "incomplete-post";
                header('Location: index.php?action=newPost');
            }
        }
        elseif ($_GET['action'] == 'delPost') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminPostController->delPost($_GET['id']);
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }    
        }
        elseif ($_GET['action'] == 'editPost') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminPostController->editPost($_GET['id']);
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'updatePost') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['content'])) {
                    $adminPostController->updatePost($_GET['id'], $_POST['title'], $_POST['content'], $_FILES['picture']['tmp_name'], $_POST['description']);
                }else{
                    $_SESSION["notify"] = "incomplete-post";
                    header('Location: index.php?action=admin');
                }                
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'listComment') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminCommentController->listComment();
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'reportedComment') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminCommentController->listComment();
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'delComment') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminCommentController->delComment($_GET['id']);
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'revokeComment') {
            if ($loginController->checkLogin($_SESSION['email'], $_SESSION['password']) == 'Access') {
                $adminCommentController->revokeComment($_GET['id']);
            } else {
                echo "Tu n'es pas autorisé à faire ça.";
            }
        }
        elseif ($_GET['action'] == 'reportComment') {
            $commentController->reportComment($_GET['id'], $_GET['p_id']);
        }
    }
    else {
    	$postController->listPosts();
    }
}
catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
