<?php

require_once('model/Manager.php');

class LoginManager extends Manager
{	
	public function getLogin($email, $password)
	{
		$db = $this->dbConnect();

        if(strlen($email) > 0 && strlen($password) > 0){

            $stmt = $db->prepare("SELECT * FROM user WHERE email='$email'");
			
            $stmt->execute();
            $results = $stmt->fetch();

            if($results){
                $verify = password_verify($password, $results['password']);

                if($verify){

                    return 'login';
                }else{

                    return 'invalid user';
                }
            }else{

                throw new Exception("Ce compte n'existe pas");
            }
        } 
    }
}