<?php

namespace Bundle\MmsBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class MmsForm
{

    public $destinationMsisdn;
    public $msgContent;
    public $msgSubject;
    public $msgBody;

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

    public function getMsgSubject()
    {
        return $this->msgSubject;
    }

    public function setMsgSubject($msgSubject)
    {
        $this->msgSubject = $msgSubject;
    }

    public function getMsgBody()
    {
        return $this->msgBody;
    }

    public function setMsgBody($msgBody)
    {
        $this->msgBody = $msgBody;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\Regex(array('pattern' => "^88017\d{8}$^", 'message' => 'This is not a valid GP number')));
        $metadata->addPropertyConstraint('destinationMsisdn', new Constraints\AssertType('numeric'));
        $metadata->addPropertyConstraint('msgSubject', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('msgBody', new Constraints\NotBlank());
    }

}