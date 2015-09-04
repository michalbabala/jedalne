<?
	require "modules/url_config.php";

	foreach($_GLOBAL["URL"] as $k=>$v) {
		$_GET["path"] = str_replace($v, $k, $_GET["path"]);
	}

	$arr = strpos_r($_GET["path"]."/","/");
	rsort($arr);

	for($i=0; $i<count($arr);$i++) {
		$_GLOBAL["module_name"] = substr($_GET["path"], 0, $arr[$i]);
		$_GLOBAL["module_attributes"] = explode("/",substr($_GET["path"], $arr[$i]+1));
		if(file_exists("modules/".$_GLOBAL["module_name"]."/index.php")) {
			require "modules/".$_GLOBAL["module_name"]."/index.php";
			break;
		}
	}
?>
