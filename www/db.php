<?

require "connect.php";

function getUsers() {
	global $db;	
	$result = $db->query('SELECT * FROM users');
	return process_select_result($result);
}

function getOrders() {
	global $db;	
	$result = $db->query('SELECT * FROM orders');
	return process_select_result($result);
}

function getSchools() {
	global $db;	
	$result = $db->query('SELECT * FROM schools');
	return process_select_result($result);
}

function getClasses() {
	global $db;	
	$result = $db->query('SELECT * FROM classes');
	return process_select_result($result);
}

function getMenus() {
	global $db;	
	$result = $db->query('SELECT * FROM menus');
	return process_select_result($result);
}


function getClassesBySchoolId($school_id) {
	global $db;	
	$result = $db->query('SELECT * FROM classes WHERE school_id='.$school_id);
	return process_select_result($result);
}

function getUsersByClassId($class_id) {
	global $db;	
	$result = $db->query('SELECT * FROM users WHERE class_id='.$class_id);
	return process_select_result($result);
}

function getOrdersByUserId($user_id) {
	global $db;	
	$result = $db->query('SELECT * FROM orders WHERE user_id='.$user_id);
	return process_select_result($result);
}

function getOrdersByDate($date) {
	global $db;	
	$result = $db->query('SELECT * FROM orders WHERE date="'.$date.'"');
	return process_select_result($result);
}

function getOrdersBySchoolId($school_id) {
	global $db;	
	$result = $db->query('SELECT * FROM orders WHERE school_id="'.$school_id.'"');
	return process_select_result($result);
}

function getOrdersBySchoolIdAndDate($school_id,$date) {
	global $db;	
	$result = $db->query('SELECT * FROM orders WHERE date="'.$date.'" AND school_id="'.$school_id.'"');
	return process_select_result($result);
}

function getMenusByDate($date) {
	global $db;	
	$result = $db->query('SELECT * FROM menus WHERE date="'.$date.'"');
	return process_select_result($result);
}




function process_select_result($sqlresult) {
	$result = [];
	if($sqlresult){
		// Cycle through results
		while ($row = $sqlresult->fetch_object()){
			$result[] = $row;
		}
		// Free result set
		$sqlresult->close();
	}
	return $result;
}
?>
