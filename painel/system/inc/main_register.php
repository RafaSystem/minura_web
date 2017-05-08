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
		<label class="form-group-label minura-cel50">Confirmar Password</label>
		<input class="form-group-input minura-cel50" type="password" name="uPassCheck" placeholder="Password" required>
	</div>
	<div class="form-group">
		<label class="form-group-label minura-cel50">E-Mail</label>
		<input class="form-group-input minura-cel50" type="email" name="uEmail" placeholder="Ex: nuno@minura.com" required>
	</div>
	<div class="form-group">
		<input class="form-group-btns" type="submit" name="addUser" value="Criar conta">
		<input class="form-group-btns" type="reset" value="Limpar campos">
	</div>
</form>
</div>
</main>
<?php

	if(isset($_POST["addUser"])){
		if($_POST["uNome"] != null){

			if($_POST["uPass"] != null) {

				if($_POST["uPassCheck"] != null){

					if($_POST["uEmail"] != null){

						if($_POST["uPass"] === $_POST["uPassCheck"]){

							include 'system/inc/connect.php';

							$username = $_POST["uNome"];
							$password = $_POST["uPass"];
							$email 	  = $_POST["uEmail"];

							$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

							if(mysqli_query($conn, $query)){

								header("Location: index.php?m=Log&msg=Success");
							}else{
								header("Location: index.php?m=Reg&E=SomethingWrong");
							}

							include 'system/inc/disconnect.php';

						}else{
							header("Location: index.php?m=Reg&E=PasswordDontMatch");
						}
					}else{
						header("Location: index.php?m=Reg&E=EmailEmpty");
					}
				}else{
					header("Location: index.php?m=Reg&E=PasswordCheckEmpty");
				}
			}else{
				header("Location: index.php?m=Reg&E=PasswordEmpty");
			}
		}else{
			header("Location: index.php?m=Reg&E=NameEmpty");
		}
	}

?>