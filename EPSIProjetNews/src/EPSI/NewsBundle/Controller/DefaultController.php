<?php

namespace EPSI\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    
    public function indexAction()
    {
        $profs = ["Christelle Pierkot", "Jean-Luc Bompard", "Pierre-Yves Goubier"];
        return $this->render('EPSINewsBundle:Default:index.html.twig', array('profs' => $profs));
    }
}
