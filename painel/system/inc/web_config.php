<?php

	$id = 1;

	$web = ['nome' => "Web Title",
			'dono' => "Minura Team",
			'rodape' => "Minura 2017",
			'manutencao' => 1,
			'temaCss' => "default",
	];


	include 'connect.php';


	$query = mysqli_query($conn, "SELECT nome, proprietario, rodape, manutencao, temaCss FROM webconfig WHERE id='{$id}' AND isDeleted='0'");

	if(mysqli_num_rows($query) > 0){
		while ($row = mysqli_fetch_array($query)) {
			$web['nome'] = $row["nome"];
			$web['dono'] = $row["proprietario"];
			$web['rodape'] = $row["rodape"];
			$web['manutencao'] = $row["manutencao"];
			$web['temaCss'] = $row["temaCss"];
		}
	}


	include 'disconnect.php';

?>