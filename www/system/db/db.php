<?
function setUser($data) {
	global $db;
	return $db->query('INSERT INTO users VALUES(null,1,"'.$data["firstname"].'","'.$data["lastname"].'","'.$data["email"].'",PASSWORD("'.($data["password"]).'"),"'.$data["class_id"].'","'.$data["school_id"].'",0,"")');
}

function getUsersByEmail($email) {
	global $db;
	$result = $db->query('SELECT * FROM users WHERE email="'.$email.'"');
	return process_select_result($result);
}

function getUsersByEmailAndPassword($email,$password) {
	global $db;
	$result = $db->query('SELECT * FROM users WHERE email="'.$email.'" AND password=PASSWORD("'.$password.'")');
	return process_select_result($result);
}

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

function getOrdersByOrderId($order_id) {
	global $db;
	$result = $db->query('SELECT * FROM orders WHERE order_id='.$order_id);
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

?>
