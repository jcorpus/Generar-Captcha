<?php

session_start();

$image_captcha = imagecreatefrompng('captcha.png');
//fondo
$texto_color = imagecolorallocate($image_captcha,255,255,255);


function generar_captcha(){
  $k = '';
  $valores = '123456789abcdefghijklmnopqrstuvwxyz';
  $maximo = strlen($valores)-1;
  for ($i=0; $i < 5 ; $i++) { 
    $k.= $valores{mt_rand(0,$maximo)};
  }
  return $k;
}

 $valor_c = generar_captcha(); 

 $_SESSION['llave'] = $valor_c;

imagettftext($image_captcha, 19, 0, 34, 35, $texto_color,"Anke.ttf",$valor_c);

//imprimir imagen
header('Content-type: image/png');
imagepng($image_captcha);


?>