<? 
include ("PHPMailer_v2/class.phpmailer.php");
if (isset($_POST['enviar'])){
	if ($_POST['nombre']=="" or $_POST['cargo']=="" or $_POST['nombre_empresa']=="" or $_POST['telefono']=="" or $_POST['correo']=="" or $_POST['ciudad']=="" or $_POST['direccion']=="" or $_POST['mensaje']=="")
	{ echo '<script>alert("Debes diligenciar todos los campos para continuar");
	
	window.location.href="register-vpp.html";
	
	</script>'; }
	
	else {
		
$mail= new PHPMailer ();
$mail->host= "www.voxpoppuli.co";
$mail->from= "cuentanos@voxpoppuli.co";
$mail->fromName= "Bienvenido a Voxpoppuli";
$mail->AddAddress("cuentanos@voxpoppuli.co","Propietario de los registros");
$body="Estimado usuario, 
Ha llegado un nuevo registro con los siguientes datos:
nombre:".$_POST['nombre']." 
cargo:".$_POST['cargo']." 
nombre_empresa:".$_POST['nombre_empresa']." 
telefono:".$_POST['telefono']." 
correo:".$_POST['correo']." 
ciudad:".$_POST['ciudad']."
direccion:".$_POST['direccion']."
Mensaje:".$_POST['mensaje']."

No olvides responder lo mas pronto posible.";
$mail->Body=$body;
$mail->Send();
			
	
$correo= new PHPMailer ();
$correo->host= "www.voxpoppuli.co";
$correo->from= "cuentanos@voxpoppuli.co";
$correo->fromName= "Hemos recibido tu mensaje";
$correo->AddAddress("".$_POST['correo']."","destinatario");
$cuerpo="Estimado usuario, 
Gracias por comunicarte con nosotros.
En las proximas horas uno de nuestros asesores se pondra en contacto contigo.

Gracias por hacer parte de la comunidad de voz a Voz mas grande.";
	
$correo->Body=$cuerpo;
$correo->Send();
		
		echo '<script>alert("Excelente!, Hemos recibido tu mensaje. Pronto nos comunicaremos contigo");  window.location.href="http://biz.voxpoppuli.co"; </script>';
	
	} }

?>