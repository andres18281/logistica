<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.css">
  	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script src="js/fileinput.min.js"></script>
  	<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
  	<script src="js/fileinput_locale_es.js"></script>
</head>
<body>
 <div class="container-fluid">
     <nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#"></a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						
					</ul>
					
					<ul class="nav navbar-nav navbar-right">
						
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Mi Menu<strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								
								<li>
									<a href="#">Modificar</a>
								</li>
								<li>
									<a href="#">Cambiar Password</a>
								</li>
								<li class="divider">
								</li>
								<li>
									<a href="#">Salir</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				
			</nav>
 </div>
 <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			
			<div class="jumbotron">
				<h2>
					Bienvenido
				</h2>
				<p>
					
				</p>
				<p>
					<a class="btn btn-primary btn-large" href="#">Learn more</a>
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
		  <div class="list-group">
  			
  			<a href="#" id="btn_desti" class="list-group-item">Agregar Destinos</a>
  			<a href="#" id="btn_list_paque" class="list-group-item">Listar Paquetes</a>
		   </div>
		</div>
		<div class="col-md-8">
		  <div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					
				</div>
				<div id="contenido" class="panel-body">
					
				</div>
				
			</div>
		  </div>
		</div>
	</div>
</div>
</body>
</html>

<script>
 $(function(){
   $("#btn_desti").click(function(){
   	 $("#contenido").html("");
     $("#contenido").load("template/agregar_destinos.html");
   });

   $("#btn_list_paque").click(function(){
   	 $("#contenido").html("");
   	 $("#contenido").load("template/listar_destino.html");
   	 $.ajax({
   	 	datatype:"json",
   	 	type:"post",
   	 	url:"controller/Recibe_by_ajax.php",
   	 	data:{"listar":"ok"},
   	 	success:function(data){
   	     var data = $.parseJSON(data);
   	 	 $.each(data,function(index,value){
   	 	   $('<tr><td>'+value[0]+'</td>\
    		    <td>'+value[1]+'</td>\
    		    <td>'+value[2]+'</td>\
    		    <td>'+value[3]+'</td>\
    		    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>\
   	 		    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
    		 </tr>'
   	 	 });
   	 	 

   	 	}
   	 });
   });

   $(document).on('click',"#btn_send",function(){
   	 var destino = $("#txt_destino").val(); 
   	 var pais = $("#slt_pais").val(); 
   	 var precio = $("#txt_precio").val();
   	 var fecha = $("#txt_fecha").val();
	 var descrip = $("#txt_descrip").val();
    var fd = new FormData();
    var file_data = $('input[type="file"]')[0].files; // for multiple files
    for(var i = 0;i<file_data.length;i++){
        fd.append("inp_file", file_data[i]);
    }
    fd.append("pais",pais);
    fd.append("lugar",destino);
    fd.append("descrip",descrip);
    fd.append("precio",precio);
    fd.append("fecha",fecha);
    var other_data = $('form').serializeArray();
   
    $.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data: fd,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
           
        }
    });
   });

 });
</script>