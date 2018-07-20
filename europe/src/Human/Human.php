<?php

namespace Human;

class Human implements HumanInterface
{
    private $firstname;
    private $lastname;
    private $gender;
    private $birthdate;
    private $significantOther;
    private $address;
    private $work;



    private static $allowedGender = ['m', 'f', 'o'];
    public function getFirstname() : string
    {
        return $this->firstname;
    }

    public function getLastname() : string
    {
        return $this->lastname;
    }

    public function getGender() : string
    {
        return $this->gender;
    }

    public function getBirthdate() : date
    {
        return $this->birthdate;
    }

    public function getSignificantOther() : string
    {
        return $this->significantOther;
    }
    public function getAddress() : string
    {
        return $this->address;
    }
    public function getWork() : string
    {
        return $this->work;
    }


    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function setLastname(string $lastname)
    {
        $this->lasttname = $lasttname;
        return $this;
    }

    public function setGender(string $gender)
    {
        if (!in_array($gender, self::$allowedGender)) {
            throw new \RuntimeException('Gender is not allowed');
        }
        
        $this->gender = $gender;
        return $this;
    }
    public function setBirthdate($birthdate) : date
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function setSignificantOther($significantOther)
    {
        $this->significantOther = $significantOther;
        return $this;
        
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
       
    }
    public function setWork($work)
    {
        $this->work = $work;
        return $this;
       
    }

    public static function fromArray(array $definition)
    {
        $logger2 = \Logger::getInstance();
        $logger2->log('2');
        $human = new Human();
        $human->setFirstname((string)$definition['firstname'] ?? '')
            ->setLastnae($definition['lastname'] ?? '')
            ->setGender($definition['gender'] ?? '')
            ->setBirthdate($definition['birthdate'] ?? '')
            ->setSignificantOther($definition['significantOther'] ?? '')
            ->setAddress($definition['address'] ?? '')
            ->setWork($definition['work'] ?? '');
           // ->setEye(Eye::fromArray($definition['eye'] ?? []))
            //->setHair(Hair::fromArray($definition['hair'] ?? []));
        
        return $human;
    }
}

