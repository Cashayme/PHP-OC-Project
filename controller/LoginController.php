<?php

require_once('model/LoginManager.php');

class LoginController
{
	public function checkLogin($email, $password)
	{
		$loginManager = new LoginManager();

		if (!isset($_SESSION['email']) && !isset($_SESSION['password']) && $loginManager->getLogin($email, $password) == 'login') {
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$reslt = $loginManager->getLogin($email, $password);
		} 
		elseif (isset($_SESSION['email']) && isset($_SESSION['password']) && $loginManager->getLogin($_SESSION['email'], $_SESSION['password']) == 'login') {
			$reslt = $loginManager->getLogin($_SESSION['email'], $_SESSION['password']);
		} else {
			throw new Exception("Identifants invalides");
		}
	

		if ($reslt == 'login') {
			return 'Access';
			require('view/indexViewAdmin.php');
		} else {
			return 'Access denied';
		}
	}
}