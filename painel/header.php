<header>
	<div class="minura-cel25 minura-logotipo">
		<a href="index.php"><?=$web['nome'];?></a>
	</div>
	<div class="minura-cel50 minura-aviso">
		<?php
			include 'system/inc/web_error.php';
		?>
	</div>
	<div class="minura-cel25 minura-logs">
		<?php

			if(@$_SESSION["username"]){
				?>
					<ul>
						<li><a href="index.php?Logout">Sair</a></li>
					</ul>
				<?php
			}else{
				?>
					<ul>
						<li><a href="index.php?m=Log">Entrar</a></li>
						<li>/</li>
						<li><a href="index.php?m=Reg">Criar Conta</a></li>
					</ul>
				<?php
			}

			if(isset($_REQUEST["Logout"])){

				include 'system/inc/connect.php';

				$query_update = "UPDATE users SET status='0' WHERE username='". $_SESSION["username"] ."'";

				if(mysqli_query($conn, $query_update)){
					session_destroy();
					include 'system/inc/disconnect.php';
					header("Location: index.php?msg=LogoutSuccess");
				}
			}
		?>

	</div>
</header>