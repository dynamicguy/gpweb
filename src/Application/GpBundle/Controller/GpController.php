<?php

namespace Application\GpBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

/**
 * GP Main Controller
 *
 * @package     GPWeb
 * @subpackage  GpBundle
 * @category    Controller
 * @author      Nurul Ferdous <nurul.ferdous@gmail.com>
 */
class GpController extends Controller
{

    public function indexAction()
    {
        $identity = $this->getUser()->getAttribute('identity');
        
        return $this->render('GpBundle:Gp:index', array('identity' => $identity));
    }

}
