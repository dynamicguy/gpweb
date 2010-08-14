<?php

namespace Bundle\MmsBundle\Model;

use Zend\Soap\Client;

class Mms
{

    private $_wsdlUri = 'http://gpweb.dynamicguy.com/bundles/mms/wsdl/MMS.wsdl';
    protected $_client;

    public function __construct()
    {
        $this->_client = new Client($this->_wsdlUri);
    }

    public function sendMms($data, $file)
    {
        $config['registrationID'] = "ferdous";
        $config['password'] = "owey my password!";
        $config['sourceMsisdn'] = '8801711241879';
        $config['destinationMsisdn'] = $data['destinationMsisdn'];
        $config['mmsPort'] = 7424;
        $config['charge'] = 0.00;
        $config['chargedParty'] = '8801711241879';
        $config['contentArea'] = 'gpgp_pmms';

        $config['msgSubject'] = $data['msgSubject'];
        $config['msgBody'] = $data['msgBody'];

        $config['contentFileName'] = $file['name']; //
        $config['msgContent'] = $file['tmp_name']; //

        return $this->_client->sendMMS(array("SendMMSRequest" => $config));
    }

}
