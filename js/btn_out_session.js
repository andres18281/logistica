
     $(function(){
        

        $(".log_out ").click(function(){
              $.ajax({
                type:"get",
                url:"controller/session_destroy.php",
                data:"session=destroy",
                dataType:'html',
                success:function(dato){
                   window.location.reload();
                }
              }).done(function(){
                window.location.reload();
              });    
        });
    });
     
  