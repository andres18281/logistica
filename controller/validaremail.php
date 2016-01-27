<?php
include_once $_SERVER['DOCUMENT_ROOT']."/logistica/conectar.php";
$conectar = new Conectar('root','');

function generarLinkTemporal($idusuario, $username){

   // Se genera una cadena para validar el cambio de contraseña
   $cadena = $idusuario.$username.rand(1,9999999).date('Y-m-d');
   $token = sha1($cadena);
 
   
   // Se inserta el registro en la tabla tblreseteopass
   $array = Array('idusuario'=>$idusuario,
                  'username'=>$username,
                  'token'=>$token,
                  'creado'=>date('Y-m-d H:i:s')
                 );
   $response = $conectar->inserta('tblreseteopass',$array);
   if(isset($response)){
      // Se devuelve el link que se enviara al usuario
      $enlace = $_SERVER["SERVER_NAME"].'/restablecer.php?idusuario='.sha1($idusuario).'&token='.$token;
      return $enlace;
   }
}
 
function enviarEmail( $email, $link ){
   $mensaje = '<html>
     <head>
        <title>Restablece tu contraseña</title>
     </head>
     <body>
       <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
       <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
       <p>
         <strong>Enlace para restablecer tu contraseña</strong><br>
         <a href="'.$link.'"> Restablecer contraseña </a>
       </p>
     </body>
    </html>';
 
   $cabeceras = 'MIME-Version: 1.0' . "\r\n";
   $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   $cabeceras .= 'From: Codedrinks <mimail@codedrinks.com>' . "\r\n";
   // Se envia el correo al usuario
   mail($email, "Recuperar contraseña", $mensaje, $cabeceras);
}
if(isset($_POST['email'])){
  $email = $_POST['email']; 
  $respuesta = new stdClass(); 
  if( $email != "" ){
   $sql = 'SELECT id_cedu_, User_Nomb_ FROM users WHERE User_Correo_ = "'.$email.'"';
   $resultado = $conectar->consultas($sql);
   if(isset($resultado)){
      $linkTemporal = generarLinkTemporal($resultado[0], $resultado[1]);
      if($linkTemporal){
        enviarEmail( $email, $linkTemporal );
        $respuesta->mensaje = '<div class="alert alert-info"> Un correo ha sido enviado a su cuenta de email con las instrucciones para restablecer la contraseña </div>';
      }
   }else{
      $respuesta->mensaje = '<div class="alert alert-warning"> No existe una cuenta asociada a ese correo. </div>';
   }
  }else{
   $respuesta->mensaje= "Debes introducir el email de la cuenta";
   echo json_encode( $respuesta );
  }
}
?>
