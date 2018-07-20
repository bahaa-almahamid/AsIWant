<?php

private $day;
private $month;
private $year;



public function getDay(){
  return $this->day;
}
public function getMonth(){
  return $this->month;

}public function getYear(){
  return $this->year;
}


public function setDay($day){
  $this->day = $day;
  return $this;
}
public function setMonth($month){
  $this->month = $month;
  return $this;
}

public function setYear($year){
  $this->year = $year;
  return $this;
}


 ?>
