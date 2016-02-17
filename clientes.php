<?php 
ob_start();  
@session_start();      
if(!isset($_SESSION["perfil"])){
  header("location: index.php");
}
if($_SESSION["perfil"] != "asdqweasd5654184"){ // de operaciones
  header("location: index.php");
}
ob_end_flush();

      echo '<script> var email = "'.$_SESSION["email"].'";</script>';
    ?>

<!DOCTYPE html>
<html>
<head>
    
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/btn_out_session.js"></script>
  	<link rel="stylesheet" href="css/stylo_sesion.css">
    <link rel="stylesheet" href="css/client.css">
  	<style type="text/css">
     .hero-spacer {
    margin-top: 50px;
}

.hero-feature {
    margin-bottom: 30px;
}

footer {
    margin: 50px 0;
}

nav{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: #fff;
    box-shadow: 0 3px 10px -2px rgba(0,0,0,.1);
    border: 1px solid rgba(0,0,0,.1);
}
nav ul{
    list-style: none;
    position: relative;
    float: right;
    margin-right: 100px;
    display: inline-table;
}
nav ul li{
    float: left;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
nav ul li:hover{
    background: rgba(0,0,0,.15);
}
nav ul li:hover > ul{
    display: block;
}
nav ul li{
    float: left;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
nav ul li a{
    display: block; 
    padding: 20px 20px;
    color: #222; 
    font-size: 1em;
    letter-spacing: 1px;
    text-decoration: none;
    text-transform: uppercase;
}
nav ul ul{
    display: none;
    background: #fff;
    position: absolute; 
    top: 100%;
    box-shadow: -3px 3px 10px -2px rgba(0,0,0,.1);
    border: 1px solid rgba(0,0,0,.1);
}
nav ul ul li{
    float: none; position: relative;
}
nav ul ul li a {
    padding: 15px 30px; 
    border-bottom: 1px solid rgba(0,0,0,.05);
}
nav ul ul ul {
    position: absolute; 
    left: 100%; 
    top:0;
}    
nav img {
    width: 62px;
    padding-left: 7px;
}
.jumbotron {
    height: 400px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('http://wallpaperandbackground.com/wp-content/uploads/2014/02/Unique-Beach-Palm-Tree.jpg');

}
.jumbotron h1{
    color: #fff;
    font-size: 48px;
}
.jumbotron p{
    color: #fff;
}
.movimiento {
-webkit-animation: cssAnimation 20.4569s 1 ease;
-moz-animation: cssAnimation 20.4569s 1 ease;
-o-animation: cssAnimation 20.4569s 1 ease;
}

@-webkit-keyframes cssAnimation {
from { -webkit-transform: rotate(0deg) scale(0.946) skew(-180deg) translate(300px); }
to { -webkit-transform: rotate(0deg) scale(0.97) skew(-180deg) translate(-54px); }
}
@-moz-keyframes cssAnimation {
from { -moz-transform: rotate(0deg) scale(0.946) skew(-180deg) translate(300px); }
to { -moz-transform: rotate(0deg) scale(0.97) skew(-180deg) translate(-54px); }
}
@-o-keyframes cssAnimation {
from { -o-transform: rotate(0deg) scale(0.946) skew(-180deg) translate(300px); }
to { -o-transform: rotate(0deg) scale(0.97) skew(-180deg) translate(-54px); }
}

.movimiento:hover{
transform: rotate(0deg) scale(1.5) skew(1deg) translate(0px);
-webkit-transform: rotate(0deg) scale(1.5) skew(1deg) translate(0px);
-moz-transform: rotate(0deg) scale(1.5) skew(1deg) translate(0px);
-o-transform: rotate(0deg) scale(1.5) skew(1deg) translate(0px);
-ms-transform: rotate(0deg) scale(1.5) skew(1deg) translate(0px);

}

    </style>



</head>

<body onload="mostrar()">
<div id="mascara" style="width: 100%; height:100%; background-color:rgb(0,0,0); position: absolute; z-index:100"></div>
 <div class="container-fluid">
  <nav class="navbar navbar-default">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#"></a>
	</div>
	<div class="collapse navbar-collapse js-navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#"  class="men_salir visible-xs" class="log_out" style=""> Salir</a>
          <a href="#" class="dropdown-toggle hidden-xs" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="text-align:center;"> Menu</a>
		  <ul class="dropdown-menu">
		    <li>
              <div class="navbar-login">
                <div class="row">
                  <div class="col-lg-8 col-xs-12">
                    <p class="text-center"><span class="glyphicon glyphicon-user icon-size"></span></p>
                  </div>
                  <div class="col-lg-8 col-sm-12 col-xs-12">
                    <p class="text-center"><strong>Nombre Completo</strong></p>
                    <p class="text-center">Email</p>
                    <p class="text-left"><a href="#" class="btn btn-primary btn-block btn-sm">Actualizar Datos</a></p>
                  </div>
                  <div class="col-lg-8 col-xs-12">
                    <p><a href="#"  class="btn btn-danger btn-block log_out">Cerrar Sesion</a></p>
                  </div>
                </div>
              </div>
            </li>        	
          </ul>
        </li>
      </ul>
	</div><!-- /.nav-collapse -->
  </nav>
</div><!--container-->
<div class="container-fluid">
	<div id="posts" class="col-xs-11 col-sm-4 col-md-4">
      <div class="col-md-12 col-xs-12">
        <div class="form-horizontal" style="margin-top:15px;">
           <div class="form-group">
             <button id="btn_search" class="btn btn-primary btn-lg glyphicon glyphicon-search"></button>
            <div class="col-xs-9 col-md-9 col-sm-9 col-lg-9">
              <input type="text" class="form-control input-lg" id="focusedInput" placeholder="Destino">
            </div> 
           </div>  
        </div>
      </div>
      <div class="col-md-11 col-xs-11">
        <div class="panel" style="background-color: rgba(0, 0, 2, 0.5);">
         <button class="btn btn-danger btn-block btn-lg btn_pais_des glyphicon glyphicon-globe" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> PAISES</button>
         <ul id="ul_list_pais" class="dropdown-menu" style="width: 100%;margin-left: 10px;background-color: rgba(0,0,0,0.4);position:relative;" aria-labelledby="dropdownMenu1">
         </ul>
        </div>
      </div> 
      <div class="col-md-11 col-xs-11" style="position:relative;">
        <button class="btn btn-danger btn-block btn-lg" id="show_destin">Ver destinos</button>
      </div>
      <div id="destinos"></div>
    </div>
	<div id="toggle_posts">
		<h1>
		  <span class="glyphicon arrow-left glyphicon-chevron-up"></span>
		  <span>MENU</span>
		  <span class="glyphicon arrow-right glyphicon-chevron-up"></span>
		</h1>
	</div>
    <div class="col-md-8 col-lg-8 col-xs-12 col-md-offset-2 col-lg-offset-2" id="menu_destin"> 
      <header class="jumbotron hero-spacer">
            <h1>Bienvenido</h1>
            <p>SIentase libre de escoger su destinos</p>
            <p><a href="#" class="btn btn-primary btn-large">Nuestros productos</a>
            </p>
       </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h2>Top de Destinos</h2>
            </div>
        </div>
      

        <!-- Page Features -->
        <div class="row text-center" id="pais_destin">
            
        </div>
    </div>

    <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-10 col-sm-10 col-md-8 col-lg-8" id="contenedor_info" style="display:none;">
 	  <div id="post" class="well blog" style="margin-top:10px;">
	   
        <h3 style="text-align: right;">
              <strong id="precio"></strong>
        </h3>
	    <div class="post">
         <div id="dat_princ"> 
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
             <div class="image">
              <img class="post-img" id="foto1" src="" alt="">
             </div>
            </div>
		    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
              <p id="descrip"></p>
		    </div>
		 </div>
         <div id="carru"></div> 	
	    </div>	
	  </div>  
    </div>
 	<div id="comments" class="col-sm-4 col-md-4 col-xs-offset-2 col-lg-3 col-xs-10">
		<h1 class="title">
			Chat
			<button type="button" class="close glyphicon glyphicon-remove" aria-hidden="true"></button>
		</h1>
		<div id="disqus_thread"></div>
		<textarea class="form-control" id="text_chat"></textarea>
		<div class="row">
		 <div class="col-md-4 col-sm-4  col-xs-12" style="text-align:right;margin-top:10px;"><button class="btn btn-success btn-block" id="btn_send" >Enviar</button></div>
		</div>
		<div class="row">
         <div class="timeline-centered" id="chat_">
    	 </div>
		</div>
	</div>
 </div>
</div><!--container-fluid-->
<div class="footer"> 
 <div class="container-fluid">
     <div class="info">
        <span id="msn_new" data-toggle="popover" title="Mensaje nuevo" data-content="Tienes un mensaje nuevo"></span>
	    <a href="#comments-1001" style="margin-left:50px;"> <span class="glyphicon glyphicon-envelope"  style="margin-top:15px;"></span>&nbsp<span id="cant_msn"> 0</span></a>
		<div class="clearfix"></div>
	 </div>
	
  </div>
 </div>
</div>

</body>
</html>

<script>
 $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});
 $(function () {
   
   
    $('#toggle_posts').on('click', function(event) {
		event.preventDefault();
		$('#posts').toggleClass('open');
	});

	$('a[href^="#post-"]').on('click', function(event) {
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

	$('a[href^="#comments-"]').on('click', function(event) {
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


    $("#btn_search").click(function(){
      $("#menu_destin").css('display','none');
       var valor = $("#focusedInput").val();
       $("#dat_princ").html("");
       $("#carru").html("");
       $("#contenedor_info").css("display","block");
      if(valor != "" ){
        $.ajax({
         dataType:"json",
         type:"post",
         url:"controller/Menus_clientes.php",
         data:{"words":valor},
         success:function(data){
          if(data[0] instanceof Array){ 
           $.each(data,function(key,value){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+value[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+value[1]+'</h2>\
                                <h4>'+value[4]+'</h4>\
                                <p>'+value[2]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
            $(x).appendTo($("#carru"));
           });
          }else if(data[3] != "" && data[0] != Array){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+data[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+data[1]+'</h2>\
                                <h4>'+data[4]+'</h4>\
                                <p>'+data[2]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
            $(x).appendTo($("#carru"));
          }
         }
         });
       }else{
        alert("Por favor, digite alguna clave para la busqueda");
       } 
    });
});

$(function(){
 $(".btn_pais_des").click(function(){
  $("#menu_destin").css('display','none');
        $.ajax({
          dataType:"json",
          type:"post",
          url:"controller/Menus_clientes.php",
          data:{"paises":"all"},
          success:function(data){
            $("#ul_list_pais").html("");
            $.each(data,function(key,value){
             var t = '<li class="letra"><a id='+value[1]+' class="pais bord_redond letra" style="text-align:right" href="#">'+value[0]+'</a></li>';
              $(t).appendTo($("#ul_list_pais"));
            });
          }
        });
   });
  $("#show_destin").click(function(){
    $("#menu_destin").css('display','none');
    $("#destinos").html("");
     $.ajax({
        dataType:"json",
        type:"post",
        url:"controller/Menus_clientes.php",
        data:{'destinos':"all"}
      }).done(function(data){
         $.each(data,function(key,value){
            var t =  
              '<a id='+value[0]+' class="destin" href="#">\
                <img class="col-xs-12" src="img/'+value[4]+'" alt="">\
                <h3>'+value[2]+'</h3>\
                <div class="clearfix"></div>\
              </a>';
            $(t).appendTo($("#destinos"));
         });
       });
  });
  
  setTimeout(function(){
    $.ajax({
      dataType:"json",
      type:"post",
      data:{"paises":"all"},
      url:"controller/Menus_clientes.php",
      success:function(data){
        $.each(data,function(key,value){
          var dest = 
              '<div class="col-md-3 col-sm-6 hero-feature movimiento">\
                <div class="thumbnail" style="background-color: rgba(96, 139, 196, 0.7);">\
                  <div class="caption">\
                    <h4>'+value.Nombre+'</h4>\
                      <p><a href="#" id='+value.pais+' class="btn btn-danger pais">Ver mas</a></p>\
                  </div>\
                </div>\
              </div>';
          $(dest).appendTo($("#pais_destin"));
        });
      }
    });

  },1000);


 setInterval(function(){
    function mensaje_leido(id){
        $.ajax({
          dataType:"json",
          type:"post",
          url:"controller/Mensajes.php",
          data:{"leido_mensaje":id}
        });
    }  
    $.ajax({
      dataType:"json",
      type:"post",
      url:"controller/Mensajes.php",
      data:{'id_consult':email}
    }).done(function(data){
        
     if(data != false){
        $("#msn_new").trigger( "click" );
       if(data[0] instanceof Array){

         var cant = data.length;
         $("#cant_msn").text(cant);
        $.each(data,function(key,value){
         var id = value[2];
         mensaje_leido(id);
         var recibe = '<article class="timeline-entry">\
            <div class="timeline-entry-inner">\
                <div class="timeline-icon bg-success">\
                    <i class="entypo-feather"></i>\
                </div>\
                <div class="timeline-label">\
                    <h2> <span>Administrador</span></h2>\
                    <p class="recibe">'+value[0]+'</p>\
                </div>\
            </div>\
         </article>';
         var id = value[3];
         mensaje_leido(id);
         $(recibe).appendTo($("#chat_"));
        });
      }else if(data[0] != ""){  
        $("#cant_msn").text(1);
         var id = data[2];
         mensaje_leido(id);
        var recibe = '<article class="timeline-entry">\
            <div class="timeline-entry-inner">\
                <div class="timeline-icon bg-success">\
                    <i class="entypo-feather"></i>\
                </div>\
                <div class="timeline-label">\
                    <h2> <span>Administrador</span></h2>\
                    <p class="recibe">'+data[0]+'</p>\
                </div>\
            </div>\
         </article>';
        
         $(recibe).appendTo($("#chat_"));
      }
     } 
    });
   }, 5000);
});
 $(document).on('click','.destin',function(){
   $("#menu_destin").css('display','none');
    $("#carru").html("");
 	var id = $(this).attr('id');
 	$.ajax({
 	  contentType:'application/x-www-form-urlencoded; charset=8859-1',
      dataType:"json",
 	  type:"post",
 	  data:{'id_destino':id},
 	  url:"controller/Menus_clientes.php"
 	}).done(function(data){
 		console.log("mensaje" + data);
        $("#title").text(data[1]);
 		$("#precio").text(data[5]);
 		$("#pais").text(data[2]);
 		$("#foto1").attr('src',"img/"+data[3]);
 		$("#foto2").attr('src',"img/"+data[4]);
 		$("#descrip").text(data[2]);
 	});
 	$.ajax({
 	  dataType:"json",
 	  type:"post",
 	  data:{'id_subdesti':id},
 	  url:"controller/Menus_clientes.php"
 	}).done(function(data){
      
     $("#contenedor_info").css("display","block");   
 	 if(data[0] instanceof Array){
 	   $.each(data,function(key,value){
        var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+value[4]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+value[1]+'</h2>\
                                <p>'+value[3]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
         $(x).appendTo($("#carru"));
   	   });
 	 }else if(data[0] != null){
 	    var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+data[4]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+data[1]+'</h2>\
                                <p>'+data[3]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
        $(x).appendTo($("#carru"));
 	 }
 	});
  });
  

  $(document).on('click',"#btn_send",function(){
    $("#menu_destin").css('display','none');
	 var text = $("#text_chat").val();
	$("#text_chat").val("");
	$.ajax({
	  dataType:"json",
	  type:"post",
	  data:{"from":email,"to":"msn@logistica.com","msg":text},
	  url:"controller/Mensajes.php"
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
	  $(contesto).appendTo($("#chat_"));	
	});
  });

  $(document).on('click','.pais',function(){
    
     $("#menu_destin").css('display','none');
     $("#carru").html("");
     $("#dat_princ").html("");
     $("#contenedor_info").css("display","block");
     var id = $(this).attr('id');
     $.ajax({
        dataType:"json",
        type:"POST",
        url:"controller/Menus_clientes.php",
        data:{"destin_pais":id} 
     }).done(function(data){
        console.log(data);
        if(data[0] instanceof Array){
         $.each(data,function(key,value){
          var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+value[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+value[0]+'</h2>\
                                <p>'+value[1]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
          $(x).appendTo($("#carru"));
         });
        }else if(data[0] != ""){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+data[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+data[0]+'</h2>\
                                <p>'+data[1]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
          $(x).appendTo($("#carru"));
        }
     });
    });
  function mostrar(){
    $('#mascara').css('display','none');
  }
</script>

<!--
                            <
  <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
