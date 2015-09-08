<?
function process_select_result($sqlresult) {
	$result = [];
	if($sqlresult){
		// Cycle through results
		while ($row = $sqlresult->fetch_array()){
			$result[] = $row;
		}
		// Free result set
		$sqlresult->close();
	}
	return $result;
}
?>
