<main>
<div class="minura-main">
<?php
	
	@$m = $_REQUEST['m'];

	switch ($m) {
		case '2':
			if(@$_SESSION["username"]){
				if(@$_REQUEST['Us']){
					include 'system/inc/main_user_details.php';
				}else{
					include 'system/inc/main_listUsers.php';
				}
			}else{		
				include 'system/inc/main_login.php';
			}
			break;

		case 'Log':
			if(@$_SESSION["username"]){
				include 'system/inc/main_dashboard.php';
			}else{		
				include 'system/inc/main_login.php';
			}
			break;

		case 'Reg':
			if(@$_SESSION["username"]){
				include 'system/inc/main_dashboard.php';
			}else{		
				include 'system/inc/main_register.php';
			}
			break;

		default:
			if(@$_SESSION["username"]){
				include 'system/inc/main_dashboard.php';
			}else{		
				include 'system/inc/main_anon.php';
			}
			break;
	}

?>
</div>
</main>