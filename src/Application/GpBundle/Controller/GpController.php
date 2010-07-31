<?php

namespace Application\GpBundle\Controller;

use Symfony\Framework\FoundationBundle\Controller;

class GpController extends Controller
{
    public function indexAction($name='ferdous')
    {       
        return $this->render('GpBundle:Gp:index', array());
    }
}
