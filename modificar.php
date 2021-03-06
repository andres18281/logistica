+<?php
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
    display: block;
  }
  body{
    background-color: rgba(255, 219, 251, 0.2);

  }



  </style>
  	    <?php
      if(isset($_GET['destinos'])){
        $id_desti = $_GET['destinos'];
        echo '<script> var id_destin = '.$id_desti.';</script>';
        $destino =  new Destinos();
        $lugares = new Lugares();
        $response_desti = $destino->Get_destino($id_desti);
        $response_lugar = $lugares->Get_lugares($id_desti);
        if(isset($response_desti)){
          $cabecera = '
          <div class="row">
            <p></p>
            <div class="panel panel-default">
             <form enctype="multipart/form-data" method="post">
             <div class="panel-body"> 
               <div class="jumbotron" style="background-image: url(img/'.$response_desti[3].'); background-repeat: no-repeat;"></div>
                <div class="row">
                 <div class="col-md-6">
                  <div class="panel panel-default">
                   <div class="panel-body">
                    <label> Actualizar foto</label>
                    <input id="foto_new" type="file" class="file" data-preview-file-type="text">
                   </div>
                  </div>
                 </div>
                 <div class="col-md-6">
                  <div class="panel panel-default">
                    <div class="panel-body"> 
                      <label> Lugar de destino</label>
                      <input type="text" id="inp_dest" class="form-control" placeholder="Destino" value='.$response_desti[1].'>
                    </div>
                  </div>
                 </div>
                </div>
                <div class="row"> 
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <label>Pais</label>
                        <select class="form-control" id="slt_pai">
                          <option></option>
                          <option value="1">COLOMBIA</option>
                          <option value="2">PANAMA</option>
                          <option value="3">EEUU</option>
                          <option value="4">ESPANA</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <label>Precio</label>
                        <input type="text" id="txt_prec" class="form-control" value='.$response_desti[5].'>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
           </div>
           <div id="mostrar_si_upda"></div>
          </div>';
        }
        if(isset($response_lugar)){
          if(is_array($response_lugar[0])){
           foreach($response_lugar as $key=>$val){
            $var[] = ' 
            <div class="row" id="row_'.$val[0].'"> 
             <div class="panel panel-default">
              <div class="panel-heading">
               <a href="#" id='.$val[0].' class="btn btn-danger" style="margin-left:0px;"><span class="glyphicon glyphicon-remove"></span></a>
                <div id="pan_'.$val[0].'"></div>
              </div>
              <div class="panel-body">
               <form enctype="multipart/form-data" method="post">
                <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">
                  <img class="thumbnail" style="width:400px;height:auto;" src="img/'.$val[4].'"/>
                </div>    
                <div class="col-md-7 col-sm-7 col-xs-12 col-lg-7">
                  <input type="text"  id='.$val[0].' placeholder="Titulo" class="form-control title" value='.$val[1].'>
                  <input type="text" id='.$val[0].' placeholder="Sub titulo" class="form-control subtit" value='.$val[2].'>
                  <textarea  id='.$val[0].' rows="10" class="form-control textarea">
                    '.$val[3].'
                  </textarea>
                </div>
               </form>
              </div>
             </div>
            </div>';
           }
          }else if(isset($response_lugar[0])){
             $var = '
            <div class="row" id="row_'.$response_lugar[0].'">
             <form enctype="multipart/form-data" method="post">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <a href="#" id='.$response_lugar[0].' class="btn btn-danger" style="margin-left:0px;"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                <div class="panel-body">
                  <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">
                    <img class="thumbnail"  style="width:400px;height:auto;" src="img/'.$response_lugar[4].'"/>
                  </div>
                  <div class="col-md-7 col-sm-7 col-xs-12 col-lg-7">
                    <input type="text" id='.$response_lugar[0].' class="form-control title" value='.$response_lugar[1].'>
                    <input type="text"  id='.$response_lugar[0].' class="form-control titulo" value='.$response_lugar[2].'>             
                    <textarea rows="10" id='.$response_lugar[0].' class="form-control textarea">
                      '.$response_lugar[3].'
                    </textarea>
                  </div>
                </div>  
              </div>
             </form>
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
             if(isset($var) ){
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
      <div class="col-md-4 col-md-offset-8" style="margin-bottom: 20px;">
        <button id="btn_actualizar" class="btn btn-success btn-block">Actualizacion</button>
      </div> 
      <div class="container">
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
    var cont_new_panel = 0;
    $("#add_destin").click(function(event){
      event.preventDefault();
      $("#input-id").fileinput();
      cont_new_panel++;
// with plugin options
    $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
      var x = 
        '<div class="row new_vent" >\
         <div class="panel panel-default">\
          <div class="panel-heading">\
            <a href="#" class="btn btn-danger btn_delete " style="margin-left:0px;"><span class="glyphicon glyphicon-remove"></span></a>\
            <div id="pan_new_'+cont_new_panel+'"></div>\
          </div>\
          <div class="panel-body">\
           <form enctype="multipart/form-data" method="post">\
            <div class="col-md-5 col-sm-5 col-xs-12 col-lg-5">\
              <label class="control-label">Seleccionar Foto</label>\
              <input id="input-id_'+cont_new_panel+'" type="file" class="file_new" data-preview-file-type="text">\
            </div>\
            <div class="col-md-7 col-sm-7 col-xs-12 col-lg-7">\
             <input type="text" placeholder="Titulo" class="form-control titu_new">\
             <input type="text" placeholder="Sub titulo" class="form-control subti_new" >\
             <textarea  rows="10" class="form-control text_new"></textarea>\
            </div>\
           </form>\
          </div>\
         </div>';
      $(x).appendTo($("#destin_new")); 
    });
});
  $(document).on('click',".btn-danger",function(event){
    event.preventDefault();
    var id = $(this).attr('id');
    var form = new FormData();
    form.append("delete_subdestino",id);
    $.ajax({
      contentType:false,
      processData: false,
      type:"post",
      url:"controller/Recibe_by_ajax.php",
      data:form,
    }).done(function(data){
      console.log(data);
      if(data.exito != ""){
        $('#row_'+id).slideToggle("slow");
      }
    });
  });

  $("#btn_actualizar").click(function(event){
    event.preventDefault();
    var new_info_cant = $(".new_vent").length; 
    var destin = $("#inp_dest").val();
    var pais   = $("#slt_pai").val();
    var preci  = $("#txt_prec").val();
    var texto  = $("#textprinc").val();
    var foto   = $("#foto_new")[0].files[0];
    var form_up = new FormData();
    form_up.append("id",id_destin);
    form_up.append("txt_lugar",destin);
    form_up.append("slt_pai",pais);
    form_up.append("txt_prec",preci);
    form_up.append("txt_area",texto);
    form_up.append("inp_file",foto);
    $.ajax({
      type:"post",
      contentType: false,
      processData: false,
      url:"controller/Recibe_by_ajax.php",     
      data:form_up,
      success:function(data){
        console.log(data);
        if(data.respon == true){
          $('<div class="alert alert-success" role="alert">Actualizacion con exito</div>').appendTo($("#mostrar_si_upda"));
        }else{
          $('<div class="alert alert-danger" role="alert">Fallo en la actualizacion</div>').appendTo($("#mostrar_si_upda"));
        }
      }
    });

    // los subdestinos nuevos //
    var form   = new FormData();
    for(var j = 0;j < new_info_cant;j++){
      var title = $(".titu_new").eq(j).val();
      var subti_new =  $(".subti_new").eq(j).val();
      var text_new = $(".text_new").eq(j).val();
      var foto = $('.file_new')[j].files[0]; 
      form.append("title_new",title); 
      form.append("subti_new",subti_new); 
      form.append("text_new",text_new);
      form.append("foto",foto);
      form.append("id",id_destin);
      
      $.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data:form,
        contentType: false,
        processData: false,
        type:"post",
        success:function(data){
          console.log(data);
          if(data.exito != null){
           $('<div class="alert alert-success" role="alert">Datos Insertados  con exito</div>').appendTo($("#pan_new_"+id));
          }else{
            $('<div class="alert alert-danger" role="alert">Problemas al insertar actualizacion</div>').appendTo($("#pan_new_"+id));
          }
        }
      });
    }

    // subdestinos existentes para actualizar
    var cant = $(".textarea").length;
    for(var i = 0;i < cant;i++){
      var id = $(".title").eq(i).attr('id');
      var title = $(".title").eq(i).val();
      var subti = $(".subtit").eq(i).val();
      var text = $(".textarea").eq(i).val();
      var fd = new FormData();
      fd.append("title",title); 
      fd.append("subtitulo",subti);
      fd.append("texto",text);
      fd.append("id",id);
      $.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data:fd,
        contentType: false,
        processData: false,
        type:"post",
        success:function(data){  
          if(data.exito != null){
           $('<div class="alert alert-success" role="alert">Datos actualizado con exito</div>').appendTo($("#pan_"+id));
          }else{
            $('<div class="alert alert-danger" role="alert">Problemas en la actualizacion</div>').appendTo($("#pan_"+id));
          }
        }
      });
    }
  });


  $(document).on('click',".btn_delete",function(){
   var panel = $(this).index(".btn_delete");
   $(".new_vent").eq(panel).slideToggle( "slow");
   $(".new_vent").eq(panel).remove();
  });  
</script>