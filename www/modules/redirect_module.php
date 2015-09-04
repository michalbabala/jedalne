<?
if(file_exists("modules/".$_GET["path"]."/index.php")) {
	$_GLOBAL["module_name"] = $_GET["path"];
	require "modules/".$_GLOBAL["module_name"]."/index.php";
}
else {
	echo $_GET["path"].'<br><br>';

	$arr = strpos_r($_GET["path"],"/");
	rsort($arr);

	for($i=0; $i<count($arr);$i++) {
		$_GLOBAL["module_name"] = substr($_GET["path"], 0, $arr[$i]);
		$_GLOBAL["module_attributes"] = explode("/",substr($_GET["path"], $arr[$i]+1));

		if(file_exists("modules/".$_GLOBAL["module_name"]."/index.php")) {
			require "modules/".$_GLOBAL["module_name"]."/index.php";
			break;
		}

	}
}
?>
