<?php

	$server = "localhost";
	$user	= "root";
	$pass	= "";
	$data	= "minura";

	$conn_details = [$server,$user,$pass,$data];

	$conn = mysqli_connect($conn_details[0], $conn_details[1], $conn_details[2]);

	if(!$conn){
		die("<h4>Minura report</h4><b>Erro de ligação:</b> ".mysqli_connect_error());
	}

	mysqli_select_db($conn, $conn_details[3]);
	mysqli_set_charset($conn, "uft8");

?>