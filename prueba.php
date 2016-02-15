<?php
ob_start();
session_start(); 
  if(!isset($_SESSION["perfil"])){
        header("location: index.php");
  }
  if($_SESSION["perfil"] != "qwqwsa123423@!"){ // de operaciones
      header("location: index.php");
  }
ob_end_flush();
  include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Destinos.php";
  include_once $_SERVER['DOCUMENT_ROOT']."/logistica/Model/Lugares.php"; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
  <link rel="stylesheet" href="css/stylo_sesion.css">
  <style type="text/css">
  .divisor{
    z-index: 206;
    width: 100%;
    height: 1px;
    border-color: #000000;
    background-color: #7F7F7F;
    margin-top: 10px;
    position: relative;
  }
  .jumbotron{
    width: 80%;
    height: 400px;
  
    border-width: 1px;
    border-style: solid;
    border-color: #7F7F7F;
    margin-left: 10%;
    margin-top: 1%;
    position: relative;
  }
  textarea{
   width:auto;
    display: block;rows=3
  }



  </style>
  	    <?php
      if(isset($_GET['destinos'])){
        $id_desti = $_GET['destinos'];
        $destino =  new Destinos();
        $lugares = new Lugares();
        $response_desti = $destino->Get_destino($id_desti);
        $response_lugar = $lugares->Get_lugares($id_desti);
        if(isset($response_desti)){
          $cabecera = '
          <div class="row">
            <input id="input-id" type="file" class="file" data-preview-file-type="text">
            <p></p>
            <div class="panel panel-default">
             <div class="panel-body">
              <div class="jumbotron" style="background-image: url(img/'.$response_desti[4].'); background-repeat: no-repeat;"></div>
              <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Destino" value='.$response_desti[1].'>
              </div>
              <div class="col-md-6">
                  <label>Lugar</label>
                  <input type="text" id="txt_lugar" class="form-control">
              </div>
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
              <div class="col-md-12">
                <label>Precio</label>
                <input type="text" id="txt_prec" class="form-control">
              </div>
              <div class="col-md-12">
                  <textarea rows="10" class="form-control">'.$response_desti[2].'</textarea> 
              </div>
            </div>
           </div>
          </div>';
        }
        if(isset($response_lugar)){
          if(is_array($response_lugar[0])){
           foreach($response_lugar as $key=>$val){
            $var[] = '
            <div class="row">
             <div class="panel panel-default">
              <div class="panel-heading">
               <a href="#" class="btn btn-danger" style="margin-left:0px;"><span class="glyphicon glyphicon-remove"></span></a>
              </div>
              <div class="panel-body">
                <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">
                  <img class="thumbnail" style="width:400px;height:auto;" src="img/'.$val[4].'"/>
                </div>    
                <div class="col-md-7 col-sm-7 col-xs-12 col-lg-7">
                  <input type="text" placeholder="Titulo" class="form-control" value='.$val[1].'>
                  <input type="text" placeholder="Sub titulo" class="form-control" value='.$val[2].'>
                  <textarea  rows="10" class="form-control">
                    '.$val[3].'
                  </textarea>
                </div>
              </div>
             </div>
            </div>';
           }
          }else{
             $var = '
            <div class="col-md-12">
              <div class="col-md-4">
               <img class="thumbnail"  style="width:400px;height:auto;" src="img/'.$response_lugar[4].'"/>
              </div>
              <div class="col-md-8">
               <h2 class="text-primary" style="margin-top:0;">
                <input type="text" class="form-control" value='.$response_lugar[1].'>
               </h2>
               <h3 class="text-info ">
                <input type="text" class="form-control" value='.$response_lugar[2].'>
               </h3>
                
                 <textarea rows="10" class="form-control">
                 '.$response_lugar[3].'
                </textarea>

              </div>
            </div>';
          }
        }
      }


    ?>
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
 <div class="container">
	
		<div class="col-md-12">
		  <?php	
       if(isset($cabecera)){
        echo $cabecera;
       }
			?>
		</div>


	<div class="row">	
		  <div class="row">
        <div class="col-md-4 col-md-offset-8">
         <a href="#" id="add_destin" class="btn btn-success">Agregar otro subdestino</a>
        </div>
       
      </div>
		  
			 <div class="panel panel-default">
				
				<div id="contenido" class="panel-body">
					<div class="col-md-12">
            <div id="destin_new"></div>
            <?php 
             if(isset($var)){
              if(count($var) > 1){
               foreach($var as $val){
                echo $val; 
               }
              }else{
                echo $var;
              }
             }
            ?>
            
          </div>
				</div>
			 </div>
		 
		
	</div>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/fileinput.min.js"></script>
<script src="js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>

<script src="js/btn_out_session.js"></script>

<script type="text/javascript">
  $(function(){
    
    $("#add_destin").click(function(event){
      event.preventDefault();
      $("#input-id").fileinput();
 
// with plugin options
    $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
      var x = 
        '<div class="row">\
         <div class="panel panel-default">\
          <div class="panel-heading">\
            <a href="#" class="btn btn-danger" style="margin-left:0px;"><span class="glyphicon glyphicon-remove"></span></a>\
          </div>\
          <div class="panel-body">\
           <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">\
           <label class="control-label">Seleccionar Foto</label>\
           <input id="input-id" type="file" class="file" data-preview-file-type="text">\
           </div>\
           <div class="col-md-7 col-sm-7 col-xs-12 col-lg-7">\
             <input type="text" placeholder="Titulo" class="form-control" >\
             <input type="text" placeholder="Sub titulo" class="form-control" >\
             <textarea  rows="10" class="form-control"></textarea>\
           </div>\
          </div>\
         </div>';
      $(x).appendTo($("#destin_new"));
    });

 
});
  $(window).load(function() {
  
});

</script>