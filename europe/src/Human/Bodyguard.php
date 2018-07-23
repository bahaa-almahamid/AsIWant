<?php

namespace Human;

class Bodyguard extends Human
{
    private $protect;

    public function getProtect() : string
    {
        return $this->protect;
    }


    public function setProtect(Commissionner $protect)
    {
        $this->protect = $protect;
        return $this;
    }
    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $bodyguard = new Bodyguard();
        $bodyguard->setFirstname((string)$definition['firstname'] ?? '')
            ->setLastnae($definition['lastname'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setBirthdate($definition['birthdate'] ?? '')
            ->setSignificantOther($definition['significantOther'] ?? '')
            ->setAddress($definition['address'] ?? '')
            ->setWork($definition['work'] ?? '')
            ->setProtect($definition['protect'] ?? '');
           // ->setEye(Eye::fromArray($definition['eye'] ?? []))
            //->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $bodyguard;
    }

}



?>
