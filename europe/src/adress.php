<?php


class adress{

  private $street;
  private $zipCode;
  private $city;
  private $country;

  public function getStreet(){
    return $this ->street;
  }
  public function getZipCode(){
    return $this ->zipCode;
  }
  public function getCity(){
    return $this ->city;
  }
  public function getCountry(){
    return $this ->country;
  }

  public function setStreet($street){
    $this->street = $street;
    return $this;
  }
  public function setZipCode($zipCode){
    $this->zipCode = $zipCode;
    return $this;
  }
  public function setCity($city){
    $this->city = $city;
    return $this;
  }
  public function setCountry($country){
    $this->country = $country;
    return $this;
  }


}// class adress



 ?>
