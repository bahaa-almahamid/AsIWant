<?php



class commission implements WorkInterface {


  private $employees;
  private $president;
  private $commissionners;
  private $vicePresident;
  private $pay;



  public function getEmployees(){
    return $this->employees;
  }
  public function getPresident(){
    return $this->president;

  }public function getCommissionners(){
    return $this->commissionners;
  }

  }public function getVice_president(){
    return $this->vicePresident;
  }
  }public function getPay(){
    return $this->pay;
  }



  public function setEmployees($employees){
    $this->employees = $employees;
    return $this;
  }

  public function setPresident($president){
    $this->president = $president;
    return $this;
  }

  public function setCommissionners($commissionners){
    $this->commissionners = $commissionners;
    return $this;
  }

  public function setVicePresident($vicePresident){
    $this->vicePresident = $vicePresident;
    return $this;
  }

  public function setPay($pay){
    $this->pay = $pay;
    return $this;
  }


  public static function fromArray(array $definition)
  {
    $commission = new Commission();
    $commission = ->setPay((int)$definition['pay'] ?? '')
                  ->setEmployees($definition['employees'] ?? '')
                  ->setPresident($definition['president'] ?? '')
                  ->setCommissionners($definition['commissionners'] ?? '')
                  ->setVicePresident($definition['vicePresident'] ?? '')
  }

    return $commission;
}

 ?>
