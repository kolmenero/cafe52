<?php
// check for form submission - if it doesn't exist then send back to contact form
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {
    header("Location: http://www.jurpey.com/index.html#contacto"); exit;
}
	
// get the posted data
$name = $_POST["contact_name"];
$phone = $_POST["contact_phone"];
$email_address = $_POST["contact_email"];
$message = $_POST["contact_message"];
		
// write the email content
$email_content = "Nombre: $name\n";
$email_content .= "Tlf: $phone\n";
$email_content .= "Email: $email_address\n";
$email_content .= "Mensaje o solicitud:\n\n$message";
	
// send the email
mail ("social@jurpey.com", "Mensaje desde el formulario de la web", $email_content);
	
// send the user back to the form
header("Location: http://www.jurpey.com"); exit;
?>