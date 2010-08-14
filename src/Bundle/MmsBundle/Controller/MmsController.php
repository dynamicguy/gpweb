<?php

namespace Bundle\MmsBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;
use Symfony\Components\Form\Form;
use Bundle\MmsBundle\Form\MmsForm;
use Bundle\MmsBundle\Model\Mms;

/**
 * MMS Controller
 *
 * @package     GPWeb
 * @subpackage  MmsBundle
 * @category    Controller
 * @author      Nurul Ferdous <nurul.ferdous@gmail.com>
 */
class MmsController extends Controller
{

    public function indexAction()
    {
        $mmsForm = new MmsForm();

        $form = new Form('mmsForm', $mmsForm, $this->container->getValidatorService());
        $form->add(new \Symfony\Components\Form\TextField('destinationMsisdn'));
        $form->add(new \Symfony\Components\Form\TextField('msgSubject'));
        $form->add(new \Symfony\Components\Form\TextareaField('msgBody'));
        $form->add(new \Symfony\Components\Form\HiddenField('msgContent'));
        $status = false;
        if ($this->getRequest()->getMethod() == 'POST') {
            $form->bind($this->getRequest()->request->get('mmsForm'));

            if ($form->isValid()) {
                $mmsClient = new Mms();
                $data = $this->getRequest()->request->get('mmsForm');
                $file = $this->request->files->get('msgContent');
                
                $status = $mmsClient->sendMms($data, $file);
                if ('OK' == $status->SendMMSResponse->status) {
                    $this->getUser()->setFlash('success', 'Your MMS has been sent successfully. Your MMS id in our server is: <strong>' . $status->SendMMSResponse->msgID . '</strong>');
                    return $this->redirect($this->generateUrl('mmshome'));
                } 
            }
        }

        return $this->render('MmsBundle:Mms:index', array('form' => $form, 'status'=>$status));
    }

}
