	<?php
        $paymentId = $_POST['paymentId'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $bancoEmisor = $_POST['bancoEmisor'];
        $bancoReceptor = $_POST['bancoReceptor'];
        $numeroTrasnferencia = $_POST['numeroTrasnferencia'];
        $observaciones = $_POST['observaciones'];

		if(($nombre != '') && ($remitente != '')&& ($mensaje != '')) {
			// Ahora se envía el e-mail usando la función mail() de PHP
			$destino= "diturriza17@gmail.com";
			$asunto = "Mensaje desde www.mandaosexpress.com.ve/pagos - Mandao's Express";
			$headers = 'From: '.$destino."\r\n".
			'Reply-To: '.$destino."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			$contenido = "$nombre ha enviado el número de transferencia por el pago $paymentId\n"
			. "\n"
			. "Nombre: $nombre $apellido\n"
			. "Banco Emisor: $bancoEmisor\n"
			. "Banco Receptor: $bancoReceptor\n"
			. "Numero de transferencia: $numeroTrasnferencia\n"
			. "Mensaje: $observaciones\n"
			. "\n";

			@mail($destino, $asunto, $contenido, $headers);

		}

	?>