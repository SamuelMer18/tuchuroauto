<?php
require "../assets/librerias/phpmailer/Exception.php";
require "../assets/librerias/phpmailer/PHPMailer.php";
require "../assets/librerias/phpmailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if (isset($_POST["recuperarbtn"])) {
	//leemos el archivo con los usuarios registrados
	$txtdatos = file_get_contents('../assets/datos/personaladm.txt');
	$datos = unserialize($txtdatos);
	$correo = $_POST['correo'];
	if (!isset($datos[$correo])) {
		//verificamos si existen el correo
		foreach ($datos as $key => $value) {
			if ($value['correo'] == $correo) {
				$codigo = mt_rand(100000, 999999);
				$datosrec[] = array(
					'correo' => $correo,
					'codigo' => $codigo,
				);
				//guardar el array en un txt
				$codigotxt = serialize($datosrec);
				file_put_contents('../assets/datos/infotemprecover.txt', $codigotxt);
				//no onlvidar actualizar el lik al subir a hosting------------------------------------------------------------------------
				// $link="http://practicaclase.infinityfreeapp.com/publico/recuperarcontrasena.php";
				$link = "http://localhost/tuchuroauto/publico/recuperarcontrasena.php";
				//link local
				//$link="http://localhost/proyecfinal2609/publico/recuperarcontrasena.php";
				$mail = new PHPMailer(true);
				try {
					//Configurar server
					$mail->SMTPDebug = 0;
					$mail->isSMTP();
					$mail->Host       = 'smtp.gmail.com';
					$mail->SMTPAuth   = true;
					$mail->Username   = 'riotvirtual1@gmail.com';
					$mail->Password   = 'ixpnyqkpsmecpjzf';
					$mail->SMTPSecure = 'tls';
					$mail->Port       = 587;
					//Email de origen y de destino
					$mail->setFrom('riotvirtual1@gmail.com', 'ADMIN');
					$mail->addAddress($correo, 'usuario');     // Add a recipient
					// Contenido
					$mail->isHTML(true);                                  // Set email format to HTML
					$subject = "Recuperar contraseña";
					$subject = "=?UTF-8?B?" . base64_encode($subject) . "=?=";
					$mail->Subject = $subject;
					$mail->Body    = '<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">			
					<title>Contraseñas</title>
				
					<style>
						.center {
						margin: auto;
						text-align: center;
						width: 50%;
						border: 1px solid #F5B041;
						padding: 10px;
						}
						
						.button {
						background-color: orange;
						border: none;
						color: white;
						padding: 10px 15px;
						text-align: center;
						text-decoration: none;
						display: inline-block;
						font-size: 16px;
						margin: 4px 2px;
						cursor: pointer;
						}
					</style>
				</head>
				
				<body>
					<div class="center">			
						<p><b>¡Importante! </b>Su codigo es.</p>
						<p>' . $codigo . '</p>
						<a href="' . $link . '" > <button class="button">Reestablecer Contraseña</button> </a>
					</div>
				</body>
				</html>';
					$mail->send();
					echo 'Mensaje enviado';
				} catch (Exception $e) {
					echo "Mensaje no enviado : {$mail->ErrorInfo}";
				}
				echo '<p></p><div class="alert alert-success" style="text-align: center;" role="alert">Se envio el codigo a tu correo electronico</div>';
				//ojo con el exit
				//salir del foreach
				exit();
			}
		}
		file_put_contents('../assets/datos/infotemprecover.txt', '');
		echo '<p></p><div class="alert alert-danger" style="text-align: center;" role="alert">El Correo no esta registrado intenta con otro</div>';
	}
}
