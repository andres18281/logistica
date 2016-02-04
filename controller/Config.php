<?php
 //include_once 'Core.php';

$sql = 'SELECT * FROM users';

$usuario = 'root';
$contraseña = '';

try {
    $mbd = new PDO('mysql:host=127.0.0.1;dbname=logistica_;port=3307', $usuario, $contraseña);
    foreach($mbd->query('SELECT * FROM users') as $fila) {
        print_r($fila);
    }
    $mbd = null;
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}

?>