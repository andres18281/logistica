
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
      }else{
         
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
     $("#contenedor_info").css("display","block");   
 	 if(data[0] instanceof Array){
 	   $.each(data,function(key,value){
 	    var x ='<div class="item">\
            <a href="#"><img src="img/'+value[4]+'" class="img-responsive" alt="product 1"></a>\
            <h4><small>'+value[1]+'</small></h4>\
            <p>'+value[3]+'</p>\
           </div>';
        $(x).appendTo($("#carru"));
   	   });
 	 }else{
 	    var x = '<div class="item">\
           <a href="#"><img src="img/'+data[4]+'" class="img-responsive" alt="product 1"></a>\
           <h4><small>'+data[1]+'</small>\
           </h4><p>'+data[3]+'</p>\
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

