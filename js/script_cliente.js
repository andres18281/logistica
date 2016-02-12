
 








 $(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
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


    $("#btn_search").click(function(){
       var valor = $("#focusedInput").val();
       $("#dat_princ").html("");
       $("#carru").html("");
       $("#contenedor_info").css("display","block");
       $.ajax({
        dataType:"json",
        type:"post",
        url:"controller/Menus_clientes.php",
        data:{"words":valor},
        success:function(data){
         if(data[0] instanceof Array){ 
          $.each(data,function(key,value){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+value[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+value[1]+'</h2>\
                                <h4>'+value[4]+'</h4>\
                                <p>'+value[2]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
           $(x).appendTo($("#carru"));
          });
         }else if(data[3] != "" && data[0] != Array){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+data[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+data[1]+'</h2>\
                                <h4>'+data[4]+'</h4>\
                                <p>'+data[2]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
            $(x).appendTo($("#carru"));
         }
        }
       });
    });
});

$(function(){
 $(".btn_pais_des").click(function(){
        $.ajax({
          dataType:"json",
          type:"post",
          url:"controller/Menus_clientes.php",
          data:{"paises":"all"},
          success:function(data){
            $("#ul_list_pais").html("");
            $.each(data,function(key,value){
             var t = '<li class="letra"><a id='+value[1]+' class="pais bord_redond letra" style="text-align:right" href="#">'+value[0]+'</a></li>';
              $(t).appendTo($("#ul_list_pais"));
            });
          }
        });
   });
  $("#show_destin").click(function(){
    $("#destinos").html("");
     $.ajax({
        dataType:"json",
        type:"post",
        url:"controller/Menus_clientes.php",
        data:{'destinos':"all"}
      }).done(function(data){
         $.each(data,function(key,value){
            var t =  
              '<a id='+value[0]+' class="destin" href="#">\
                <img class="col-xs-12" src="img/'+value[4]+'" alt="">\
                <h3>'+value[2]+'</h3>\
                <div class="clearfix"></div>\
              </a>';
            $(t).appendTo($("#destinos"));
         });
       });
  });
  


 setInterval(function(){
    function mensaje_leido(id){
        $.ajax({
          dataType:"json",
          type:"post",
          url:"controller/Mensajes.php",
          data:{"leido_mensaje":id}
        });
    }  
    $.ajax({
      dataType:"json",
      type:"post",
      url:"controller/Mensajes.php",
      data:{'id_consult':email}
    }).done(function(data){
        
     if(data != false){
        $("#msn_new").trigger( "click" );
       if(data[0] instanceof Array){

         var cant = data.length;
         $("#cant_msn").text(cant);
        $.each(data,function(key,value){
         var id = value[2];
         mensaje_leido(id);
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
         var id = value[3];
         mensaje_leido(id);
         $(recibe).appendTo($("#chat_"));
        });
      }else if(data[0] != ""){  
        $("#cant_msn").text(1);
         var id = data[2];
         mensaje_leido(id);
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

  $(document).on('click','.pais',function(){
     $("#carru").html("");
     $("#dat_princ").html("");
     $("#contenedor_info").css("display","block");
     var id = $(this).attr('id');
     $.ajax({
        dataType:"json",
        type:"POST",
        url:"controller/Menus_clientes.php",
        data:{"destin_pais":id} 
     }).done(function(data){
        console.log(data);
        if(data[0] instanceof Array){
         $.each(data,function(key,value){
          var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+value[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+value[0]+'</h2>\
                                <p>'+value[1]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
          $(x).appendTo($("#carru"));
         });
        }else if(data[0] != ""){
            var x = '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">\
            <div class="well blog">\
                <a href="#">\
                    <div class="row">\
                        <div class="col-xs-12 col-sm-12 col-md-5  col-lg-5">\
                            <div class="image">\
                                <img src="img/'+data[3]+'" alt="">\
                            </div>\
                        </div>\
                        <div class="col-xs-12 col-sm-12 col-md-7  col-lg-6">\
                            <div class="blog-details">\
                                <h2>'+data[0]+'</h2>\
                                <p>'+data[1]+'</p>\
                            </div>\
                        </div>\
                    </div>\
                </a>\
            </div>';
          $(x).appendTo($("#carru"));
        }
     });
    });