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
   	 	 	console.log(value[4]);
   	 	  var data = '<tr><td>'+value[1]+'</td>\
    		    		<td>'+value[2]+'</td>\
    		    		<td>'+value[3]+'</td>\
    		    		<td>'+value[4]+'</td>\
    		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#myModal" title="Edit"><button id='+value[0]+' class="btn btn-primary btn-xs btn_modifi" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>\
   	 		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#myModa2" title="Delete"><button id='+value[0]+' class="btn btn-danger btn-xs btn_delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
    		 		 </tr>';
    	  $(data).appendTo($("#table_lista"));
   	 	 });
   	 	}
   	 });
   });

   $(document).on('click',".btn_modifi",function(){
     $("#myModal").modal('show');
     var destino = $("#txt_destino").val(); 
     var pais = $("#slt_pais").val(); 
     var precio = $("#txt_precio").val();
     var fecha = $("#txt_fecha").val(); 
     var descrip = $("#txt_descrip").val();    
     $("#txt_lugar").val(destino); //destino
     $("#txt_fech").val(fecha);  //fecga
     $("#txt_prec").val(precio);  //precio
     $("#slt_pai").val(pais); // pais
     $("#txt_area").val(descrip);
   });	

   $(document).on('click',".btn_delete",function(){
     $("#myModa2").modal('show');
   });	


   var id_destino = 0;
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
         id_destino = data.last_id;
        }
    });
   });

   $(document).on('click',"#btn_save2",function(){
   	var title = $("#txt_title2").val();
   	var subtitle = $("#txt_subtitle2").val();
   	var descrip = $("#txt_descrip2").val();
   	var form = new FormData();
   	var file_data = $('#inp_file').files;
   	form.append('id',id_destino);
   	form.append("file2", file_data);
   	form.append('txt_title2',title);
   	form.append('txt_subtitle2',subtitle);
   	form.append('txt_descrip2',descrip);
   	$.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data: form,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
           console.log(data);
        }
    });
   });

 });
</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modificar</h4>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <label>Pais</label>
          <select class="form-control" id="slt_pai">
            <option></option>
          	<option value="1">COLOMBIA</option>
   			<option value="2">PANAMA</option>
    		<option value="3">EEUU</option>
    		<option value="4">ESPANA</option>
          </select>
          <label>Lugar</label>
           <input type="text" id="txt_lugar"class="form-control">
          <label>Fecha</label>
           <input type="text" id="txt_fech" class="form-control">
          <label>Precio</label>
           <input type="text" id="txt_prec" class="form-control">
          <textarea id="txt_area"></textarea>
          <label>Imagen</label>
           <input id="inp_files" name="inp_file[]" multiple=true type="file" data-preview-file-type="any" class="file"></input>
   		   <input id="inp_files2" name="inp_file[]" multiple=true type="file" data-preview-file-type="any" class="file"></input>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Actualizar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Borrar</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>

   $("#inp_files").fileinput();
    $('#inp_files').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions : ['jpg', 'png','gif'],
        maxFileCount:5,
        maxFileCount: 5
    });
  
</script>