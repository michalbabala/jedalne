<?
	$_GLOBAL["modules"] = [
		"register"				=> "registracia",
		"login"					=> "prihlasenie",
		"forgotten-password"	=> "zabudnute-heslo",
		"orders"				=> "objednavky"
	];



	for($i=1; $i<count(explode("/",$_GET["path"])); $i++) {
		$_GLOBAL["UP"] .= '../';
	}
	foreach($_GLOBAL["modules"] as $k=>$v) {
		$_GLOBAL["URL"][$k] = $_GLOBAL["UP"].$v;
	}
?>
