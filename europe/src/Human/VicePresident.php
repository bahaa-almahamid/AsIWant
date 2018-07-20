<?php

namespace Human;

class VicePresident extends Commissionner
{
    private $department;
   

    public function getDepartment() : string
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }


    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $vicepresident = new VicePresident();
        $vicepresident->setFirstname((string)$definition['firstname'] ?? '')
            ->setLastnae($definition['lastname'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setBirthdate($definition['birthdate'] ?? '')
            ->setSignificantOther($definition['significantOther'] ?? '')
            ->setAddress($definition['address'] ?? '')
            ->setWork($definition['work'] ?? '')
            ->setWorkAddress($definition['workAddress'] ?? '')
            ->setBodyGuard(Bodyguard::fromArray($definition['bodyguard'] ?? []))
            ->setDepartment($definition['department'] ?? '');
           // ->setEye(Eye::fromArray($definition['eye'] ?? []))
            //->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $vicepresident;
    }

}



?>
