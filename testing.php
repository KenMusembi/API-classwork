<?php
//classess, objects and constructors
class TellMe{
//properties

//behaviour

//constructor

//method that returns browser details
//
namespace DB;
use \PDO as PDO ;

class Database{
  private $conn;
  private $db;

  public function __construct(){

  }
  public function clsoe(){

  }
}
}

class car{
  //properties or attributes of a car
  public $engine;
  public $model;
  //constructor
  public __construct($engine,$model){
    $this->engine=$engine;
    $this->model=$model;
  }

public function start(){
  echo"choooochoooo";
}

public function move($direction="forward"){
  echo $direction;
}

  $vitz = new car;
  $vitz->start();
  $vitz->move();

$pajero = new car('Mistubishi','2000cc');
echo "{pajero::start()}, i am cruising down the road with a {pajero->model} of a  {pajero->engine}";
}









 ?>
