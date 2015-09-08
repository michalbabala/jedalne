<?
	/*
	// 1.sposob
	$orders = getOrders();

	$obj_arr = [];
	foreach($orders as $o) {
		$obj = [];
		$obj["datum"] = $o["date"];
		$obj["pocet"] = $o["count"];

		$obj_arr[] = $obj;
	}

	$SMARTY->assign("objednavky", $obj_arr);
	*/

	if($_GLOBAL["module_attributes"][0]) {
		//detail objednavky
		$SMARTY->assign("orders", getOrdersByOrderId($_GLOBAL["module_attributes"][0]));
	}
	else {
		$SMARTY->assign("orders", getOrders());
	}
?>
