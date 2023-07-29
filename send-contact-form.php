<!-- <?php

if(isset($_POST['submit'])) { -->

	// check name
	// if(empty($_POST['Name'])) {
	// 	echo 'A name is required <br />';
	// } else {
	// 	echo htmlspecialchars($_POST['Name']);
	// }
	// check email
	// if(empty($_POST['Email'])) {
	// 	echo 'An email is required <br />';
	// } else {
	// 	echo htmlspecialchars($_POST['Email']);
	// }
	// check message
	// if(empty($_POST['Message'])) {
	// 	echo 'A message is required <br />';
	// } else {
	// 	echo htmlspecialchars($_POST['Message']);
	// } // end of POST check
// }

// ?>
	
<!-- $Name = $_POST['Name'];
$Email = $_POST['Email address'];
$Message = $_POST['Message'];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = '587';

$mail->Username = "my email"
$mail->Password = "my password"
$mail->addAddress("my email");

$mail->Name = $Name;
$mail->Email = $Email;
$mail->Message = $Message;

$$mail->send();

echo "Email sent!"; -->