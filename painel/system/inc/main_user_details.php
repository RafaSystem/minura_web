<div class="minura-main-dash-titulo">
	Detalhes do Utilizador
</div>
<div class="minura-main-dash-corpo">
<?php

	
	if(@$_REQUEST["Us"]){
		include 'system/inc/connect.php';

		$getID = $_REQUEST["Us"];

		$query = mysqli_query($conn, "SELECT id, username, password, email, tipo, isBanned, status FROM users WHERE id='$getID'");
		$result = mysqli_fetch_array($query);

		echo "<br>Nome: " . $result["username"];
		echo "<br>Password: " . $result["password"];
		echo "<br>E-mail: " . $result["email"];
		echo "<br>Tipo: " . $result["tipo"];
		echo "<br>Banido: " . $result["isBanned"];
		echo "<br>Estado: " . $result["status"];

		include 'system/inc/disconnect.php';
	}
?>
</div>