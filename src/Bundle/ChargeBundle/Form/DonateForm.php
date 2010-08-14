<?php

namespace Bundle\ChargeBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class DonateForm
{

    public $registrationID;
    public $password;
    public $amount;
    public $msgContent;
    public $msisdn;

    public function getRegistrationID()
    {
        return $this->registrationID;
    }

    public function setRegistrationID($registrationID)
    {
        $this->registrationID = $registrationID;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getMsisdn()
    {
        return $this->msisdn;
    }

    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    public function getMsgContent()
    {
        return $this->msgContent;
    }

    public function setMsgContent($msgContent)
    {
        $this->msgContent = $msgContent;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('registrationID', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('password', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('msisdn', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('msisdn', new Constraints\Regex(array('pattern' => "^88017\d{8}$^", 'message' => 'This is not a valid GP number')));
        $metadata->addPropertyConstraint('amount', new Constraints\NotBlank());
    }

}