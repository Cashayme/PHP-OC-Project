<?php

require_once('model/LoginManager.php');

class AdminController
{
	public function __construct($email, $password)
	{//Vérfie que l'admin est connecté
		$loginManager = new LoginManager();

		if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && $loginManager->getLogin($email, $password) == 'login') 
			{//Si il n'y a pas de session d'identification et que les id envoyés en paramètres sont bons, on les enregistre dans la session
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$reslt = $loginManager->getLogin($email, $password);
		} 
		elseif (isset($_SESSION['email']) && isset($_SESSION['password']) && $loginManager->getLogin($_SESSION['email'], $_SESSION['password']) == 'login') 
			{//Mais si une session d'identification existe et que les id sont bons
			$reslt = $loginManager->getLogin($_SESSION['email'], $_SESSION['password']);
		} else {
			header('Location: index.php?action=notAuthorized');
		}

		if ($reslt == 'login') {
			return 'Access';
			require('view/indexViewAdmin.php');
		} else {
			return 'Access denied';
		}
	}
}