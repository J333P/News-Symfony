<?php

namespace EPSI\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EPSIUserBundle:Default:index.html.twig', array('name' => $name));
    }
}
