<?php
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$admin_email = "alexandersmirnov2004@gmail.com";

$form_subject = "Заявка с сайта Santera";

$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->CharSet = 'UTF-8';

$jsonText = $_POST['Товары'];
$myArray = json_decode($jsonText, true);

$prod = '';

foreach ($myArray as $key => $value) {
	    $description = $value["description"];
	    $price = $value["price"];
	    $prod .= "
			<tr>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$description</td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$price</td>
			</tr>
			";
	}

$c = true;
$message = '';
foreach ( $_POST as $key => $value ) {
	if ( $value != ""  && $key != "admin_email" && $key != "form_subject"  && $key != "Товары") {
		if (is_array($value)) {
			$val_text = '';
			foreach ($value as $val) {
				if ($val && $val != '') {
					$val_text .= ($val_text==''?'':', ').$val;
				}
			}
			$value = $val_text;
		}
		$message .= "
		" . ( ($c = !$c) ? '<tr>':'<tr>' ) . "
		<td style='padding: 10px; width: auto;'><b>$key:</b></td>
		<td style='padding: 10px;width: 100%;'>$value</td>
		</tr>
		";
	}
}
$message = "<table style='width: 50%;'>$message . $prod</table>";


// От кого
$mail->setFrom('adm@' . $_SERVER['HTTP_HOST'], 'Your best site');

// Кому

$mail->addAddress($admin_email);

// Тема письма
$mail->Subject = $form_subject;

// Тело письма
$body = $message;
// $mail->isHTML(true);  это если прям верстка
$mail->msgHTML($body);

if ($_COOKIE['user'] != ''){
    $email = $_COOKIE['email'];
    $date = date('Y-m-d H:i:s');
    $mysql = new mysqli('localhost', 'varushka_users', 'TmVXX3i&', 'varushka_users');
    foreach ($myArray as $key => $value) {
	    $description = $value["description"];
	    $price = $value["price"];
        $mysql->query("INSERT INTO `$email` (`description`, `price`, `date`)
        VALUES('$description', '$price', '$date')");
    }
    $mysql->close();
}

$mail->send();


?>
