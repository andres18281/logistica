<?php
ob_start();
session_start(); 
   include_once 'controller/login.php'; 
  if(isset($_SESSION)){ 
   if(isset($_SESSION,$_SESSION["perfil"]) and $_SESSION["perfil"] == "qwqwsa123423@!"){ // de operaciones
     header("location: configuracion.php");
   }elseif(isset($_SESSION,$_SESSION["perfil"]) and $_SESSION["perfil"] == "asdqweasd5654184"){ // de operaciones
     header("location: clientes.php");
   }
  } 

?>

<!DOCTYPE html>
<html lang="en">

<head>
      
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.1.3.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style type="text/css">
      /*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

/********************************/
/*       Fade Bs-carousel       */
/********************************/
.fade-carousel {
    position: relative;
    height: 100vh;
}
.fade-carousel .carousel-inner .item {
    height: 100vh;
}
.fade-carousel .carousel-indicators > li {
    margin: 0 2px;
    background-color: #f39c12;
    border-color: #f39c12;
    opacity: .7;
}
.fade-carousel .carousel-indicators > li.active {
  width: 10px;
  height: 10px;
  opacity: 1;
}

/********************************/
/*          Hero Headers        */
/********************************/
.hero {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 3;
    color: #fff;
    text-align: center;
    text-transform: uppercase;
    text-shadow: 1px 1px 0 rgba(0,0,0,.75);
      -webkit-transform: translate3d(-50%,-50%,0);
         -moz-transform: translate3d(-50%,-50%,0);
          -ms-transform: translate3d(-50%,-50%,0);
           -o-transform: translate3d(-50%,-50%,0);
              transform: translate3d(-50%,-50%,0);
}
.hero h1 {
    font-size: 6em;    
    font-weight: bold;
    margin: 0;
    padding: 0;
}

.fade-carousel .carousel-inner .item .hero {
    opacity: 0;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s; 
}
.fade-carousel .carousel-inner .item.active .hero {
    opacity: 1;
    -webkit-transition: 2s all ease-in-out .1s;
       -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
         -o-transition: 2s all ease-in-out .1s; 
            transition: 2s all ease-in-out .1s;    
}

/********************************/
/*            Overlay           */
/********************************/
.overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: #080d15;
    opacity: .7;
}

/********************************/
/*          Custom Buttons      */
/********************************/
.btn.btn-lg {padding: 10px 40px;}
.btn.btn-hero,
.btn.btn-hero:hover,
.btn.btn-hero:focus {
    color: #f5f5f5;
    background-color: #1abc9c;
    border-color: #1abc9c;
    outline: none;
    margin: 20px auto;
}

/********************************/
/*       Slides backgrounds     */
/********************************/
.fade-carousel .slides .slide-1, 
.fade-carousel .slides .slide-2,
.fade-carousel .slides .slide-3 {
  height: 100vh;
  background-size: cover;
  background-position: center center;
  background-repeat: no-repeat;
}
.fade-carousel .slides .slide-1 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339134316-0e91dc9ded92?q=75&fm=jpg&s=883a422e10fc4149893984019f63c818); 
}
.fade-carousel .slides .slide-2 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339684178-3a239570f315?q=75&fm=jpg&s=c39d9a3bf66d6566b9608a9f1f3765af);
}
.fade-carousel .slides .slide-3 {
  background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
    .hero { width: 980px; }    
}
@media screen and (max-width: 640px){
    .hero h1 { font-size: 4em; }    
}



.centered-form .panel{
  background: rgba(255, 255, 255, 0.8);
  box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}





    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1">
          <div class="overlay"></div>
      </div>
      <div class="hero">
        <div class="row">
        <div class="col-md-5 col-md-offset-3 col-xs-12" >
            <div class="panel panel-default" >
                <div class="panel-heading" >
                    <h3 class="panel-title">Acceder a tu cuenta</h3>
                </div>
                <div class="panel-body" >
                    <form accept-charset="UTF-8" role="form" action="" method="POST">
                    <fieldset >
                        <div class="form-group" >
                            <input class="form-control" placeholder="E-mail" name="users_id" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div align="center"><a href="" id="idA_PWD_SwitchToOTC"><a href="restablecer_contraseña.html">¿No puedes acceder a tu cuenta?</a></div>
                        <div align="center"><a href="" id="registrar" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Registrarse</a>
                        <input class="btn btn-lg btn-success btn-block" name="btn_enviar" type="submit" value="Entrar">
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
     </div>
      </div>
    </div>
  </div> 
</div>

</body>
</html>
<?php
  if(isset($_POST['btn_enviar'])){
    if(isset($_POST['users_id'],$_POST['password'])){
      $pass = $_POST['password'];
      $login = new Login($_POST['users_id'],sha1($pass));
      if($login->loguearse()){
        header("location: index.php");
      }else{
        echo "no se conecta";
      }
    }
 }
ob_end_flush();
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Registrarse</h4>
      </div>
      <div class="modal-body">
           <div class="panel panel-default">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="cedula" class="form-control  floatlabel" placeholder="Cedula">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                     <select id="pais" class="form-control">
                       <option></option>
                       <option value="1">Colombia</option>
                       <option value="2">Panama</option>
                       <option value="3">EEUU</option>
                       <option value="4">España</option>
                       <option value="5">Peru</option>
                       <option value="6">Ecuador</option>
                       <option value="7">Venezuela</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control  floatlabel" placeholder="Nombres">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control " placeholder="Apellidos">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control " placeholder="Email">
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control " placeholder="Password">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Confirm Password">
                    </div>
                  </div>
                </div>
                <button  class="btn btn-info btn-block" id="btn_registrar"> Registrar </button>
                <button  class="btn btn-default btn-block"> Cerrar</button>
           </div>
      </div>
    </div>
  </div>
</div>
<script>
 $(function(){
  $("#btn_registrar").click(function(){
    var cedu = $("#cedula").val();
    var primer_nom = $("#first_name").val();
    var second_nomb = $("#last_name").val();
    var email = $("#email").val();
    var pass = $("#password").val();
    var pass2 = $("#password_confirmation").val(); 
    var pais = $("#pais").val();
    if(cedu != "" && primer_nom != "" && second_nomb != "" && email != "" && pass != "" && pais >0 && pais <= 7){
      var form = new FormData();
      form.append("id",cedu);
      form.append("nombre",primer_nom);
      form.append("apelli",second_nomb);
      form.append("pais",pais);
      form.append("correo",email);
      form.append("pass",pass);
      form.append("pass2",pass2);
      if(pass == pass2){
        $.ajax({
          contentType:false,
          processData: false,
          type:"post",
          url:"controller/Clientes.php",
          data:form,
          success:function(data){
            if(data.exito != ""){
               alert(data.exito);
              window.location.reload();
            }
          }
        });
      }else{
        alert("Contraseñas no coinciden");
      }   
    }else{
      alert("Uno de los campos esta mal digitados, por favor digite todos los campos");
    }
  });
 });
</script>
