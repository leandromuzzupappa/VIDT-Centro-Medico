<?php
error_reporting(0);

require "form/class.phpmailer.php";
require "form/class.smtp.php";

$msg='Fuiste contactado por '.$_POST['name'].'<br /><br />

<table style="padding:0;margin: 0;padding: 3px;width: 100%;border: 1px solid #000000;border-collapse: collapse;border-spacing: 0;">
<tr> 
<td style="width:35%;background:#1775ca;color:#FFF;padding:3px;">Campo</td>
<td style="width:65%;background:#1775ca;color:#FFF;padding:3px;">Informacion</td>
</tr>
<tr>
<td>Nombre</td><td>'.$_POST['name'].'</td>
</tr>
<tr>
<td>Apellido</td><td>'.$_POST['surname'].'</td>
</tr>
<tr>
<td>Direccion</td><td>'.$_POST['address'].'</td>
</tr>
<tr>
<td>Email:</td><td>'.$_POST['email'].'</td>
</tr>
<tr>
<td>Telefono Fijo</td><td>'.$_POST['fijo'].'</td>
</tr>
<tr>
<td>Telefono móvil</td><td>'.$_POST['movil'].'</td>
</tr>
<tr>
<td>Obra Social</td><td>'.$_POST['obrasocial'].'</td>
</tr>
<tr>
<td>Diagnóstico</td><td>'.$_POST['diagnostico'].'</td>
</tr>
<tr>
<td>Médico derivante</td><td>'.$_POST['medico'].'</td>
</tr>
</table>
<br />
Fuiste contactado por '.$_POST['name'].' con el mail '.$_POST['email'].' <br />
La IP grabada es '.$_SERVER['REMOTE_ADDR'];

try {
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->AddReplyTo($_POST['email'], $_POST['name']);
	$mail->AddAddress("turnos@vidtcm.com.ar");
	
	// DATOS SMTP
	$mail->SMTPAuth = true;
	$mail->Username = "AKIAJTJFDSSCERKZEAUQ";
	$mail->Password = "AoLCAfuJdakrYoWGhNQJqMaKp8TV94xxvovpZZQh47Dt";
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
	$mail->Port = 587;
	
	$mail->SetFrom("jm@inmoove.com", $_POST['name']);	
	$mail->Subject = "Has sido contactado por ".$_POST['name']."";
	$mail->MsgHTML($msg);
	if (!$mail->send()) {
		 header("Location:error.php");
	} else {
		 header("Location:recibido.php");
	}
} catch (phpmailerException $e) {
	echo $e->errorMessage(); 
} catch (Exception $e) {
	echo $e->getMessage(); 
}

?>