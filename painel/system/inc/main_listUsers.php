<div class="minura-main-dash-titulo">
	Lista de utilizadores
</div>
<div class="minura-main-dash-corpo">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
	<th width="10%">ID</th>
	<th width="70%">Nome</th>
	<th width="20%"></th>
</tr>
<?php

	include 'system/inc/connect.php';

	$query = mysqli_query($conn, "SELECT id, username FROM users ORDER BY id");

	if(mysqli_num_rows($query) > 0){
		while ($row = mysqli_fetch_assoc($query)) {
			echo "<tr><td>". $row['id'] ."</td>";
			echo "<td>". $row['username'] ."</td>";
			echo "<td><a href='index.php?m=2&Us=". $row['id'] ."'>Mais detalhes...</a></td></tr>";
		}
	}else{
		echo '0 results';
	}

	include 'system/inc/disconnect.php';
?>
</table>
</div>