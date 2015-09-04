<?
	echo 'PHP';

	print_r($_GET);
	print_r($_POST);
	
require "connect.php";

$query = 'SELECT *
              FROM users';
$result = mysql_query($query, $db) or die(mysql_error($db));
        while ($row = mysql_fetch_array($result)) {		   
		   $CLEN[$row["user_id"]] = $row["username"];
		}
		
		echo "---".$CLEN[$row[2]]."---";

?>
