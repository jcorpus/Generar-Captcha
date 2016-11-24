<?php
session_start();

if ($_POST['captcha_valor'] == $_SESSION['llave']) {
	echo "Correcto";
}else{
	echo "Captcha incorrecto";
}



?>

