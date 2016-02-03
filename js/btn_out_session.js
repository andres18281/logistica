
     $(function(){
        $("#log_out").click(function(){
              $.ajax({
                type:"POST",
                url:"controller/session_destroy.php",
                data:{"session":"destroy"},
                dataType:'json',
                success:function(dato){
                   window.location.reload();
                }
              }).done(function(){
                window.location.reload();
              });    
        });
    });
     
    