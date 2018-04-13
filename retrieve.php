<?php
	require_once('connection.php');
	
	$query = mysqli_query($conn, "SELECT * FROM user ORDER BY nim DESC");
	
	$result = array();
	while($row = mysqli_fetch_array($query)){
		array_push($result,array(
			'nim' => $row['nim'],
			'password' => $row ['password']
		));
	}
	
	echo json_encode(array(
		'judul' => 'retrieve',
		'result' => $result
	));
	
	mysqli_close($conn);
?>