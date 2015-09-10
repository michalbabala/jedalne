<?
	//echo $_GLOBAL["module_attributes"][0];

$users_token = $_GLOBAL["module_attributes"][0];

//echo $users_token;

//print_r (getUsersByToken($users_token));

$users = getUsersByToken($users_token);

//echo "Vaše meno: ".$users[0]['firstname']."<br>";
//echo "Vaše priezvisko: ".$users[0]['lastname']."<br>";
//echo "Zadajte novz email ".$users[0]['lastname']."<br>";


	if (isset($_POST['submit'])) {


			updateUsersPasswordByToken($_POST);
	
			echo "heslo sa zmenilo"; 
	}

$SMARTY->assign("users", $users);