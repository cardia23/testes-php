<?php
class Passenger{
  public $name;
  public $age;
  public $seatNumber;

  public function getName(){
    return $this->name;
  }
  public function getAge(){
    return $this->age;
}
public function getSeatNumber(){
  return $this->seatNumber;
}

public function setSeatNumber($seatNumber){
 $this->seatNumber = $seatNumber;
}

public function __construct($name, $age, $seatNumber){
  $this->name = $name;
  $this->age = $age;
  $this->seatNumber = $seatNumber;
}
}

$passagem = new Passenger('João',15,20);
echo $passagem->getName() .'<br>';
echo $passagem->getAge() .'<br>';
echo $passagem->getSeatNumber() .'<br>';

//Alterando assento
$passagem -> setSeatNumber(25);

echo $passagem->getName() .'<br>';
echo $passagem->getAge() .'<br>';
echo $passagem->getSeatNumber() .'<br>';
?>