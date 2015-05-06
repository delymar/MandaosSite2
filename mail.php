	<?php

		$nombre    = $_POST['user'];
		$remitente = $_POST['email'];
		$telefono 	   = $_POST['telf'];
		$mensaje   = $_POST['message'];

		if(($nombre != '') && ($remitente != '')&& ($mensaje != '')) {
			// Ahora se envía el e-mail usando la función mail() de PHP
			$destino= "diturriza17@gmail.com";
			$asunto = "Mensaje desde www.mandaosexpress.com.ve - Mandao's Express";
			$headers = 'From: '.$destino."\r\n".
			'Reply-To: '.$destino."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$contenido = "$nombre ha enviado un mensaje desde la página web www.mandaosexpress.com.ve\n"
			. "\n"
			. "Nombre: $nombre\n"
			. "Teléfono: $telefono\n"
			. "Email: $remitente\n"
			. "Asunto: $subject\n\n"
			. "Mensaje: $mensaje\n"
			. "\n";

			@mail($destino, $asunto, $contenido, $headers);

		}

	?>