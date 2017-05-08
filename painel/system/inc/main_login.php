<main>
<div class="minura-main main-registro">
<form method="post">
	<div class="form-group">
		<label class="form-group-label minura-cel50">Nome</label>
		<input class="form-group-input minura-cel50" type="text" name="uNome" placeholder="Ex: Nuno" required autofocus="on">
	</div>
	<div class="form-group">
		<label class="form-group-label minura-cel50">Password</label>
		<input class="form-group-input minura-cel50" type="password" name="uPass" placeholder="Password" required>
	</div>
	<div class="form-group">
		<input class="form-group-btns" type="submit" name="userLogin" value="Entrar conta">
	</div>
</form>
</div>
</main>
<?php

	if(isset($_POST["userLogin"])){
		if($_POST["uNome"] != null){

			if($_POST["uPass"] != null) {

				include 'system/inc/connect.php';

				$username = $_POST['uNome'];
				$password = $_POST['uPass'];

				$query = mysqli_query($conn, "SELECT username, password, tipo, status FROM users WHERE username='$username' AND password='$password' AND tipo='2' AND isDeleted='0' AND isBanned='0'");
				$result = mysqli_fetch_array($query);

				if($username == $result['username'] && $password == $result['password']){

					$_SESSION["username"] = $result["username"];
					$_SESSION["tipo"] = $result["tipo"];
					$_SESSION["isOnline"] = $result["status"];

					if($_SESSION["isOnline"] == 0){

						$query_update = "UPDATE users SET status='1' WHERE username='". $result["username"] ."'";

						if(mysqli_query($conn, $query_update)){
			    			echo '<meta http-equiv="refresh" content="0;url=index.php">';
						}else{
							header("Location: index.php?m=Log&E=somethingWrong");
						}
					}else{
						session_destroy();
			    		echo '<meta http-equiv="refresh" content="0;url=index.php?m=Log&E=HackedAccount">';
					}

					include 'system/inc/disconnect.php';
				}else{
					header("Location: index.php?m=Log&E=WrongDetailsOrAccessDenied");
				}
			}else{
				header("Location: index.php?m=Log&E=PasswordEmpty");
			}
		}else{
			header("Location: index.php?m=Log&E=NameEmpty");
		}
	}

?>
