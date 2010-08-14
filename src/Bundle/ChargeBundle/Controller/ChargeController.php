<?php

namespace Bundle\ChargeBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;
use Symfony\Components\Form\Form;
use Bundle\ChargeBundle\Form\DonateForm;
use Bundle\ChargeBundle\Model\Charge;

class ChargeController extends Controller
{

    public function indexAction()
    {
        $charge = false;
        $donateForm = new DonateForm();
        $form = new Form('donateForm', $donateForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('registrationID'));
        $form->add(new \Symfony\Components\Form\PasswordField('password'));
        $form->add(new \Symfony\Components\Form\TextField('msisdn'));
        $form->add(new \Symfony\Components\Form\TextField('amount'));
        $form->add(new \Symfony\Components\Form\TextareaField('msgContent'));

        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('donateForm'));

            if ($form->isValid()) {
                $chargeClient = new Charge();
                $charge = $chargeClient->chargeCustomer($this->getRequest()->request->get('donateForm'));
            }
        }

        return $this->render('ChargeBundle:Charge:index', array('form' => $form, 'charge' => $charge));
    }

}
