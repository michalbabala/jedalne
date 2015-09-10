<?

	$errors = array();

	$users = getUsersByEmail($_POST['email']);

	// incorrect login
	if (isset($_POST['submit'])) {

		if(count($users)<1) {
			$errors[] = "Zadaný email sa nenachádza v systéme";
		}
		else {
			echo "Zaslany email na adresu: ".$_POST['email'];
			$USER = $users[0];
			$USER["token"] = generateRandomString(32);
			setUser($USER);

				// zmena hesla emailom + poslat link v ktorom bude token

				echo 'kliknite na linku: <a href="'.$_GLOBAL["URL"]["restore-password"].'/'.$USER["token"].'">TU</a>';

			    $subject = "Vyžiadaná zmena hesla";
        		$message = "Linka s tokenom: ".$USER["token"];
        		$from = 'ondrejemilbabala@gmail.com';
        		mail($_POST['email'], $subject, $message, $from);
		}
	}


	$SMARTY->assign("errors", $errors);
?>

