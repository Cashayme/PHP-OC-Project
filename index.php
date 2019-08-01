<?php
require('controller/controller.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
		}
		elseif ($_GET['action'] == 'post') {
			if (isset($_GET['id']) && $_GET['id'] > 0) {
				post();
			}
			else {
				throw new Exception("Error Processing Request", 1);
				
			}
		}
	}
	else {
		listPosts();
	}
}


catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}

