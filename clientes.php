<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="css/stylo_sesion.css">
  	<style type="text/css">
  	 @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family: 'Open Sans', 'sans-serif';
  
  height: 100%;
  /* The html and body elements cannot have any padding or margin. */

 }
 html{
 	height: 100%;
 }
.footer {
  position: absolute;
  margin-bottom: 0;
  bottom:0;
  width: 100%;
  /* Set the fixed height of the footer here */

  height: 60px;
  background-color: #f5f5f5;
}
.mega-dropdown {
  position: static !important;
}
.mega-dropdown-menu {
    padding: 20px 0px;
    width: 100%;
    box-shadow: none;
    -webkit-box-shadow: none;
}
.mega-dropdown-menu > li > ul {
  padding: 0;
  margin: 0;
}
.mega-dropdown-menu > li > ul > li {
  list-style: none;
}
.mega-dropdown-menu > li > ul > li > a {
  display: block;
  color: #222;
  padding: 3px 5px;
}
.mega-dropdown-menu > li ul > li > a:hover,
.mega-dropdown-menu > li ul > li > a:focus {
  text-decoration: none;
}
.mega-dropdown-menu .dropdown-header {
  font-size: 18px;
  color: #ff3546;
  padding: 5px 60px 5px 5px;
  line-height: 30px;
}

.carousel-control {
  width: 30px;
  height: 30px;
  top: -35px;

}
.left.carousel-control {
  right: 30px;
  left: inherit;
}
.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right {
  font-size: 12px;
  background-color: #fff;
  line-height: 30px;
  text-shadow: none;
  color: #333;
  border: 1px solid #ddd;
}
#fullscreen {
        position: absolute;
        top: 10px;
        left: 50%;
        margin-left: -248px;
        color: rgb(255, 255, 255);
        text-shadow: 0px 0px 5px rgba(51, 51, 51, 0.8);
        font-size: 1.7em;
        font-weight: bold;
    }
    
	.background {
		position: fixed;
		top: 0px;
		left: 0px;
		width: 100%;
		height: 100%;
		background-image: url(https://s3.amazonaws.com/ooomf-com-files/ikZyw45kT4m16vHkHe7u_9647713235_29ce0305d2_o.jpg);
    	background-position: center center;
    	background-repeat: no-repeat;
    	background-size: cover;
	}
	#posts {
		position: fixed;
		top: 0px;
		left: 0px;
		height: 100%;

		background-color: rgba(255, 255, 255, 0.7);
		overflow: auto;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		-ms-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
		z-index: 100;
		padding: 0px;
	}


	#posts a {
		display: block;
		padding: 20px 30px;
		color: rgb(51, 51, 51);
		text-decoration: none;
	}

	#posts a:hover {
		background-color: rgba(255, 255, 255, 0.8);
	}

	#toggle_posts {
		position: fixed;
		top: 0px;
		left: 0px;
		width: 30px;
		height: 100%;
		background-color: rgb(51, 51, 51);
		color: rgb(255, 255, 255);
		text-align: center;
		cursor: pointer;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		-ms-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;
		z-index: 100;
	}
	#toggle_posts h1 {
		position: absolute;
		top: 50%;
		left: -63px;
		font-size: 1.2em;
		margin: 0px;
		line-height: 1.1px;
		letter-spacing: 20px;
		font-weight: 700;
		margin-top: -68px;
		-webkit-transform: rotate(-90deg);
		-moz-transform: rotate(-90deg);
		-ms-transform: rotate(-90deg);
		-o-transform: rotate(-90deg);
		transform: rotate(-90deg);
	}
	#toggle_posts h1 .glyphicon.arrow-left {
		position: absolute;
		top: 0;
		left: -40px;
		margin-top: -8px;
	}
	#toggle_posts h1 .glyphicon.arrow-right {
		position: absolute;
		top: 0;
		left: 156px;
		margin-top: -8px;
	}

	#post article {
		position: relative;
		height: 80%;
		bottom:0px;
		
		background-color: rgba(255, 255, 255, 0.8); 
		border: 1px solid rgba(51, 51, 51, 0.3);
		padding: 0px;
		-webkit-transition: all 0.5s ease-in-out;
		-moz-transition: all 0.5s ease-in-out;
		-o-transition: all 0.5s ease-in-out;
		-ms-transition: all 0.5s ease-in-out;
		transition: all 0.5s ease-in-out;

		-webkit-transform: scale(0,0);
		-moz-transform: scale(0,0);
		-o-transform: scale(0,0);
		-ms-transform: scale(0,0);
		transform: scale(0,0);
	}
	#post article.active {
        margin-top: 0px;

		-webkit-transform: scale(1, 1);
		-moz-transform: scale(1, 1);
		-o-transform: scale(1, 1);
		-ms-transform: scale(1, 1);
		transform: scale(1, 1);
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
		position: fixed;
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

  	</style>

</head>
<body>
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
		<ul class="nav navbar-nav">
			<li class="dropdown mega-dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Inicio <span class="caret"></span></a>				
				<ul class="dropdown-menu mega-dropdown-menu">
					<li class="col-sm-3 hidden-xs">
						<ul>
							<li class="dropdown-header">Destinos</li>                            
                            <div id="menCollection" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                    <h4><small>Summer dress floral prints</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>       
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                    <h4><small>Gold sandals with shiny touch</small></h4>                                        
                                    <button class="btn btn-primary" type="button">9,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>        
                                </div><!-- End Item -->
                                <div class="item">
                                    <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                    <h4><small>Denin jacket stamped</small></h4>                                        
                                    <button class="btn btn-primary" type="button">49,99 €</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>      
                                </div><!-- End Item -->                                
                              </div><!-- End Carousel Inner -->
                              <!-- Controls -->
                              <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                              </a>
                            </div><!-- /.carousel -->
                            <li class="divider"></li>
                            <li><a href="#">View all Collection <span class="glyphicon glyphicon-chevron-right pull-right"></span></a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Features</li>
							<li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Carousel Control</a></li>
                            <li><a href="#">Left & Right Navigation</a></li>
							<li><a href="#">Four Columns Grid</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Fonts</li>
                            <li><a href="#">Glyphicon</a></li>
							<li><a href="#">Google Fonts</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Plus</li>
							<li><a href="#">Navbar Inverse</a></li>
							<li><a href="#">Pull Right Elements</a></li>
							<li><a href="#">Coloured Headers</a></li>                            
							<li><a href="#">Primary Buttons & Default</a></li>							
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header">Much more</li>
                            <li><a href="#">Easy to Customize</a></li>
							<li><a href="#">Calls to action</a></li>
							<li><a href="#">Custom Fonts</a></li>
							<li><a href="#">Slide down on Hover</a></li>                         
						</ul>
					</li>
				</ul>				
			</li>
            
		</ul>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu</a>
			 <ul class="dropdown-menu">
		       <li>
                 <div class="navbar-login">
                  <div class="row">
                    <div class="col-lg-4 col-xs-12">
                     <p class="text-center">
                      <span class="glyphicon glyphicon-user icon-size"></span>
                     </p>
                    </div>
                    <div class="col-lg-8 col-xs-12">
                     <p class="text-center"><strong>Nombre Completo</strong></p>
                     <p class="text-center">Email</p>
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
	</div><!-- /.nav-collapse -->
  </nav>
</div><!--container-->
<div class="container-fluid">
 <div class="col-md-3 col-sm-3 col-xs-3 hidden-lg">
	<div id="posts" class="col-xs-11 col-sm-4 col-md-4">
		
	</div>
	<div id="toggle_posts">
		<h1>
			<span class="glyphicon arrow-left glyphicon-chevron-up"></span>
			<span>MENU</span>
			<span class="glyphicon arrow-right glyphicon-chevron-up"></span>
		</h1>
	</div>
 </div>	
 <div class="col-md-10 col-sm-11 col-lg-10 col-xs-12" style="height:100% !important;">
 	<div id="post" class="col-xs-offset-1 col-xs-11 col-xs-12 col-sm-12  col-md-12">
		<article id="post-1001" class="active">
			<h2 class="title" id="title">
				<button type="button" class="close glyphicon glyphicon-remove" aria-hidden="true"></button>
			</h2>
			<div class="post">
			 <div class="col-md-4 col-xs-10">
				<img class="post-img" id="foto1" src="" alt="">
			 </div>
			 <div class="col-md-6 col-xs-12">
			 	<p id="descrip"></p>
			 </div>
			 <div class="col-md-2 col-xs-2">
			 	<p>
					<strong id="precio"></strong>
				</p>
			 </div>

				<div id="menCollection" class="carousel slide" data-ride="carousel">
    			  <div id="carru" class="carousel-inner">
                    <div class="item active">
                       <a href="#"><img src="http://placehold.it/254x150/ff3546/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                       <h4><small>Summer dress floral prints</small></h4>                                        
                    </div><!-- End Item -->

                   </div>
                   <a class="left carousel-control" href="#menCollection" role="button" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                      <span class="sr-only">Anterior</span>
                    </a>
                    <a class="right carousel-control" href="#menCollection" role="button" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                     <span class="sr-only">Siguiente</span>
                    </a>
                </div>
                
				
				
			</div>
			
		</article>
		
		
	</div>
 </div>
 <div id="comments" class="col-sm-8 col-md-8 col-xs-offset-2 col-lg-4 col-xs-10">
		<h1 class="title">
			Chat
			<button type="button" class="close glyphicon glyphicon-remove" aria-hidden="true"></button>
		</h1>
		<div id="disqus_thread"></div>
		<script type="text/javascript">
			/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
			var disqus_shortname = 'bootsnipp'; // required: replace example with your forum shortname
			var disqus_identifier = '4l0k2';
			/* * * DON'T EDIT BELOW THIS LINE * * */
			(function() {
				var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
				(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			})();
		</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	</div>
 </div>
</div><!--container-fluid-->

<div class="footer"> 
 <div class="container-fluid">
    <div id="post">
     <div class="info">
	    <a href="#comments-1001"> <span class="glyphicon glyphicon-comment"></span> Chat </a>		
		<div class="clearfix"></div>
	 </div>
	</div>  
  </div>
 </div>
</div>

</body>
</html>

<script>
 $(document).ready(function(){
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
    if (window.location == window.parent.location) {
        
        $('#fullscreen').attr('href', 'http://bootsnipp.com/mouse0270/snippets/846vX');
        $('#fullscreen').css('margin-left','-391.5px')
    }    
    $('#fullscreen').on('click', function(event) {
        event.preventDefault();
        window.parent.location =  $('#fullscreen').attr('href');
    });
    
   
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
});

$(function(){
 $.ajax({
   dataType:"json",
   type:"post",
   url:"controller/Menus_clientes.php",
   data:{'destinos':"all"},
   
 }).done(function(data){
 	if(data[0] instanceof Array){
 	 $.each(data,function(key,value){
 	   var t =  
 	   '<a id='+value[0]+' class="destin" href="#post-1001">\
		<img class="col-xs-8" src="img/'+value[4]+'" alt="">\
		  <h3>'+value[2]+'</h3>\
		<div class="clearfix"></div>\
	   </a>';
	   $(t).appendTo($("#posts"));
	 });
 	}else{
 	 var t =  
 	   '<a id='+data[0]+' class="destin" href="#post-1001">\
		<img class="col-xs-8" src="img/'+data[4]+'" alt="">\
		  <h3>'+data[2]+'</h3>\
		<div class="clearfix"></div>\
	   </a>';
	   $(t).appendTo($("#posts"));
 	}
 });
});
 $(document).on('click','.destin',function(){
 	var id = $(this).attr('id');
 	$.ajax({
 	  dataType:"json",
 	  type:"post",
 	  data:{'id_destino':id},
 	  url:"controller/Menus_clientes.php"
 	}).done(function(data){
 		$("#title").text(data[1]);
 		$("#precio").text(data[5]);
 		$("#pais").text(data[0]);
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
 	 if(data[0] instanceof Array){
 	   $.each(data,function(key,value){
 	    var x ='<div class="item">\
            <a href="#"><img src="img/'+value[4]+'" class="img-responsive" alt="product 1"></a>\
            <h4><small>'+value[1]+'</small></h4>\
            <p>'+value[3]+'</p>\
            <button class="btn btn-primary" type="button">49,99 a</button>\
            <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>\
           </div>';
        $(x).appendTo($("#carru"));
   	   });
 	 }else{
 	    var x = '<div class="item">\
           <a href="#"><img src="img/'+data[4]+'" class="img-responsive" alt="product 1"></a>\
           <h4><small>'+data[1]+'</small>\
           </h4><p>'+data[3]+'</p><button class="btn btn-primary" type="button">49,99 a</button> <button href="#" class="btn btn-default" type="button"><span class="glyphicon glyphicon-heart"></span> Add to Wishlist</button>\
           </div>';
        $(x).appendTo($("#carru"));
 	 }
 	});
  $("article").scroll();
  });
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