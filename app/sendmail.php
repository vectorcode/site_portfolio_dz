<?php
	$mail_name = filter_var($_POST['mail_name'], FILTER_SANITIZE_STRING);
	$mail_email = filter_var($_POST['mail_email'], FILTER_SANITIZE_STRING);
	$mail_mas = filter_var($_POST['mail_mas'], FILTER_SANITIZE_STRING);
	/*$mail_capch = filter_var($_POST['mail_capch'], FILTER_SANITIZE_STRING);*/
	$mail_capch = filter_var($_POST['g-recaptcha-response'], FILTER_SANITIZE_STRING);
	
	

	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array('secret' => '6LfYNgYTAAAAAFhjAtZ07n72Hwro6UCc__oNxz5r', 'response' => $mail_capch);
 
	// use key 'http' even if you send the request to https://...
	$options = array('http' => array(
		'method'  => 'POST',
		'content' => http_build_query($data)
	));
	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	$result =   json_decode($result);


if ($result->success) {
	

	$site_owners_email = 'hi@pavelkondakov.ru'; // Replace this with your own email address
	$site_owners_name = 'PavelKondakov.ru'; // replace with your name


		require_once('phpMailer/class.phpmailer.php');
		$mail = new PHPMailer();
		
		$mail->CharSet = "UTF-8";
		$mail->From = $email;
		$mail->FromName = $name;
		$mail->Subject = "Сообщение с сайта  - pavelkondakov.ru";
		$mail->AddAddress($site_owners_email, $site_owners_name);
		$mail->IsHTML(true);
		$mail->Body = 'Имя: '.$mail_name.'<br>Email: '.$mail_email.'<br> Сообщение: '.$mail_mas;

		$mail->Send();


		

		echo $result->success;
		
}else{
	echo false;
}


?>