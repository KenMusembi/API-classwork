<?php
//refer to refs
namespace DB;

const db_host = "localhost";
const db_name = "musembi";
const db_user = "ken";
const db_password = "";
private $host;
private $db_name;
private $username;
private $password;
private $pdo;
private $iscom;


  class Database {
      public function __construct(){
      $host = self::db_host;
      $db_name = self::db_name;
      $username = self::db_user;
      $password = self::db_password;
      }
      $this->host=$host;
      $this->user=$username;
      $this->password=$password;

      try{
        $this->pdo = new
        \PDO("mysql:host={$this->host};db_name={$this->db_name}",
        $this->user,
        $this->pass);
        echo $e->
      }
  }

?>
