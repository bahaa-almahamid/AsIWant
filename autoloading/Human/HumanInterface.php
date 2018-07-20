<?php 
namespace Human;

interface HumanInterface
{
public function getName() : string;
public function getAge() : int;
public function getGender() : string;
public function getEye() : ?Eye;
public function getHair() : ?Hair;
public function setName(string $name);
public function setAge(int $age);
public function setGender(string $gender);
public function setEye(Eye $eye);
public function setHair(Hair $hair);
public static function fromArray(array $definition);
}