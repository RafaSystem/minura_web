<?php
	@$aviso = $_REQUEST['Aviso'];

	if ($aviso === 'DI') {
		?>
			<div class="minura-aviso-titulo">
				Dados Incorretos
			</div>
			<div class="minura-aviso-corpo">
				Os dados introduzidos estão incorrectos.
			</div>
		<?php
	}
?>