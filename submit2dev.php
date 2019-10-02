<?php
error_reporting(0);

require "form/class.phpmailer.php";
require "form/class.smtp.php";

//Template del mail
$msg='
<table style="padding:0;margin: 0;padding: 3px;width: 100%;border: 1px solid #000000;border-collapse: collapse;border-spacing: 0;">
<tr> 
<td style="width:35%;background:#1775ca;color:#FFF;padding:3px;">Campo</td>
<td style="width:65%;background:#1775ca;color:#FFF;padding:3px;">Informacion</td>
</tr>
<tr>
<td>Area</td><td>'.$_POST['area'].'</td>
</tr>
<tr>
<td>Provincia</td><td>'.$_POST['provincia'].'</td>
</tr>
</table>
<br />
La IP grabada es '.$_SERVER['REMOTE_ADDR'];

try {
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	
	$mail->AddReplyTo("braianrochoa@gmail.com", "RRHH VIDT");
	$mail->AddAddress("braianrochoa@gmail.com");
	
	// DATOS SMTP
	$mail->SMTPAuth = true;
	$mail->Username = "AKIAJTJFDSSCERKZEAUQ";
	$mail->Password = "AoLCAfuJdakrYoWGhNQJqMaKp8TV94xxvovpZZQh47Dt";
	$mail->SMTPSecure = 'tls';
	$mail->Host = 'email-smtp.us-east-1.amazonaws.com';
	$mail->Port = 587;
	
	if (isset($_FILES['uploaded_file']) &&
		$_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK) {
		$mail->AddAttachment($_FILES['uploaded_file']['tmp_name'],
							$_FILES['uploaded_file']['name']);
	}
	$mail->SetFrom("jm@inmoove.com", "RRHH VIDT");//"rrhh.busquedas@rtp.com.ar"
	$mail->Subject = "CV para ser parte del equipo";
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
