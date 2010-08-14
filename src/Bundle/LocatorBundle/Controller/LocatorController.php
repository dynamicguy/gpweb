<?php

namespace Bundle\LocatorBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;
use Symfony\Components\Form\Form;
use Bundle\LocatorBundle\Form\LocatorForm;
use Bundle\LocatorBundle\Model\Locator;

class LocatorController extends Controller
{

    public function indexAction()
    {
        $locatorForm = new LocatorForm();
        $location = false;
        $form = new Form('locatorForm', $locatorForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('msisdn'));

        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('locatorForm'));

            if ($form->isValid()) {
                $locatorClient = new Locator();
                $location = $locatorClient->findLocationBy($this->getRequest()->request->get('locatorForm'));
            }
        }

        return $this->render('LocatorBundle:Locator:index', array('form'=>$form, 'location'=>$location));
    }

}
