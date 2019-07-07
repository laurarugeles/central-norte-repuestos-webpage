<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="initial-scale=1, maximum-scale=1" />
<meta name="viewport" content="width=device-width" />
<title>Email</title>
</head>

<body>

<?php
$email_to = "laumarrug@gmail.com";
$name = $_POST["user-name"];
$email = $_POST["user-email"];
$company = $_POST["user-company"];
$phone = $_POST["user-phone"];
$address = $_POST["user-address"];
$message = $_POST["user-message"];
$text = "Nombre: $name<br>
         Email: $email<br> 
		 Compañia: $company<br>
         Telefono: $phone<br> 
         Dirección: $address<br> 
         Mensaje: $message";
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
$headers .= "From: <$email>" . "\r\n";
mail($email_to, "Mensaje", $text, $headers);
?>

</body>
</html>