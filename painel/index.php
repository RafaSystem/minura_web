<?php
	include 'system/inc/web_config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel - <?=$web['nome']?></title>

	<!-- Tema da web -->
	<link rel="stylesheet" type="text/css" href="system/theme/css/<?=$web['temaCss']?>.css">
</head>
<body>
<?php
	session_start();

	include 'header.php';
	include 'nav.php';
	include 'main.php';
	include 'footer.php';
?>
</body>
</html>