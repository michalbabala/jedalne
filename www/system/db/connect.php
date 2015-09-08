<?
require "db.php";
require "db_utils.php";

$DB["server"] = 'misoba.sk';
$DB["login"] = 'jedalne';
$DB["password"] = 'Ophrobro007';
$DB["database"] = 'jedalne';

global $db;

$db = new mysqli($DB["server"], $DB["login"], $DB["password"], $DB["database"]);

if(mysqli_connect_errno()) {
	echo mysqli_connect_error();
}
?>