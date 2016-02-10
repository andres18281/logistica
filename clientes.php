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
 
body{
 background:#eee;    
}

p {
    font-size: 14px;
    color: #777;
}

.blog .image {
    height: 250px;
    overflow: hidden;
    border-radius: 3px 0 0 3px;
}

.blog .image img {
    width: 100%;
    height: auto;
}

.blog .date {
    top: -10px;
    z-index: 99;
    width: 65px;
    right: -10px;
    height: 65px;
    padding: 10px;
    position: absolute;
    color:#FFFFFF;
    font-weight:bold;
    background: #5bc0de;
    border-radius: 999px;
}

.blog .blog-details {
    padding: 0 20px 0 0;
}

.blog {
    padding: 0;
}

.well {
    border: 0;
    padding: 20px;
    min-height: 63px;
    background: #fff;
    box-shadow: none;
    border-radius: 3px;
    position: relative;
    max-height: 100000px;
    border-bottom: 2px solid #ccc;
}

.blog .blog-details h2 {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid #eee;
}

.blog .date .blog-number {
    color: #fff;
    display: block;
    font-size: 24px;
    text-align: center;
}                    


.footer{
  position: fixed;
  margin-bottom: 0;
  bottom:0;
  width: 100%;
  background-color: rgb(51, 51, 51);
        color: rgb(255, 255, 255);
  /* Set the fixed height of the footer here */
  height: 60px;
 
}
.destin{
  border:inherit 2px #000000;
-moz-border-radius-topleft: 8px;
-moz-border-radius-topright:8px;
-moz-border-radius-bottomleft:8px;
-moz-border-radius-bottomright:8px;
-webkit-border-top-left-radius:8px;
-webkit-border-top-right-radius:8px;
-webkit-border-bottom-left-radius:8px;
-webkit-border-bottom-right-radius:8px;
border-top-left-radius:8px;
border-top-right-radius:8px;
border-bottom-left-radius:8px;
border-bottom-right-radius:8px;


}
.destin:hover{
  
   background-color: rgba(58, 10, 72, 0.9);
}

 #cant_msn{
    height:5px;
    position:relative;
    border:groove 2px #fa0318;
    -moz-border-radius-topleft: 74px;
    -moz-border-radius-topright:75px;
    -moz-border-radius-bottomleft:74px;
    -moz-border-radius-bottomright:75px;
    -webkit-border-top-left-radius:74px;
    -webkit-border-top-right-radius:75px;
    -webkit-border-bottom-left-radius:74px;
    -webkit-border-bottom-right-radius:75px;
    border-top-left-radius:74px;
    border-top-right-radius:75px;
    border-bottom-left-radius:74px;
    border-bottom-right-radius:75px;
    background-color:red;
    color:black;
    font-weight: bold;
    font-size:12px;

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
        background-color: rgba(0, 0, 0, .8);
		position: fixed;
        top: 0px;
        left: 0px;
        height: 100%;
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
    footer{

    }
	#toggle_posts {
		position: fixed;
		top: 0px;
		left: 0px;
		width: 50px;
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
		left: -43px;
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
	

	 .title,
	#comments .title {
		font-family: "Oswald", Arial, sans-serif;
		text-transform: uppercase;
		margin: 0;
		padding: 25px 30px;
		display: block;
		border-bottom: 1px solid rgb(160, 160, 160);
	}

	.title .close,
	#comments .title .close  {
		position: absolute;
		top: 0px;
		right: 0px;
		font-size: inherit;
		font-weight: normal;
		padding: 0px 13px 5px;
		opacity: 1;
	}

	.title .close:hover,
	#comments .title .close:hover {
		background-color: rgba(51, 51, 51, 0.1);
	}

	.post {
		
		margin: 0;
		margin-top: 0;
		height: 100%;
		position: relative;
		overflow: auto;
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

    @media (min-width: 768px) {
        #posts.col-sm-4 { left: -33.33333333%; }
        #posts.col-sm-4.open ~ #toggle_posts { left: 33.33333333%; }
        #comments { right: 8.33333333%; }
    }

    @media (min-width: 992px) {
        #posts.col-md-3 { left: -25%; }
        #posts.col-md-3.open ~ #toggle_posts { left: 25%; }
        #comments { background-color: rgba(255, 255, 255, 0.8); right: 0px; }
    }


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
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Menu</a>
			 <ul class="dropdown-menu">
		       <li>
                 <div class="navbar-login">
                  <div class="row">
                    <div class="col-lg-8 col-xs-12">
                     <p class="text-center">
                      <span class="glyphicon glyphicon-user icon-size"></span>
                     </p>
                    </div>
                    <div class="col-lg-8 col-sm-12 col-xs-12">
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
 
	<div id="posts" class="col-xs-11 col-sm-4 col-md-3">
		
	</div>
	<div id="toggle_posts">
		<h1>
			<span class="glyphicon arrow-left glyphicon-chevron-up"></span>
			<span>MENU</span>
			<span class="glyphicon arrow-right glyphicon-chevron-up"></span>
		</h1>
	</div>

 <div class="col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-10 col-sm-10 col-md-8 col-lg-8" id="contenedor_info" style="display:none;">
 	<div id="post" class="well blog" style="margin-top:10px;">
	  <h2 class="title" id="title">
		<button type="button" class="close glyphicon glyphicon-remove" aria-hidden="true"></button>
	  </h2>
      
        <h3 style="text-align: right;">
              <strong id="precio"></strong>
        </h3>
     
	  <div class="post">
	    
        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
         <div class="image">
              <img class="post-img" id="foto1" src="" alt="">
         </div>
        </div>
		<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
            <p id="descrip"></p>
		</div>
		
		<div id="carru">
        </div> 	
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
	    <a href="#comments-1001" style="margin-left:50px;"> <span class="glyphicon glyphicon-envelope" style="margin-top:15px;"></span>&nbsp<span id="cant_msn"> 0</span></a>
		<div class="clearfix"></div>
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
   data:{'destinos':"all"}
 }).done(function(data){
    $("#posts").html("");
     $.each(data,function(key,value){
 	   var t =  
 	   '<a id='+value[0]+' class="destin" href="#post-1001">\
		<img class="col-xs-12" src="img/'+value[4]+'" alt="">\
		  <h3>'+value[2]+'</h3>\
		<div class="clearfix"></div>\
	   </a>';
	   $(t).appendTo($("#posts"));
	 });
 	
 });
 setInterval(function(){
    $.ajax({
      dataType:"json",
      type:"post",
      url:"controller/Mensajes.php",
      data:{'id_consult':email}
    }).done(function(data){
      if(data != null){
       if(data[0] instanceof Array){
         var cant = data.length;
         $("#cant_msn").text(cant);
        $.each(data,function(key,value){

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
         $(recibe).appendTo($("#chat_"));
        });
      }else if(data[0] != ""){   
        $("#cant_msn").text(1);
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
  $("#comments").mouseover(function() {
    $.ajax({
        dataType:"json",
        type:"post",
        url:"controller/Mensajes.php",
        data:{'leido_mail':email},
        success:function(data){
            console.log(data);
        }
    });
  });

  $(document).on('click',"#btn_send",function(){
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
