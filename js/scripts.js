$(function(){
   $(".btn_desti").click(function(){
   	 $("#contenido").html("");
     $("#contenido").load("template/agregar_destinos.html");
   });

   $(".btn_list_paque").click(function(){
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
   	 		    		<td><p data-placement="top" data-toggle="tooltip" data-toggle="modal" data-target="#myModal3" title="Delete"><button id='+value[0]+' class="btn btn-danger btn-xs btn_delete" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>\
    		 		  </tr>';
    	  $(data_).appendTo($("#table_lista"));
   	 	 });
   	 	}
   	 });
   });
	var id_destino = 0;
   $(document).on('click',".btn_modifi",function(){
   	 id = $(this).attr('id');
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
   	 id = $(this).attr('id');
     $("#myModal3").modal('show');
   });	

   // id del destino creado
   
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
   	$("#txt_title2").val("");
   	$("#txt_subtitle2").val("");
   	$("#txt_descrip2").val("");
   	$('#inp_file2').fileinput('reset');
   
   	$.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data: form,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
           console.log(data);
           form.delete('id');
    	   form.delete('file2');
    	   form.delete('txt_title2');
    	   form.delete('txt_subtitle2');
    	   form.delete('txt_descrip2');
    		$("#txt_title2").val("");
   			$("#txt_subtitle2").val("");
   			$("#txt_descrip2").val("");
   			$('#inp_file2').fileinput('reset');
        }
    }).done(function(data){
    	form.delete('id');
    	form.delete('file2');
    	form.delete('txt_title2');
    	form.delete('txt_subtitle2');
    	form.delete('txt_descrip2');
    	$("#txt_title2").val("");
   		$("#txt_subtitle2").val("");
   		$("#txt_descrip2").val("");
   		$('#inp_file2').fileinput('reset');
   		
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
   	 id_destino = $(this).attr('id');
   	 $.ajax({
   	 	dataType:"json",
   	 	type:"post",
   	 	url:"controller/Recibe_by_ajax.php",
   	 	data:{"id_destino":id_destino},
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
   	 	console.log(data);
   	 	$("#slt_pai").val(data[0]);
   	 	$("#txt_lugar").val(data[1]);
   	 	$("#txt_area").val(data[2]);
   	 	$("#txt_prec").val(data[5]);
   	 	if(data[3] != ""){
   	 	  $("#thumbnail1").css('display','block');
   	 	  $("#btn_dele_foto1").css('display','block');
   	 	  $("#img1").attr('src',"../logistica/img/"+data[3]);
   	 	}else{
   	 	  $("#thumbnail1").css('display','none');
   	 	  $("#btn_dele_foto1").css('display','none');
   	 	}
   	 	if(data[4] != ""){
   	 	 $("#thumbnail2").css('display','block');
   	 	 $("#img2").attr('src',"../logistica/img/"+data[4]);
   	 	 $("#btn_dele_foto2").css('display','block');
   	    }else{
   	     $("#thumbnail2").css('display','none');
   	     $("#btn_dele_foto2").css('display','none');
   	    }
   	 });
   });

   
//myModal3

   // boton de modal modificar
   
   	$(document).on('click',"#btn_dele_foto",function(){
   	  var foto = $("#img1").attr('src');
   	  foto = foto.replace('../logistica/img/',"");
   	  $.ajax({
   	  	dataType:"json",
   	  	type:"post",
   	  	url:"controller/Recibe_by_ajax.php",
   	  	data:{"imgen":foto},
   	  	success:function(){
   	  	}
   	  }).done(function(data){
   	  	if(data.response === true){
   	  	  $("#img1").toggle( "slow");
   	  	}else{

   	  	}
   	  });
   	});
   	$(document).on('click',"#btn_dele_foto2",function(){
   	  var foto = $("#img2").attr('src');
   	  foto = foto.replace('../logistica/img/',"");
   	  $.ajax({
   	  	dataType:"json",
   	  	type:"post",
   	  	url:"controller/Recibe_by_ajax.php",
   	  	data:{"imgen":foto},
   	  	success:function(){
   	  	}
   	  }).done(function(data){
   	  	if(data.response === true){
   	  	  $("#img2").toggle( "slow");
   	  	}else{

   	  	}
   	  });
   	});

   	$("#btn_update_desti").click(function(){
   	  var pais = $("#slt_pai").val();
   	  var lugar = $("#txt_lugar").val();
   	  var precio = $("#txt_prec").val();
   	  var text	= $("#txt_area").val();
   	  var file_data = $('#inp_files_3')[0].files; // for multiple files
   	  var dato = new FormData();
   	  dato.append('id',id_destino);
   	  dato.append('slt_pai',pais);
   	  dato.append('txt_lugar',lugar);
   	  dato.append('txt_prec',precio);
   	  dato.append('txt_area',text);
   	  if(file_data.length > 1){
   	    for(var i = 0;i< file_data.length;i++){
          dato.append("inp_file", file_data[i]);
        }
      }else if(file_data.length > 0 && file_data.length <= 1){
      	dato.append("inp_file", file_data[0]);
      }  
      var other_data = $('#form_update').serializeArray();
      $.ajax({
        url: 'controller/Recibe_by_ajax.php',
        data: dato,
        contentType: false,
        processData: false,
        type: 'POST',
        success: function(data){
         console.log(data);
        }
      }).done(function(data){
        var data = $.parseJSON(data);
      	if(data.respon === true){
      	 $("#myModal").modal('hide');
      	}else if(data.respon === false){
      	 $("#myModal").modal('hide');
      	  alert("algo resulto mal, por favor vuelva y rectifique los datos digitados");
      	}
      });
   	});
 });