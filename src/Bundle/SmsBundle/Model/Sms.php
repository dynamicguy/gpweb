<?php

namespace Bundle\SmsBundle\Model;

use Zend\Soap\Client;

class Sms
{

    private $_wsdlUri = 'http://gpweb.dynamicguy.com/bundles/sms/wsdl/SMS.wsdl';
    protected $_client;

    public function __construct()
    {
        $this->_client = new Client($this->_wsdlUri);
    }

    public function sendSms($params)
    {

        $config['registrationID'] = "ferdous";
        $config['password'] = "owey my password!";
        $config['sourceMsisdn'] = '8801711241879';
        $config['destinationMsisdn'] = '8801717253511';
        $config['smsPort'] = 7424;
        $config['msgType'] = 4;
        $config['charge'] = 0.00;
        $config['chargedParty'] = '8801711241879';
        $config['contentArea'] = 'gpgp_psms';
        $config['msgContent'] = 'Hello daredevil is knocking at your door via GP API!';

        $options = array_merge( $config, $params );

        return $this->_client->sendSMS(array("SendSMSRequest" => $options));
    }
}
