<?

	$errors = array();

	$users = getUsersByEmail($_POST['email']);

	// incorrect login
	if (isset($_POST['submit'])) {

		if(count($users)<1) {
			$errors[] = "Zadaný email sa nenachádza v systéme";
		}
		else {
			echo "zaslany email na adresu: ".$_POST['email'];
			$_POST['token'] = generateRandomString(32);
			updateUsersTokenByEmail($_POST);

				// zmena hesla emailom + poslat link v ktorom bude token

				echo 'kliknite na linku: <a href="'.$_GLOBAL["URL"]["restore-password"].'/'.$_POST['token'].'">TU</a>';

			    $subject = "Vyžiadaná zmena hesla";
        		$message = "Linka s tokenom: ".$_POST['token'];		
        		$from = 'ondrejemilbabala@gmail.com';
        		mail($_POST['email'], $subject, $message, $from);	
		}
	}


	$SMARTY->assign("errors", $errors);
?>

