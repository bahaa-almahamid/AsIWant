<?php

namespace Human;

class President extends VicePresident
{
    private $represent;
   

    public function getRepresent() : string
    {
        return $this->represent;
    }

    public function setRepresent($represent)
    {
        $this->represent = $represent;
        return $this;
    }


    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $president = new President();
        $president->setFirstname((string)$definition['firstname'] ?? '')
            ->setLastnae($definition['lastname'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setBirthdate($definition['birthdate'] ?? '')
            ->setSignificantOther($definition['significantOther'] ?? '')
            ->setAddress($definition['address'] ?? '')
            ->setWork($definition['work'] ?? '')
            ->setWorkAddress($definition['workAddress'] ?? '')
            ->setBodyGuard(Bodyguard::fromArray($definition['bodyguard'] ?? []))
            ->setDepartment($definition['department'] ?? '')
            ->setRepresent($definition['represent'] ?? '');
           // ->setEye(Eye::fromArray($definition['eye'] ?? []))
            //->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $president;
    }

}



?>
