<?php
$destinatario= 'comerricodisfruta@gmail.com';
//correo es 
$nombre= $_POST['nombre'];
$asunto= $_POST['asunto'];
$mesaje= $_POST['mesaje'];
$email= $_POST['email'];



$header(" Enviar desde la página de Comer Rico ");
$mensajeCompleto = $mesaje . "\nAntentamente: ". $nombre;

mail($destinatario , $asunto, $mensajeCompleto, $header);
echo "<script>alert('Correo enviado exitosamente')</script>";
echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";
?>
