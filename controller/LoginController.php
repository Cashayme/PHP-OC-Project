<?php

require_once('model/LoginManager.php');

class LoginController
{
	public function checkLogin()
	{
		$loginManager = new LoginManager();
		$reslt = $loginManager->getLogin();
		
		if ($reslt == 'login') {
			require('view/template-admin.php');
		}
		else {
			throw new Exception("NO NO NO");
			
		}
	}
}