<?php
	require_once('connection.php');
	
	$nim = $_REQUEST['nim'];
	$nama = $_REQUEST['nama'];
	$password = $_REQUEST['password'];
	
	$query = mysqli_query($conn, "UPDATE user SET nama='$nama',
	password='$password' WHERE nim='$nim' ");
	if($query){
		echo json_encode(array('response'=>'true'));
	}else{
		echo json_encode(array('response'=>'false'));
	}
?>