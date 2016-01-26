<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				
				<div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav visible-xs">
  					  
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
		<div class="col-md-3 col-sm-3 hidden-xs">
		  <div class="list-group">
  			<a href="#" id="btn_desti" class="list-group-item">Agregar Destinos</a>
  			<a href="#" id="btn_list_paque" class="list-group-item">Listar Paquetes</a>
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
	</div>
</div>
</body>
</html>

<script src="js/scripts.js"></script>

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

<div class="modal fade" id="myModa2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Borrar</h4>
      </div>
      <div class="modal-body">
        <h5> Desea borrar esta destino ? </h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_eliminate">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
  $('#btn_dele_foto').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_dele_foto2').tooltip({title: "Eliminar foto", placement: "top"}); 
  $('#btn_desti').tooltip({title: "Crear destinos", placement: "right"}); 
  $('#btn_list_paque').tooltip({title: "Enlistar destinos ", placement: "right"}); 

});
</script>