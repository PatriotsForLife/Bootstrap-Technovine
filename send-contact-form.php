<?php

if(isset($_POST['submit'])) {

	// check name
	if(empty($_POST['Name'])) {
		echo 'A name is required <br />';
	} else {
		echo htmlspecialchars($_POST['Name']);
	}
	// check email
	if(empty($_POST['Email address'])) {
		echo 'An email is required <br />';
	} else {
		echo htmlspecialchars($_POST['Email address']);
	}
	// check message
	if(empty($_POST['Message'])) {
		echo 'A message is required <br />';
	} else {
		echo htmlspecialchars($_POST['Message']);
	} // end of POST check
}

?>
	
$Name = $_POST['Name'];
$Email = $_POST['Email address'];
$Message = $_POST['Message'];