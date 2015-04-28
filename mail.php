	<?php

		$nombre    = $_POST['user'];
		$remitente = $_POST['email'];
		$mensaje   = $_POST['message'];

		if(($nombre != '') && ($remitente != '')&& ($mensaje != '')) {
			$destino= "rodriguezdelymar@gmail.com";
			$cabecera = "From: $remitente\n";
			$asunto = "Mensaje desde www.mandaosexpress.com.ve - Mandao's Express";
			$contenido = "$nombre ha enviado un mensaje desde la página web www.mandaosexpress.com.ve\n"
			. "\n"
			. "Nombre: $nombre\n"
			. "Teléfono: $telefono\n"
			. "Email: $remitente\n"
			. "Asunto: $subject\n\n"
			. "Mensaje: $mensaje\n"
			. "\n";

			@mail($destino, $asunto, $contenido, $cabecera);
		}

	?>