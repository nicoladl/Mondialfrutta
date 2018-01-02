<?php

	/* Configuration */
	$subject = 'Hai un nuovo messaggio dal mondialfrutta.com';
	$mailto  = 'nicola.delazzari@gmail.com';

    // $secretKey = "6LcbczcUAAAAANqYdtJ3iqhT3wCZMeeCqV66gjrR";
	/* END Configuration */

	$name = $_POST['Nome'];
	$surname = $_POST['Cognome'];
	$email = $_POST['E-mail'];
	$company = $_POST['Azienda'];
	$message = $_POST['Messaggio'];

	// HTML for email to send submission details
	$body = "
	<br>
	<p>Ciao, hai ricevuto un messaggio dal modulo di contatto su mondialfrutta.com:<br></p>".$message."<br><br>
	<p><b>Nome</b>: ".$name." <br>
	<p><b>Cognome</b>: ".$surname." <br>
	<b>Email</b>: ".$email."<br>
	<b>Azienda</b>: ".$company."<br>
	";

	// Success Message
	$success = "message sent";

	$headers = "From: $name $surname $email \r\n";
	$headers .= "Reply-To: $email \r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$content = "<html><body>".$body."</body></html>";

	// if(isset($_POST['g-recaptcha-response'])){
 //      $captcha=$_POST['g-recaptcha-response'];
 //    }

    // $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);


    // $responseKeys = json_decode($response,true);

    // if(intval($responseKeys["success"]) === 1) {
	echo $mailto;
	echo $subject;
	echo $content;
	echo $headers;

      	if (mail($mailto, $subject, $content, $headers)) {
		    echo "$success"; // success
		} else {
		    echo 'Invio non riuscito'; // failure
		}
 //    } else {
	//     echo 'Invio non riuscito'; // failure
	// }
?>