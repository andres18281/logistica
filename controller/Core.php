<?php
include_once 'Config.php';
class Core{

    public $dbh; // handle of the db connexion
    private static $instance;

    private function __construct(){
        // building data source name from config
        $dsn = 'pgsql:host=' . Config::read('db.host') .
               ';dbname='    . Config::read('db.basename') .
               ';port='      . Config::read('db.port') .
               ';connect_timeout=15';
        // getting DB user from config                
        $user = Config::read('db.user');
        // getting DB password from config                
        $password = Config::read('db.password');

        $this->dbh = new PDO('mysql:host=localhost;dbname=logistica_', 'root','');
    }

    public static function getInstance(){
        if (!isset(self::$instance))
        {
            $object = __CLASS__;
            self::$instance = new $object;
        }
        return self::$instance;
    }

    // others global functions
}



?>