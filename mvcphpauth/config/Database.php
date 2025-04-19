<?php
class Database {
    private static $instance = null;
    public $conn;

    private $host = "localhost";
    private $user = "belajar";
    private $pass = "belajar";
    private $dbname = "mvcphp";

    public function __construct() {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", 
                              $this->user, $this->pass, 
                              [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
