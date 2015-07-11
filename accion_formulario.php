<?php
		$method = strtolower($_SERVER['REQUEST_METHOD']);

	switch($method)

	{

		case 'get':

			$CONTEXT =& $_GET;

			break;

		case 'post':

			$CONTEXT =& $_POST;

			break;

		default:

			$CONTEXT = array();

			break;

	}
	
		$nombre 	   = isset($CONTEXT['nombre'])    ?	    htmlentities($CONTEXT['nombre']) : ""; 
		$correo        = isset($CONTEXT['correo'])	  ? 	htmlentities($CONTEXT['correo']) : "";
		$mensaje       = isset($CONTEXT['mensaje'])	  ? 	htmlentities($CONTEXT['mensaje']) : "";
		
// definimos las variables o marcamos el error
if( $nombre=='' || $correo=='') {
	echo "<script>alert('Debes de llenar los campos que se te indican'); document.location='index.php';</script>";
	
	}
else 

{
						
			$de = "duck_dg@hotmail.com";
			$headers = "From: Sitio Personal<".$de.">\r\n";
			$headers .= "Content-type: text/html; charset=UTF-8 \r\n";
		    $headers .= "Reply-To: ".$correo."\r\n";
			$headers .= "Bcc: duck_dg@hotmail.com\r\n";
//			$headers .= "Return-Path: <".$de.">\r\n";
			
			$asunto = "Tienes un mensaje de tu pagina web";
			
			
			$html='De: '.$nombre.' <br />
				   Email: '.$correo.' <br />
				   Mensaje: '.$mensaje.' <br />
				   ';
			if (mail($destino,$asunto,$html,$headers)!=FALSE)
			{
				echo "<script>alert('Tu Mensaje a sido recibido. En breve nos comunicaremos con ustedes'); document.location='index.php';</script>";
				
			}
			else {
				echo "<script>alert('Se ha producido un error. Inténtalo más tarde.'); document.location='index.php';</script>";
		}
}