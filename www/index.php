<?
	echo 'PHP';

require "connect.php";

$result = $db->query('SELECT * FROM users');

if($result){
     // Cycle through results
    while ($row = $result->fetch_object()){
        print_r($row);
        echo $row->password;
    }
    // Free result set
    $result->close();
    $db->next_result();
}
?>
