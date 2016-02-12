<?php
 if(!isset($_SESSION)){
    session_start(); 
  }
  if(!isset($_SESSION["perfil"])){
        header("location: index.php");
  }
  if($_SESSION["perfil"] != "qwqwsa123423@!"){ // de operaciones
      header("location: index.php");
  }
   echo '<script> var email_ = "'.$_SESSION["email"].'";</script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="css/fileinput.css">
  	<link rel="stylesheet" href="css/stylo_sesion.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="js/btn_out_session.js"></script>
  	<script src="js/fileinput.min.js"></script>
  	<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>

  	
  	

	
  	<style type="text/css">
  		.usuario_preg:hover{
  		  background-color:rgba(255,0,0,0.3);
  		}
  		.usuarios_{
  		  background-color:rgba(255,0,0,0.0);
  	    }
  	   .window{
  	   	 border-radius: 5px;
  	   	 border-color:red;
  	   	 -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
		 box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
		 background-color: rgba(215, 44, 44, 0.2);
  	   }
  	   .usuario_preg{
  	   	cursor:pointer;
  	   }
  	   .resaltar:before{
  	   	content:'';
 		position: absolute;
 		top: 0px;
 	    left: 0px;
 		width: 0px;
 		height: 42px;
 		background: rgba(0,0,255,0.3);
 		border-radius: 5px;
 		transition: all 2s ease;
  	   }
      .resaltar:hover:before{
      	width: 100%;
      }
      #post article .title,
	#comments .title {
		font-family: "Oswald", Arial, sans-serif;
		text-transform: uppercase;
		margin: 0;
		padding: 25px 30px;
		display: block;
		border-bottom: 1px solid rgb(160, 160, 160);
	}

	#post article .title .close,
	#comments .title .close  {
		position: absolute;
		top: 0px;
		right: 0px;
		font-size: inherit;
		font-weight: normal;
		padding: 0px 13px 5px;
		opacity: 1;
	}

	#post article .title .close:hover,
	#comments .title .close:hover {
		background-color: rgba(51, 51, 51, 0.1);
	}

	#post article .post {
		
		margin: 0;
		margin-top: 0;
		height: 100%;
		position: relative;
		overflow: auto;
	}

	#post article .post .post-img {
		width: 100%;
	}

	#post article .post img {
		max-width: 100%; 
	}

	#post article .post p {
		margin: 20px 0px;
	}

	#post .info {
		display: block;
		background-color: rgb(51, 51, 51);
	}

	#post .info a {
		float: left;
		display: inline-block;
		padding: 20px 30px;
		color: rgb(255, 255, 255);
		text-decoration: none;
		border-right: 1px solid rgb(81, 81, 81);
	}

	#post .info a:hover {
		background-color: rgb(81, 81, 81);
	}
	

	#comments {
		-webkit-border-radius: 10px 10px;  /* Safari  */
  		-moz-border-radius: 10px 10px;     /* Firefox */
		position: fixed;
		box-shadow: 10px 10px 5px #888888;
        top: 60px;
		background-color: rgb(255, 255, 255);
		border: 1px solid rgba(51, 51, 51, 0.3);
		max-height: 75%;
		overflow: auto;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		-ms-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;

		-webkit-transform: translate(1000px,0px) scale(0,0);
		-moz-transform: translate(1000px,0px) scale(0,0);
		-o-transform: translate(1000px,0px) scale(0,0);
		-ms-transform: translate(1000px,0px) scale(0,0);
		transform: translate(1000px,0px) scale(0,0);
	}

	#comments.active {
		-webkit-transform: translate(-0px,0px) scale(1,1);
		-moz-transform: translate(-0px,0px) scale(1,1);
		-o-transform: translate(-0px,0px) scale(1,1);
		-ms-transform: translate(-0px,0px) scale(1,1);
		transform: translate(-0px,0px) scale(1,1);
	}

	#posts.col-xs-11 { left: -91.66666667%; }	
	#posts.col-xs-11.open ~ #toggle_posts { left: 91.66666667%; }
	#posts.open { left: 0px; }

	/* chat */

img {
    vertical-align: middle;
}

.img-responsive {
    display: block;
    height: auto;
    max-width: 100%;
}

.img-rounded {
    border-radius: 3px;
}

.img-thumbnail {
    background-color: #fff;
    border: 1px solid #ededf0;
    border-radius: 3px;
    display: inline-block;
    height: auto;
    line-height: 1.428571429;
    max-width: 100%;
    moz-transition: all .2s ease-in-out;
    o-transition: all .2s ease-in-out;
    padding: 2px;
    transition: all .2s ease-in-out;
    webkit-transition: all .2s ease-in-out;
}

.img-circle {
    border-radius: 50%;
}

.timeline-centered {
    position: relative;
    margin-bottom: 30px;
}

    .timeline-centered:before, .timeline-centered:after {
        content: " ";
        display: table;
    }

    .timeline-centered:after {
        clear: both;
    }

    .timeline-centered:before, .timeline-centered:after {
        content: " ";
        display: table;
    }

    .timeline-centered:after {
        clear: both;
    }

    .timeline-centered:before {
        content: '';
        position: absolute;
        display: block;
        width: 4px;
        background: #f5f5f6;
        /*left: 50%;*/
        top: 20px;
        bottom: 20px;
        margin-left: 30px;
    }

    .timeline-centered .timeline-entry {
        position: relative;
        /*width: 50%;
        float: right;*/
        margin-top: 5px;
        margin-left: 30px;
        margin-bottom: 10px;
        clear: both;
    }

        .timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry:before, .timeline-centered .timeline-entry:after {
            content: " ";
            display: table;
        }

        .timeline-centered .timeline-entry:after {
            clear: both;
        }

        .timeline-centered .timeline-entry.begin {
            margin-bottom: 0;
        }

        .timeline-centered .timeline-entry.left-aligned {
            float: left;
        }

            .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
                margin-left: 0;
                margin-right: -18px;
            }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
                    left: auto;
                    right: -100px;
                    text-align: left;
                }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
                    float: right;
                }

                .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
                    margin-left: 0;
                    margin-right: 70px;
                }

                    .timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
                        left: auto;
                        right: 0;
                        margin-left: 0;
                        margin-right: -9px;
                        -moz-transform: rotate(180deg);
                        -o-transform: rotate(180deg);
                        -webkit-transform: rotate(180deg);
                        -ms-transform: rotate(180deg);
                        transform: rotate(180deg);
                    }

        .timeline-centered .timeline-entry .timeline-entry-inner {
            position: relative;
            margin-left: -20px;
        }

            .timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
                content: " ";
                display: table;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:after {
                clear: both;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:before, .timeline-centered .timeline-entry .timeline-entry-inner:after {
                content: " ";
                display: table;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner:after {
                clear: both;
            }

            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
                position: absolute;
                left: -100px;
                text-align: right;
                padding: 10px;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span {
                    display: block;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:first-child {
                        font-size: 15px;
                        font-weight: bold;
                    }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-time > span:last-child {
                        font-size: 12px;
                    }

            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
                background: #fff;
                color: #737881;
                display: block;
                width: 40px;
                height: 40px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding;
                background-clip: padding-box;
                -webkit-border-radius: 20px;
                -moz-border-radius: 20px;
                border-radius: 20px;
                text-align: center;
                -moz-box-shadow: 0 0 0 5px #f5f5f6;
                -webkit-box-shadow: 0 0 0 5px #f5f5f6;
                box-shadow: 0 0 0 5px #f5f5f6;
                line-height: 40px;
                font-size: 15px;
                float: left;
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
                    background-color: #303641;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
                    background-color: #ee4749;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
                    background-color: #00a651;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
                    background-color: #21a9e1;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
                    background-color: #fad839;
                    color: #fff;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
                    background-color: #cc2424;
                    color: #fff;
                }

            .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
                position: relative;
                background: #f5f5f6;
                padding: 1em;
                margin-left: 60px;
                -webkit-background-clip: padding-box;
                -moz-background-clip: padding;
                background-clip: padding-box;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
                    content: '';
                    display: block;
                    position: absolute;
                    width: 0;
                    height: 0;
                    border-style: solid;
                    border-width: 9px 9px 9px 0;
                    border-color: transparent #f5f5f6 transparent transparent;
                    left: 0;
                    top: 10px;
                    margin-left: -9px;
                }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2, .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
                    color: #737881;
                    font-family: "Noto Sans",sans-serif;
                    font-size: 12px;
                    margin: 0;
                    line-height: 1.428571429;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p + p {
                        margin-top: 15px;
                    }

                .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
                    font-size: 16px;
                    margin-bottom: 10px;
                }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
                        color: #303641;
                    }

                    .timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
                        -webkit-opacity: .6;
                        -moz-opacity: .6;
                        opacity: .6;
                        -ms-filter: alpha(opacity=60);
                        filter: alpha(opacity=60);
                    }




                    /* contactos */
                    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

body {
    padding: 30px 0px 60px;
}
.panel > .list-group .list-group-item:first-child {
    /*border-top: 1px solid rgb(204, 204, 204);*/
}
@media (max-width: 767px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}
#back-to-bootsnipp {
    position: fixed;
    top: 10px; right: 10px;
}


.c-search > .form-control {
   border-radius: 0px;
   border-width: 0px;
   border-bottom-width: 1px;
   font-size: 1.3em;
   padding: 12px 12px;
   height: 44px;
   outline: none !important;
}
.c-search > .form-control:focus {
    outline:0px !important;
    -webkit-appearance:none;
    box-shadow: none;
}
.c-search > .input-group-btn .btn {
   border-radius: 0px;
   border-width: 0px;
   border-left-width: 1px;
   border-bottom-width: 1px;
   height: 44px;
}


.c-list {
    padding: 0px;
    min-height: 44px;
}
.title {
    display: inline-block;
    font-size: 1.7em;
    font-weight: bold;
    padding: 5px 15px;
}
ul.c-controls {
    list-style: none;
    margin: 0px;
    min-height: 44px;
}

ul.c-controls li {
    margin-top: 8px;
    float: left;
}

ul.c-controls li a {
    font-size: 1.7em;
    padding: 11px 10px 6px;   
}
ul.c-controls li a i {
    min-width: 24px;
    text-align: center;
}

ul.c-controls li a:hover {
    background-color: rgba(51, 51, 51, 0.2);
}

.c-toggle {
    font-size: 1.7em;
}

.name {
    font-size: 1.7em;
    font-weight: 700;
}

.c-info {
    padding: 5px 10px;
    font-size: 1.25em;
}

  	</style>
</head>

<body>
 <div class="container-fluid">
    <nav class="navbar navbar-default" role="navigation">
	 <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		 <span class="sr-only">Toggle navigation</span>
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 <span class="icon-bar"></span>
		 </button> <a class="navbar-brand" href="#"></a>
	 </div>			
	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	   <div class="visible-xs">
	    <ul class="nav navbar-nav">
         <li class="btn_desti"><a href="#"> Agregar Destinos</a></li>
         <li class="btn_list_paque"><a href="#">Listar Paquetes</a></li>
		</ul>
	   </div>
		<ul class="nav navbar-nav navbar-right">
		 	<ul class="nav navbar-nav navbar-right">
	    <li>
	     <a href="#" class="dropdown-toggle glyphicon glyphicon-envelope " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span id="msn_badge" style="color:red;">0</span></a>
		  <ul class="dropdown-menu">	       
	        <ul class="list-group" id="contact-list">
            </ul>
	      </a>
	     </li>
	    </li>	
	   </ul>
	  	<li class="dropdown">
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Mi perfil</a>
		  <ul class="dropdown-menu">
		    <li>
             <div class="navbar-login">
              <div class="row">
               <div class="col-lg-8 col-xs-12">
                <p class="text-center">
                 <span class="glyphicon glyphicon-user icon-size"></span>
                </p>
               </div>
               <div class="col-lg-8 col-xs-12">
                 <p class="text-center"><strong><?php echo $_SESSION["nombre_we"]; ?></strong></p>
                 <p class="text-center"><?php echo $_SESSION["email"]; ?></p>
                 <p class="text-left">
                  <a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a>
                 </p>
               </div>
               <div class="col-lg-8 col-xs-12">
                <p>
                  <a href="#" id="log_out" class="btn btn-danger btn-block">Cerrar Sesion</a>
                </p>
               </div>
              </div>
             </div>
            </li>        	
          </ul>	
		</li>
		</ul>
	 </div>		
	</nav>
 </div>
 <div class="container-fluid">
	<div class="row hidden-xs" >
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>
					Bienvenido
				</h2>
				<p>
				</p>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 col-sm-3 hidden-xs">
		  <div class="list-group">
  			<a href="#" class="list-group-item resaltar btn_desti">Agregar Destinos</a>
  			<a href="#" class="list-group-item resaltar btn_list_paque">Listar Paquetes</a>
  			<a href="#" class="list-group-item resaltar btn_list_client">Listar Clientes</a>
  			<a href="#" class="list-group-item resaltar btn_users">Cambiar contraseñas</a>
		  </div>
		</div>
		<div class="col-md-8 col-sm-8 col-xs-12">
		  <div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
				</div>
				<div id="contenido" class="panel-body">
				</div>
			</div>
		  </div>
		</div>
		<div id="vent_chat"></div>
		
	</div>
</div>
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Eliminar Destino</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Desea eliminar el destino seleccionado?</div> 
      </div>
      <div class="modal-footer ">
       <button type="button" class="btn btn-success" data-dismiss="modal" id="btn_eliminate"><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>  
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar</h4>
      </div>
      <div class="modal-body">
       <form id="form_update" method="POST" enctype="multipart/form-data">
        <div class="container-fluid">
         <div class="col-md-6">
          <label>Pais</label>
           <select class="form-control" id="slt_pai">
            <option></option>
          	<option value="1">COLOMBIA</option>
   			<option value="2">PANAMA</option>
    		<option value="3">EEUU</option>
    		<option value="4">ESPANA</option>
           </select>
         </div>
         <div class="col-md-6">
           <label>Lugar</label>
           <input type="text" id="txt_lugar"class="form-control">
         </div>
         <div class="col-md-12">
          <label>Precio</label>
          <input type="text" id="txt_prec" class="form-control">
         </div>
         <div class="col-md-12"> 
          <label> Descripcion</label>
          <textarea id="txt_area" class="form-control" rows="7"></textarea>
         </div>
         <div class="col-md-12">
  			<div class="col-xs-6 col-md-6">
    		  <button  class="glyphicon glyphicon-remove btn btn-danger" id="btn_dele_foto" data-toggle="tooltip" data-placement="left" title="Eliminar foto"></button>
    		  <a href="#" class="thumbnail" id="thumbnail1">
      			<img src="" id="img1">
    		  </a>
  			</div>
  			<div class="col-xs-6 col-md-6">
    		  <button class="glyphicon glyphicon-remove btn btn-danger" id="btn_dele_foto2" data-toggle="tooltip" data-placement="left" title="Eliminar foto"></button>
    		  <a href="#" class="thumbnail" id="thumbnail2">
      			<img src="" id="img2">
    		  </a>
  			</div>
		 </div>
		 <div class="col-md-12">
           <label>Imagen</label>
           <input id="inp_files_3" name="inp_file[]" multiple=true type="file" data-preview-file-type="any" class="file"></input>
         </div>
        </div>
     </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btn_update_desti">Actualizar</button>
      </div>
    </div>
  </div>
</div>



    
</body>
</html>
<script>
$(document).ready(function(){


   function convertir_a_numero(letra){
   	var str = String(letra);
    var n = '';
    for(var i = 0;i <= 2;i++){
      n = n + str.charCodeAt(i);
    }
    n = n.replace('NaN','');
    return n;
  }

  function ventana_nueva(email){
  	var id = convertir_a_numero(email);
  	var vent = 
  	    '<div id="wind_'+id+'" class="panenl col-md-5 col-sm-5 col-lg-5 ventana_chat" style="top:0;position:relative;">\
		 <div  class="col-sm-12 col-md-12 col-xs-offset-2 col-lg-9 col-xs-10 window">\
		   <h1 class="title">Chat\
			<button type="button" class="close glyphicon glyphicon-remove" aria-hidden="true" id="btnclo_'+id+'"></button>\
		   </h1>\
		   <div id="disqus_thread"></div>\
		   <textarea class="form-control text_chat" id='+email+'></textarea>\
		   <div class="row">\
		 	<div class="col-md-4 col-sm-4 col-xs-12" style="text-align:right;margin-top:10px;"><button class="btn btn-success btn-block btn_send" id="btn'+id+'" >Enviar</button></div>\
		   </div>\
		   <div class="timeline-centered chat_"></div>\
		 </div>\
		</div>';
    return vent;
  }

  $('#btn_dele_foto').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_dele_foto2').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_desti').tooltip({title: "Crear destinos", placement: "right"}); 
  $('#btn_list_paque').tooltip({title: "Enlistar destinos ", placement: "right"}); 

    if (window.location == window.parent.location) {      
        $('#fullscreen').attr('href', 'http://bootsnipp.com/mouse0270/snippets/846vX');
        $('#fullscreen').css('margin-left','-391.5px')
    }    
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location =  $('#fullscreen').attr('href');
    });
    
   
    $('#toggle_posts').on('click',function(event) {
		event.preventDefault();
		$('#posts').toggleClass('open');
	});

	$('a[href^="#post-"]').on('click',function(event){
		event.preventDefault();
		$('article.active').removeClass('active');
		$('#comments').removeClass('active');

		var percentage = parseInt($(window).width()) - parseInt($(this).css('width'));
		percentage = percentage / parseInt($(window).width());
		percentage = percentage * 100;

		if (percentage <= 20) {
			$('#posts').removeClass('open');
		}
		// THIS IS WHERE AJAX CODE WOULD GO TO LOAD ARTICLES DYNAMICALLY
		$($(this).attr('href')).addClass('active');
	});

	$('a[href^="#comments-"]').on('click', function(event){
		event.preventDefault();
		// THIS IS WHERE AJAX CODE WOULD GO TO LOAD ARTICLES DYNAMICALLY
		$('#comments').toggleClass('active');
	});

	$('article > .title > .close').on('click', function(event) {
		event.preventDefault();
		$('#comments').removeClass('active');
		$(this).closest('article').removeClass('active');
	});
	$('#comments > .title > .close').on('click', function(event) {
		event.preventDefault();
		$(this).closest('#comments').removeClass('active');
	});

    // cada 5 segundos envia una peticion verificando si hay alguien que halla preguntado
	setInterval(function(){
	 
	 $("#contact-list").html("");	
   	  $.ajax({
   	   dataType:"json",
   	   type:"post",
   	   url:"controller/Mensajes.php",
   	   data:{'id_consult_admin':email_}
   	  }).done(function(data){
   	    $(".ventana_chat").draggable();
   	    if(data != null){
   	     if(data[0] instanceof Array){
   	     var cant = data.length;
   	  	 $("#msn_badge").text(cant);
   	      $.each(data,function(key,value){
   	      	var id = convertir_a_numero(data[0]);
            var contact =  
           '<li class="list-group-item usuario_preg id='+id+'>\
             <div class="container-fluid">\
                <div class="col-xs-9 col-md-9 col-sm-9 ">\
                  <span class="id_email" id='+value[1]+'>'+value[0]+'</span><br/>\
           		</div>\
                <div class="clearfix"></div>\
             </div>\
            </li>';
            $(contact).appendTo($("#contact-list"));
          });
         }else{
         	$("#msn_badge").text(1);
         	var id = convertir_a_numero(data[0]);
         	var contact =  
           '<li class="list-group-item usuario_preg" id='+id+'>\
             <div class="container-fluid" id="id_msn_'+data[1]+'">\
                <div class="col-xs-9 col-md-9 col-sm-9 ">\
                  <span class="id_email" id='+data[1]+'>'+data[0]+'</span><br/>\
                </div>\
                <div class="clearfix"></div>\
             </div>\
            </li>';
            $(contact).appendTo($("#contact-list"));
         }
        }
      });	  	
     }, 5000);
    $(document).on('click','.usuario_preg',function(){
      var index = $(".usuario_preg").index($(this));
      var id_msn = $(".id_email").eq(index).attr('id');
      var text = $(".id_email").eq(index).text();
      var text = $.trim(text);
      var id = convertir_a_numero(text);
      $.ajax({
      	dataType:"json",
      	type:"post",
      	data:{"msn_from":text,"id_men":id_msn},
      	url:"controller/Mensajes.php",
      	success:function(){
      		$(".ventana_chat").draggable();
      	}
      }).done(function(data){
      		$(".ventana_chat").draggable(); 
      	if(data[0] instanceof Array){
      	  $.each(data,function(key,value){
      	    var recibe = '<article class="timeline-entry">\
              				<div class="timeline-entry-inner">\
                			 <div class="timeline-icon bg-success">\
                    		  <i class="entypo-feather"></i>\
                			 </div>\
                			 <div class="timeline-label">\
                    		  <h2><a href="#">Cliente</a></h2>\
                    		  <p class="recibe">'+value[0]+'</p>\
                			 </div>\
               				</div>\
             			  </article>';
            if($('#wind_'+id).length){
             $(".ventana_chat").draggable();
             $(recibe).appendTo($(".chat_").eq(index)); // como ya existe una ventana, simplemente pega el menu a la ventana
      	 	// $($('.chat_').eq(index)).appendTo('body'); 
      	    }else{
      	    	$(".ventana_chat").draggable();
      	        $(ventana_nueva(text)).appendTo('body'); // como no existe la ventana, crea una ventana nueva y la pega en el body
      	       $(recibe).appendTo($(".chat_").eq(index)); // al crear la ventana se add a la ventana
      	      
      	    }
          });
       }else{
       	var recibe = '<article class="timeline-entry">\
              		   <div class="timeline-entry-inner">\
                		<div class="timeline-icon bg-success">\
                    	 <i class="entypo-feather"></i>\
                		</div>\
                		<div class="timeline-label">\
                    	  <h2><a href="#">Cliente</a> <span></span></h2>\
                    	  <p class="recibe">'+data[0]+'</p>\
                		</div>\
               		   </div>\
             		 </article>';
        if($('#wind_'+id).length){
        	// $($('.chat_').eq(index)).appendTo('body');
        	$(".ventana_chat").draggable(); 
      	 	 $(recibe).appendTo($('.chat_').eq(index)); // como ya existe una ventana, simplemente pega el menu a la ventana
      	 	 
      	}else{
      		$(".ventana_chat").draggable();
      		$(ventana_nueva(text)).appendTo('body'); // como no existe la ventana, crea una ventana nueva y la pega en el body
      		$(recibe).appendTo($('.chat_').eq(index)); // al crear la ventana se add a la ventana  
      	}
       }
      });
    });
  });

  $(document).on('click',".btn_send",function(){
  	var index = $(".btn_send").index($(this));
	var text = $(".text_chat").eq(index).val();
	var email = $('.text_chat').eq(index).attr('id');
	$.ajax({
	  dataType:"json",
	  type:"post",
	  data:{"from":"msn@logistica.com","to":email,"msg":text},
	  url:"controller/Mensajes.php",
	  success:function(){
	  	$(".ventana_chat").draggable(); 
	  }
	}).done(function(data){
		var contesto = '<article class="timeline-entry">\
            <div class="timeline-entry-inner">\
                <div class="timeline-icon bg-secondary">\
                    <i class="entypo-suitcase"></i>\
                </div>\
                <div class="timeline-label">\
                    <h2><a href="#" id="mi_person">'+text+'</a></h2>\
                    <p class="contesto"></p>\
                </div>\
            </div>\
          </article>';
	  $(contesto).appendTo($(".chat_").eq(index));	
	});
  });
  $(document).on('click','.close',function(){
    var	id_btn = $(this).attr('id');
    var id_vent = id_btn.replace('btnclo_',''); 
    $('#wind_'+id_vent).remove();
  });



</script>




<script src="js/scripts.js"></script>

<script type="text/javascript">
	$(function () {
    /* BOOTSNIPP FULLSCREEN FIX */
    if (window.location == window.parent.location) {
        $('#back-to-bootsnipp').removeClass('hide');
    }
    
    
    $('[data-toggle="tooltip"]').tooltip();
    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location = "http://bootsnipp.com/iframe/4l0k2";
    });
    $('a[href="#cant-do-all-the-work-for-you"]').on('click', function(event) {
        event.preventDefault();
        $('#cant-do-all-the-work-for-you').modal('show');
    });
    
    $('[data-command="toggle-search"]').on('click', function(event) {
        event.preventDefault();
        $(this).toggleClass('hide-search');
        
        if ($(this).hasClass('hide-search')) {        
            $('.c-search').closest('.row').slideUp(100);
        }else{   
            $('.c-search').closest('.row').slideDown(100);
        }
    });   
    
});

</script>

<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

<div class="modal fade" id="myModalClien_edi" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
   <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Eliminar Destino</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Desea eliminar el destino seleccionado?</div> 
      </div>
      <div class="modal-footer ">
       <button type="button" class="btn btn-success" data-dismiss="modal" id="btn_eliminate"><span class="glyphicon glyphicon-ok-sign"></span>Si</button>
       <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>No</button>
      </div>
    </div>
    <!-- /.modal-content --> 
  </div>
</div>  