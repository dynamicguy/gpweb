<?php

namespace Bundle\UserBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class LoginForm
{

    public $login;
    public $password;

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

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('login', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('password', new Constraints\NotBlank());
    }

}
