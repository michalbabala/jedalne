<?
	$errors = array();




$users = getUsersByEmailAndPassword($_POST['email'],$_POST['password']);

	// incorrect login	
		if(count($pole_array)==0) {
			$errors[] = "Zadané email alebo heslo je nesprávne";
		}
		else {
	
			$_SESSION['user_id'] = $users[0]['user_id'];
			echo "Uspešne ste sa prihlásili mr. ".$_SESSION['lastname'];
		}

$SMARTY->assign("errors", $errors);
?>
