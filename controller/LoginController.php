<?php

require_once('model/LoginManager.php');

class LoginController
{
	public function checkLogin($email, $password)
	{
		$loginManager = new LoginManager();
		$reslt = $loginManager->getLogin($email, $password);
		
		if ($reslt == 'login') {
			return 'Access';
			require('view/indexViewAdmin.php');
		}
		else {
			return 'Access denied';
		}
	}
}