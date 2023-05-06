<?php
//Futini te dhenat tuaja personale te MySql per lidhje ne databazen qe e keni ne serverin local

class Database {
  private static $instance = null;
  private $connection;
  private $host = 'localhost';
  private $username = 'root';//By default tek te gjithe serverat eshte root
  private $password = '';//By default eshte pa password
  private $database = 'healthinformationsystem';//Emrin e databazes

  private function __construct() {
    $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
    if ($this->connection->connect_error) {
      die("Connection failed: " . $this->connection->connect_error);
    }
  }

  public static function getInstance() {
    if (!self::$instance) {
      self::$instance = new Database();
    }
    return self::$instance;
  }

  public function getConnection() {
    return $this->connection;
  }
}
?>