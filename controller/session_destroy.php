<?php
	if(!isset($_SESSION)){ 
          session_start(); 
    }
	if(isset($_REQUEST['session']) and $_REQUEST['session'] == "destroy"){
		session_destroy();
	}

?>