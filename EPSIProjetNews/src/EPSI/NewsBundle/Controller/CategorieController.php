<?php

namespace EPSI\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPSI\NewsBundle\Form\FormCategorieType;
use EPSI\NewsBundle\Entity\categorie;

class CategorieController extends Controller
{
    public function insertAction()
    {
        $form = $this->createForm(new FormCategorieType);
        
        if ($this->get('request')->getMethod() == 'POST'){
            //On récupére les données du formulaire
            $form->bind($this->get('request'));
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $newCatategorie = new categorie();
                $newCatategorie->setNomCategorie($form['nomCategorie']->getData());
                $em->persist($newCatategorie);
                $em->flush();
                echo "<script>location.replace('http://localhost:8000/app_dev.php/news/insertnews')</script>";
            }
        }
        
        return $this->render('EPSINewsBundle:Categorie:insertCategorie.html.twig', array('form'=>$form->createView()));
    }
}
