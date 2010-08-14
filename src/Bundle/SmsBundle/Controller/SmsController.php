<?php

namespace Bundle\SmsBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;
use Symfony\Components\Form\Form;
use Bundle\SmsBundle\Form\SmsForm;
use Bundle\SmsBundle\Model\Sms;

/**
 * SMS Controller
 *
 * @package     GPWeb
 * @subpackage  SmsBundle
 * @category    Controller
 * @author      Nurul Ferdous <nurul.ferdous@gmail.com>
 */
class SmsController extends Controller
{

    public function indexAction()
    {
        $smsForm = new SmsForm();

        $form = new Form('smsForm', $smsForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('destinationMsisdn'));
        $form->add(new \Symfony\Components\Form\TextareaField('msgContent'));
        
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('smsForm'));

            if ($form->isValid()) {
                $smsClient = new Sms();
                $status = $smsClient->sendSms($this->getRequest()->request->get('smsForm'));
                if('OK' == $status->SendSMSResponse->status){
                    $this->getUser()->setFlash('success', 'Your SMS has been sent successfully. Your SMS id in our server is: <strong>'.$status->SendSMSResponse->msgID.'</strong>');
                    return $this->redirect($this->generateUrl('smshome'));
                }else{
                    $this->getUser()->setFlash('error', 'Something went wrong! Please try again. May be it\'s Nurul Ferdous\'s or API\'s fault');
                    return $this->redirect($this->generateUrl('smshome'));
                }
            }
        }

        return $this->render('SmsBundle:Sms:send', array('form' => $form));
    }

}
