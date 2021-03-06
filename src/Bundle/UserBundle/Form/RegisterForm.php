<?php

namespace Bundle\UserBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class RegisterForm
{

    public $login;
    public $password;
    public $firstName;
    public $lastName;
    public $emailAddress;
    public $termsAccepted = false;
    private $gender;

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('login', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('login', new Constraints\MinLength(4));
        $metadata->addPropertyConstraint('password', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('password', new Constraints\MinLength(4));
        $metadata->addPropertyConstraint('emailAddress', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('emailAddress', new Constraints\Email());
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

}