<?
	$errors = array();

	$users = getUsersByEmail($_POST['email']);

	// incorrect login
	if(count($users)==0) {
		$errors[] = "EE";
	}
	else {
		echo "zaslany email na adresu: ".$users['email'];
	}

	$SMARTY->assign("errors", $errors);

?>
