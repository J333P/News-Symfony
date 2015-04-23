<?php

namespace EPSI\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OtherController extends Controller
{
    public function showAction($name){
        return $this->render('EPSINewsBundle:Other:index.html.twig', array('name' => $name));
    }
}

