$(function(){
   $("#btn_desti").click(function(){
   	 $("#contenido").html("");
     $("#contenido").load("template/agregar_destinos.html");
   });

   $("#btn_list_paque").click(function(){
   //	 $("#contenido").html("");
   	 $("#contenido").load("template/listar_destino.html");

   	 $.ajax({
   	 	dataType:"json",
   	 	type:"POST",
   	 	url:"controller/Recibe_by_ajax.php",
   	 	data:{"listar":"ok"},
   	 	success:function(data){
   	   //  var data = $.parseJSON(data);
   	 	 $.each(data,function(index,value){
   	 	  var data_ = '<tr id='+value[0]+'><td>'+value[1]+'</td>\
    		    		<td>'+value[2]+'</td>\
    		    		<td>'+value[3]+'</td>\
    		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#" title="Edit"><button id='+value[0]+' class="btn btn-success btn-xs btn_ver"  data-title="Edit" data-toggle="modal" data-target="#ver"><span class="glyphicon glyphicon-zoom-in"></span></button></p></td>\
    		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#myModal" title="Edit"><button id='+value[0]+' class="btn btn-primary btn-xs btn_modifi" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>\
   	 		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#myModa2" title="Delete"><button id='+value[0]+' class="btn btn-danger btn-xs btn_delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
    		 		  </tr>';
    	  $(data_).appendTo($("#table_lista"));
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

   // id del destino creado
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
         data = $.parseJSON(data);
         id_destino = data.last_id;
        }
    });
   }); 

   $(document).on('click',"#btn_save2",function(){
   	var title = $("#txt_title2").val();
   	var subtitle = $("#txt_subtitle2").val();
   	var descrip = $("#txt_descrip2").val();
   	var form = new FormData();
   	var file_des = $('#inp_file2')[0].files;   	
   	form.append('id',id_destino);
   	form.append("file2", file_des[0]);
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

   // al darle click en el boton con forma de +, direcciona a la web
   // boton ver
   $(document).on('click',".btn_ver",function(){
     var id_ver = $(this).attr('id');
      $(location).attr('href','destinos.php?destinos='+id_ver); 
   });
   var id;
   $("#btn_eliminate").click(function(){
   	  $.ajax({
     	dataType:"json",
     	type:"post",
     	url:"controller/Recibe_by_ajax.php",
     	data:{"eliminate":id},
     	sucess:function(data){
     	},
     	error: function (xhr, status) {
            alert(status);
        }
      }).done(function(data){
      	 if(data.success === true){
           $('#'+id).slideToggle("slow");
     	 }else{
     	 	alert("incorrecto");
     	 }
      
      });
   });
   // boton modificar
   $(document).on('click',".btn_modifi",function(){
   	 var id_modi = $(this).attr('id');
   	 $.ajax({
   	 	dataType:"json",
   	 	type:"post",
   	 	url:"controller/Recibe_by_ajax.php",
   	 	data:{"id_destino":id_modi},
   	 	success:function(){
   	 		$("#slt_pai").val("");
   	 		$("#txt_lugar").val("");
   	 		$("#txt_area").val("");
   	 		$("#ïmg1").attr('src',"");
   	 		$("#ïmg2").attr('src',"");
   	 	},
   	 	before:function(){
   	 		$("#slt_pai").val("");
   	 		$("#txt_lugar").val("");
   	 		$("#txt_area").val("");
   	 		$("#ïmg1").attr('src',"");
   	 		$("#ïmg2").attr('src',"");
   	 	}
   	 }).done(function(data){
   	 	$("#slt_pai").val("");
   	 	$("#txt_lugar").val("");
   	 	$("#txt_area").val("");
   	 	$("#ïmg1").attr('src',"");
   	 	$("#ïmg2").attr('src',"");
   	 	data = data.success;
   	 	$("#slt_pai").val(data[0]);
   	 	$("#txt_lugar").val(data[1]);
   	 	$("#txt_area").val(data[2]);
   	 	$("#ïmg1").attr('src',"../logistica/img/"+data[3]);
   	 	if(data[4] != ""){
   	 	 $("#ïmg2").attr('src',"../logistica/img/"+data[4]);
   	    }
   	 });
   });

   //boton eliminar
   $(document).on('click',".btn_delete",function(){
     id = $(this).attr('id');
   });
 });