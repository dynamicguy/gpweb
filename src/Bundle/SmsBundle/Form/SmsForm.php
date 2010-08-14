<?php

namespace Bundle\SmsBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class SmsForm
{

    public $destinationMsisdn;
    public $msgContent;

    public function getDestinationMsisdn()
    {
        return $this->destinationMsisdn;
    }

    public function setDestinationMsisdn($destinationMsisdn)
    {
        $this->destinationMsisdn = $destinationMsisdn;
    }

    public function getMsgContent()
    {
        return $this->msgContent;
    }

    public function setMsgContent($msgContent)
    {
        $this->msgContent = $msgContent;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\Regex(array('pattern' => "^88017\d{8}$^", 'message' => 'This is not a valid GP number')));
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\AssertType('numeric'));
        $metadata->addPropertyConstraint('msgContent', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('msgContent', new Constraints\MaxLength(array('limit' => '140', 'message' => 'Message field allows only 140 characters. Please remove some texts.')));
    }

}