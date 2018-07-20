<?php

private $date;
private $address;



public function getDate(){
  return $this->date;
}

public function getAddress(){
  return $this->address;
}

public function setDate($date){
  $this->date = $date;
  return $this;
}

public function setAddress($address){
  $this->address = $address;
  return $this;
}


 ?>
