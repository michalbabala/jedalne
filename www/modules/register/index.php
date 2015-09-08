<?

$firstname = (isset($_POST['firstname'])) ? trim($_POST['firstname']) : '';
$lastname = (isset($_POST['lastname'])) ? trim($_POST['lastname']) : '';
$email = (isset($_POST['email'])) ? trim($_POST['email']) : '';
$password = (isset($_POST['password'])) ? trim($_POST['password']) : '';
$school_id = (isset($_POST['school_id'])) ? $_POST['school_id'] : '';


	if (isset($_POST['submit'])) {

		  $errors = array();

		  // Kontrola povinných položek.
		  if (empty($firstname)) {
		    $errors[] = "Zadajte meno";
		  }
		  if (empty($lastname)) {
		    $errors[] = "Zadajte priezvisko";
		  }
		  if (empty($email)) {
		    $errors[] = "Zadajte email";
		  }
		  if (empty($password)) {
		    $errors[] = "Zadajte heslo";
		  }
		  if ((empty($school_id)) or ($school_id=="0")) {
		    $errors[] = "Vyberte názov školy";
		  }
error_reporting(E_ALL);
		if(count($errors)==0) {
		  setUser($_POST);
		}
	}

/*
	if (count($errors) > 0) {
	    echo '<strong style="color:#CC0000;"><ul>';
	    foreach ($errors as $error) {
	      echo '<li>' . $error . '</li>';
	    }
	    echo '</ul></strong>';
  	}	
*/

$SMARTY->assign("errors", $errors);
$SMARTY->assign("schools", getSchools());

	print_r ($_POST);

?>
