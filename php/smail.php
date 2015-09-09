<?
header("Content-Type: text/html; charset=utf-8");

$n = $_POST['n'];
$e = $_POST['e'];
$c = $_POST['c'];
$t = $_POST['t'];
$ci = $_POST['ci'];
$m = $_POST['m'];

$correo_destinatario = "info@dieldem.com.mx";
$nombre_remitente = $c;
$correo_remitente = $c;
$asunto = "Correo de dieldem.com.mx";
$mensaje = "";
$mensaje .= "Nombre: ".$n."<br/>";
$mensaje .= "Empresa: ".$e."<br/>";
$mensaje .= "Correo: ".$c."<br/>";
$mensaje .= "Teléfono: ".$t."<br/>";
$mensaje .= "Ciudad: ".$ci."<br/>";
$mensaje .= "Mensaje: ".$m."<br/>";


$headers = "From: ".$nombre_remitente."\r\n"."Reply-To: ".$correo_remitente."\r\n"."X-Mailer: PHP/".phpversion();
function mailutf8($correo_destinatario, $asunto = "(Sin Asunto)", $mensaje="", $header=""){
	$header_on = "MIME-Version: 1.0"."\r\n"."Content-type: text/html; charset=UTF-8"."\r\n";
	if(mail($correo_destinatario, "=?UTF-8?B?".base64_encode($asunto)."?=", $mensaje, $header_on.$header)){
		echo "Mensaje enviado. Lo contactaremos lo más prónto posible.";
	} else {
		echo "Error en el envío";
	}
}
mailutf8($correo_destinatario, $asunto , $mensaje, $headers);
?>