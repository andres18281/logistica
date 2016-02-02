
     $(function(){
        $("#log_out").click(function(){
              $.ajax({
                type:"POST",
                url:"../logistica/controller/session_destroy.php",
                data:{"session":"destroy"},
                dataType:'json',
                success:function(dato){
                   window.location.reload();
                   window.location.reload();
                   window.reload(true);
                   window.reload(true);
                }
              }).done(function(data){
                window.location.reload();
                window.location.reload();
              });    
        });
    });
     
    