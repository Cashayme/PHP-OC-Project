<?php

require_once('model/LoginManager.php');

class LoginController
{
	public function checkLogin()
	{
		$loginManager = new LoginManager();
		$reslt = $loginManager->getLogin();
		
		if ($reslt == 'login') {
			require('view/indexViewAdmin.php');
			return 'Access';
		}
		else {
			echo "Tu n'est pas autorisé à voir cette page";
			return 'Access denied';
			
		}
	}
}