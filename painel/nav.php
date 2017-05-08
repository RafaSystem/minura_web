<nav>
	<div class="minura-nav minura-nav-menu">
		<ul>
			<?php
				include 'system/inc/connect.php';

				if(@$_SESSION["tipo"] != 2){
					//header("Location: ../index.php");
					echo '<li><a href="index.php">Inicio</a></li>';
				}else{ 
					$query = mysqli_query($conn, "SELECT id, menu_nome, categoria FROM menus WHERE tipo='0'");

					while ($row = mysqli_fetch_array($query)) {
						if($row['id'] == 1){
							echo '<li><a href="index.php">'.$row['menu_nome'].'</a></li>';
						}else{
							echo '<li><a href="index.php?m='. $row['id'] .'">'.$row['menu_nome'].'</a></li>';
						}
					}
				}
				include 'system/inc/disconnect.php';
			?>
		</ul>
	</div>
</nav>