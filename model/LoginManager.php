<?php

require_once('model/Manager.php');

class LoginManager extends Manager
{	
	public function getLogin($email, $password)
	{
		$db = $this->dbConnect();

        if(strlen($email) > 0 && strlen($password) > 0){

            $stmt = $db->prepare("SELECT * FROM user WHERE email= ?");
			
            $stmt->execute(array($email));
            $results = $stmt->fetch();

            if($results){
                $verify = password_verify($password, $results['password']);

                if($verify){

                    return 'login';
                }else{

                    return 'invalid user';
                }
            }
        } 
    }
}