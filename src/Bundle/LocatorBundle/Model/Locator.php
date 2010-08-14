<?php

namespace Bundle\LocatorBundle\Model;

use Zend\Soap\Client;

class Locator
{

    private $_wsdlUri = 'http://gpweb.dynamicguy.com/bundles/locator/wsdl/WSLBS.wsdl';

    public function __construct()
    {
        $this->_client = new Client($this->_wsdlUri);
    }

    public function findLocationBy($params)
    {
        $GPInit = new GPInit();
        $GPInit->LBSRequest = new LBSRequest($params['msisdn']);
        return $this->_client->requestLocation($GPInit);
    }

}

class LBSRequest
{

    public $msisdn;

    function __construct($num)
    {
        $this->msisdn = $num;
    }

    public $registrationID = "ferdous";
    public $password = "owey my password!";

}

class GPInit
{

    public $LBSRequest;

}
