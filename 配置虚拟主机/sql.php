<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'test'); 
	if ($mysqli->connect_errno) {
		echo '连接失败:('.$mysqli->connect_errno.')'.$mysqli->connect_error;exit;
	}
	$query_sql = 'select * from table_name';
	$query_result = $mysqli->query($query_sql);   //query 是个方法
	$result_data = [];
	while ($data = $query_result->fetch_assoc()) {      //fetch_assoc() 没有参数的方法，内置的
		$result_data[] = $data;
	}
	$query_result->free();    //$query_result是对象资源
	$mysqli->close();
?>