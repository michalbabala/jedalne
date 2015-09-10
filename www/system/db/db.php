<?

// --- Users
function setUser($data) {
	return DBset('users', 'user_id', $data);
}

function getUsers() {
	return DBquery('SELECT * FROM users');
}

function getUsersByClassId($class_id) {
	return DBquery('SELECT * FROM users WHERE class_id='.$class_id);
}

function getUsersByEmail($email) {
	return DBquery('SELECT * FROM users WHERE email="'.$email.'"');
}

function getUsersByEmailAndPassword($email,$password) {
	return DBquery('SELECT * FROM users WHERE email="'.$email.'" AND password=PASSWORD("'.$password.'")');
}

function getUsersByToken($token) {
	return DBquery('SELECT * FROM users WHERE token="'.$token.'"');
}


function updateUsersPasswordByToken($data) {
	global $db;
	return $db->query('UPDATE users SET password=PASSWORD("'.($data["password"]).'") WHERE token="'.$data["token"].'"');
}

function updateUsersTokenByEmail($data) {
	global $db;
	return $db->query('UPDATE users SET token="'.$data["token"].'" WHERE email="'.$data["email"].'"');
}


// --- Orders
function getOrders() {
	return DBquery('SELECT * FROM orders');
}

function getOrdersByOrderId($order_id) {
	return DBquery('SELECT * FROM orders WHERE order_id='.$order_id);
}

function getOrdersByUserId($user_id) {
	return DBquery('SELECT * FROM orders WHERE user_id='.$user_id);
}

function getOrdersByDate($date) {
	return DBquery('SELECT * FROM orders WHERE date="'.$date.'"');
}

function getOrdersBySchoolId($school_id) {
	return DBquery('SELECT * FROM orders WHERE school_id="'.$school_id.'"');
}

function getOrdersBySchoolIdAndDate($school_id,$date) {
	return DBquery('SELECT * FROM orders WHERE date="'.$date.'" AND school_id="'.$school_id.'"');
}


// --- Schools
function getSchools() {
	return DBquery('SELECT * FROM schools');
}


// --- Classes
function getClasses() {
	return DBquery('SELECT * FROM classes');
}

function getClassesBySchoolId($school_id) {
	return DBquery('SELECT * FROM classes WHERE school_id='.$school_id);
}


// --- Menus
function getMenus() {
	return DBquery('SELECT * FROM menus');
}

function getMenusByDate($date) {
	return DBquery('SELECT * FROM menus WHERE date="'.$date.'"');
}

?>
