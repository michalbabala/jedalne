<?
function process_select_result($sqlresult) {
	$result = [];
	if($sqlresult){
		while ($row = $sqlresult->fetch_array(MYSQLI_ASSOC)){
			$result[] = $row;
		}
		$sqlresult->close();
	}
	return $result;
}

function DBset($table,$pk_column,$data) {
	if($data[$pk_column]=="" || $data[$pk_column]=="null" || count(DBquery('SELECT * FROM '.$table.' WHERE '.$pk_column.'="'.$data[$pk_column].'"'))==0) {
		DBinsert($table,$pk_column,$data);
	}
	else {
		DBupdate($table,$pk_column,$data);
	}
}

function DBinsert($table,$pk_column,$data) {
	$column_names = array();
	$column_values = array();

	foreach($data as $k=>$v) {
		if($k==$pk_column) continue;
		$column_names[]=$k;
		$column_values[]=$v;
	}

	return DBquery('INSERT INTO '.$table.' ('.$pk_column.','.join(',',$column_names).') VALUES (null,"'.join('","',$column_values).'");');
}

function DBupdate($table,$pk_column,$data) {
	$columns = array();

	foreach($data as $k=>$v) {
		if($k==$pk_column) continue;
		$columns[] = $k.'="'.$v.'"';
	}

	return DBquery('UPDATE '.$table.' SET '.join(",",$columns).' WHERE '.$pk_column.'="'.$data[$pk_column].'"');
}

function DBquery($sql) {
	global $db;
	if(strpos($sql, "SELECT")===0) {
		return process_select_result($db->query($sql));
	}
	else {
		return $db->query($sql);
	}
}
?>
