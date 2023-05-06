<?php


class Database {
  private static $instance = null;
  private $connection;
  private $host = 'localhost';
  private $username = 'root';
  private $password = '';
  private $database = 'healthinformationsystem';

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