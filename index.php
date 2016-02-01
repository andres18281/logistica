  <?php 
    include_once('controller/login.php'); 
    if(!isset($_SESSION)){
     session_start(); 
    }
    if(!isset($_SESSION["perfil"])){
   		header("location: login.php");
    }
    if($_SESSION["perfil"] == "qwqwsa123423@!"){ // de operaciones
      header("location: configuracion.php");
    }elseif($_SESSION["perfil"] == "asdqweasd5654184"){ // de operaciones
      header("location: clientes.php");
    }else{
      header("location: login.php");
    }
              
 /* if(isset($_POST['go'])){
       echo $_POST['users_id'];
        $users = $_POST["user"];
        $password = $_POST["passwo"];
        $logueo = new Login($users,$password); 
        $logueo->loguearse();     
  }*/
  
?>     
