<?php

namespace Bundle\LocatorBundle\Form;

use Symfony\Components\Validator\Constraints;
use Symfony\Components\Validator\Mapping\ClassMetadata;

class LocatorForm
{

    public $msisdn;

    public function getMsisdn()
    {
        return $this->msisdn;
    }

    public function setMsisdn($msisdn)
    {
        $this->msisdn = $msisdn;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('msisdn', new Constraints\NotBlank());
        $metadata->addPropertyConstraint('msisdn', new Constraints\Regex(array('pattern' => "^88017\d{8}$^", 'message' => 'This is not a valid GP number')));
    }

}