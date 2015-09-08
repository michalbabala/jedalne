<?
error_reporting(0);

require 'system/smarty/Smarty.class.php';
require "system/db/connect.php";
require "system/utils.php";

$SMARTY = new Smarty;
//$SMARTY->force_compile = true;
$SMARTY->debugging = false;
$SMARTY->caching = false;
$SMARTY->cache_lifetime = 0;

require "modules/redirect_module.php";

/*
$SMARTY->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);
$SMARTY->assign("FirstName", array("John", "Mary", "James", "Henry"));
$SMARTY->assign("LastName", array("Doe", "Smith", "Johnson", "Case"));
$SMARTY->assign("Class", array(array("A", "B", "C", "D"), array("E", "F", "G", "H"),
                               array("I", "J", "K", "L"), array("M", "N", "O", "P")));

$SMARTY->assign("contacts", array(array("phone" => "1", "fax" => "2", "cell" => "3"),
                                  array("phone" => "555-4444", "fax" => "555-3333", "cell" => "760-1234")));

$SMARTY->assign("option_values", array("NY", "NE", "KS", "IA", "OK", "TX"));
$SMARTY->assign("option_output", array("New York", "Nebraska", "Kansas", "Iowa", "Oklahoma", "Texas"));
$SMARTY->assign("option_selected", "NE");

$SMARTY->display('layout.tpl');
*/
?>


