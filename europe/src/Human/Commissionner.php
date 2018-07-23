<?php

namespace Human;

class Commissionner extends Human
{
    private $workAddress;
    private $bodyguard;

    public function getWorkAdress() : string
    {
        return $this->workAddress;
    }


    public function getBodyGuard() :?Bodyguard
    {
        return $this->bodyguard;
        
    }
    public function setWorkAddress(string $address)
    {
        $this->address = $address;
        return $this;
    }
    public function setBodyGuard(Bodyguard $bodyguard)
    {
        $this->bodyguard = $bodyguard;
        return $this;
    }


    /* public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $commissionner = new Commissionner();
        $commissionner->setFirstname((string)$definition['firstname'] ?? '')
            ->setLastnae($definition['lastname'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setBirthdate($definition['birthdate'] ?? '')
            ->setSignificantOther($definition['significantOther'] ?? '')
            ->setAddress($definition['address'] ?? '')
            ->setWork($definition['work'] ?? '')
            ->setWorkAddress($definition['workAddress'] ?? '')
            ->setBodyGuard(Bodyguard::fromArray($definition['bodyguard'] ?? []));
           // ->setEye(Eye::fromArray($definition['eye'] ?? []))
            //->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $bodyguard;
    } */

}



?>
