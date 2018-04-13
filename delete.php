<?php
	require_once('connection.php');
	
	$nim = $_REQUEST['nim'];
	
	$query = mysqli_query($conn, "DELETE FROM user WHERE nim='$nim' ");
	if($query){
		echo json_encode(array('response'=>'true'));
	}else{
		echo json_encode(array('response'=>'false'));
	}
?>