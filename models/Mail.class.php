<?php
require("PHPMailer/class.phpmailer.php");

class Mail
{	
		
	function Mail($opcion, $email, $password, $datos = '', $nombre='')
	{	
		include("config.php");

		$mail = new PHPMailer(true); // Declaramos un nuevo correo, el parametro true significa que mostrara excepciones y errores.
		$mail->IsSMTP(); // Se especifica a la clase que se utilizar� SMTP
		 
		try {
			$correo_destino=$email;      //Correo de quien recibe
			//--------------------------------------------------------
			//$mail->SMTPDebug  = 2;                 // Habilita informaci�n SMTP (opcional para pruebas)
													 // 1 = errores y mensajes
													 // 2 = solo mensajes
			$mail->SMTPAuth   = true;                  // Habilita la autenticaci�n SMTP
			$mail->SMTPSecure = "ssl";                 // Establece el tipo de seguridad SMTP
			$mail->Host       = "smtp.gmail.com";      // Establece Gmail como el servidor SMTP
			$mail->Port       = 465;                   // Establece el puerto del servidor SMTP de Gmail
			$mail->Username   = $correo_emisor;         // Usuario Gmail
			$mail->Password   = $contrasena; 
  
			//$mail->Host = "localhost";
			$mail->From = "info@CamiloRincon.com";
			$mail->FromName = "Camilo A. Rincon";
			$mail->AddAddress($email,"Cambio de password");
			
			switch($opcion)
			{
				//Reseteo de la clave
				case 1:
					$mail->Subject = "Cambio de password - Seguimiento y control de proyectos";
					$body  = "Hola,<br/><br/>Hemos recibido una solicitud para el cambio de password en el sistema <strong>Seguimiento y control de proyectos</strong>. Los datos de acceso son los siguientes:<br><br>";
					$body .= "<strong>Usuario</strong> <i>".$email."</i><br/>";
					$body .= "<strong>Password</strong> <i>".$password."</i><br/><br/>
					<font color='red'>Un cordial saludo</font>
					<br/><br/>Camilo Alexander Rincon Chala
					<br/><a href='http://CamiloRincon.com'>http://CamiloRincon.com</a><br/><br/>
					<br/><font size='10px'>La informaci�n contenida en este mensaje electr�nico, as� como cualquier archivo adjunto, tiene car�cter estrictamente CONFIDENCIAL y reservado. La informaci�n est� dirigida �nicamente al destinatario de la misma y s�lo podr� ser usada por �ste. El acceso al contenido de esta comunicaci�n por cualquier otra persona diferente al destinatario no est� autorizado. Si el lector de este mensaje no es el destinatario del mismo, se le notifica que el uso total o parcial, impresi�n, reproducci�n, retenci�n o distribuci�n por personas diferentes al destinatario se encuentra totalmente prohibido. Si usted ha recibido este mensaje por error, por favor notifique inmediatamente al remitente por este mismo medio y borre el mensaje de su sistema. cwebsolution se exime de cualquier responsabilidad por este mensaje en el evento de alteraci�n o falsificaci�n.</font>";
				break;
				
				//Publicacion de un comentario
				case 2:
					$mail->Subject = "Han comentado el proyecto - Seguimiento y control de proyectos";
					$body  = "Hola,<br/><br/>Hemos recibido una nueva bitacora por parte de ".$nombre.". Los datos son los siguientes:<br><br>";
					$body .= "<strong>ID del proyecto</strong> <i>".$datos['proyecto_id']."</i><br/>";
					$body .= "<strong>Nombre</strong> <i>".$nombre."</i><br/>
							  <strong>Fecha</strong> <i>".date('Y-m-d H:i:s')."</i><br/>
					          <strong>Comentario</strong> <i>".$datos['comentario']."</i><br/><br/>
					<font color='red'>Un cordial saludo</font>
					<br/><br/>Camilo Alexander Rincon Chala
					<br/><a href='http://CamiloRincon.com'>http://CamiloRincon.com</a><br/><br/>
					<br/><font size='10px'>La informaci�n contenida en este mensaje electr�nico, as� como cualquier archivo adjunto, tiene car�cter estrictamente CONFIDENCIAL y reservado. La informaci�n est� dirigida �nicamente al destinatario de la misma y s�lo podr� ser usada por �ste. El acceso al contenido de esta comunicaci�n por cualquier otra persona diferente al destinatario no est� autorizado. Si el lector de este mensaje no es el destinatario del mismo, se le notifica que el uso total o parcial, impresi�n, reproducci�n, retenci�n o distribuci�n por personas diferentes al destinatario se encuentra totalmente prohibido. Si usted ha recibido este mensaje por error, por favor notifique inmediatamente al remitente por este mismo medio y borre el mensaje de su sistema. cwebsolution se exime de cualquier responsabilidad por este mensaje en el evento de alteraci�n o falsificaci�n.</font>";
				break;
				
				//Cambio de estado del proyecto
				case 2:
					
				break;
				default:
				break;
			}
			$mail->IsHTML();
			$mail->Body = $body;
			$mail->Send();
			}catch (phpmailerException $e) {
			  echo $e->errorMessage(); //Errores de PhpMailer
			} catch (Exception $e) {
			  echo $e->getMessage(); //Errores de cualquier otra cosa.
			}
	}
}
?>