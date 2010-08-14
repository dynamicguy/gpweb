<?php

namespace Bundle\ChargeBundle\Model;

use Zend\Soap\Client;

class Charge
{

    private $_wsdlUri = 'http://gpweb.dynamicguy.com/bundles/charge/wsdl/charge.wsdl';

    public function __construct()
    {
        $this->_client = new Client($this->_wsdlUri);
    }

    public function chargeCustomer($params)
    {
        $config['registrationID'] = 'ferdous';
        $config['password'] = 'owey my password!';
        $config['msisdn'] = '8801711241879';
        $config['amount'] = 1.00;
        $config['contentArea'] = 'gpgp_gpgp_gpgp';
        $config['contentDesc'] = 'GP Aloashbei Charging Event';
        $config['contentCode'] = "5";
        $config['deliveryCode'] = "08";
        $config['msgContent'] = 'donation';

        $options = array_merge( $config, $params );

        return $this->_client->charge($options);
    }

}
