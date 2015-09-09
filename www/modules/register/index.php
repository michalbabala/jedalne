<?

	if (isset($_POST['submit'])) {

		  $errors = array();

		  // Kontrola povinných položek.
		  if (empty($_POST['firstname'])) {
		    $errors[] = "Zadajte meno";
		  }
		  if (empty($_POST['lastname'])) {
		    $errors[] = "Zadajte priezvisko";
		  }
		  if (empty($_POST['email'])) {
		    $errors[] = "Zadajte email";
		  }
		  if (empty($_POST['password'])) {
		    $errors[] = "Zadajte heslo";
		  }
		  if ((empty($_POST['school_id'])) or ($_POST['school_id']=="0")) {
		    $errors[] = "Vyberte názov školy";
		  }

		  if(count($errors)==0) {
		  		if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			  		if(count(getUsersByEmail($_POST['email']))==0) {
			    		setUser($_POST);
			    	}
			    	else {
			    		$errors[] = "Zadaný email je už zaregistrovaný";
			    	}
			    }
			 	else {
			 		$errors[] = "Zadaný email nie je platný";
			 	}
		  }

		  if (count($errors)==0) {
		  		echo "OKAAAAAAAAAAAAAj";
		  }
	}

$SMARTY->assign("errors", $errors);
$SMARTY->assign("schools", getSchools());

?>
