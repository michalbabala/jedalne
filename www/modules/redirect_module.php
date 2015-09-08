<?
	require "modules/url_config.php";

	foreach($_GLOBAL["modules"] as $k=>$v) {
		$_GET["path"] = str_replace($v, $k, $_GET["path"]);
	}

	$arr = strpos_r($_GET["path"]."/","/");
	rsort($arr);

	for($i=0; $i<count($arr);$i++) {
		$_GLOBAL["module_name"] = substr($_GET["path"], 0, $arr[$i]);
		$_GLOBAL["module_attributes"] = explode("/",substr($_GET["path"], $arr[$i]+1));
		if(file_exists("modules/".$_GLOBAL["module_name"]."/index.php")) {
			require "modules/".$_GLOBAL["module_name"]."/index.php";
			$SMARTY->assign("_GLOBAL",$_GLOBAL);
			$SMARTY->assign("_GET",$_GET);
			$SMARTY->assign("_POST",$_POST);
			$SMARTY->display("modules/".$_GLOBAL["module_name"]."/index.tpl");
			break;
		}
	}
?>
