<?php

namespace Bundle\UserBundle\Form;

use Symfony\Components\Form\Form;
use Symfony\Components\Form\TextField;
use Symfony\Components\Form\PasswordField;

class LoginForm extends Form
{

    public function configure()
    {
        $this->add(new TextField('login'));
        $this->add(new PasswordField('password'));
    }
}
