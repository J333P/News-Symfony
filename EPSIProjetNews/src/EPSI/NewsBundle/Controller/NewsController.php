<?php

namespace EPSI\NewsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use EPSI\NewsBundle\Form\FormNewsType;
use EPSI\NewsBundle\Form\FormModifyNewsType;
use EPSI\NewsBundle\Entity\news;
use EPSI\UserBundle\Entity\user;
use EPSI\NewsBundle\Entity\tag;

class NewsController extends Controller
{
    public function getAction()
    { 
        $newsRepo = $this->getDoctrine()->getRepository('EPSINewsBundle:news');
        $newsTab = $newsRepo->getNews();
        return $this->render('EPSINewsBundle:News:getNews.html.twig', array('newstab' => $newsTab));
    }
    
    public function detailAction($id)
    {
        $newsRepo = $this->getDoctrine()->getRepository('EPSINewsBundle:news');
        $news = new \EPSI\NewsBundle\Entity\news();
        $news = $newsRepo->getNewsById($id);
        $news->setDate($news->getDate()->format('d/m/Y'));
        return $this->render('EPSINewsBundle:News:detailNews.html.twig', array('news' => $news));
    }
    
    public function modifyAction()
    {
        $newsRepo = $this->getDoctrine()->getRepository('EPSINewsBundle:news');
        $newsTab = $newsRepo->getNews();
        return $this->render('EPSINewsBundle:News:modifyNews.html.twig', array('newstab' => $newsTab));
    }
    
    public function modifyNewsAction($id)
    {
        $newsRepo = $this->getDoctrine()->getRepository('EPSINewsBundle:news');
        $news = $newsRepo->getNewsById($id);
        
        $form = $this->createForm(new FormModifyNewsType(), $news);
        
        if ($this->get('request')->getMethod() == 'POST'){
            //On récupére les données du formulaire
            $form->bind($this->get('request'));
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $news->setTitre($form["titre"]->getData());
                $news->setContenu($form["contenu"]->getData());
                $news->setDate($form["date"]->getData());
                $news->setCategorie($form["categorie"]->getData());
                $em->persist($news);
                $em->flush();
                echo "<script>location.replace('http://localhost:8000/app_dev.php/news/getnews')</script>";
            }
        }
        return $this->render('EPSINewsBundle:News:modifyNewsForm.html.twig',  array('form'=>$form->createView()));
    }
    
    public function insertAction()
    {
        $form = $this->createForm(new FormNewsType);
        
        if ($this->get('request')->getMethod() == 'POST'){
            //On récupére les données du formulaire
            $form->bind($this->get('request'));
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getManager();
                $new = new news();
                if(null!==$form["newTag"]->getData())
                {
                    $tags = explode("/", $form["newTag"]->getData());
                    foreach ($tags as $tag)
                    {
                        $newTag = new tag();
                        $newTag->setIntitule($tag);
                        $new->addTag($newTag);
                        $em->persist($newTag);
                    }
                }
                foreach($form["tag"]->getData() as $t)
                {
                    $new->addTag($t);
                }
                $new->setTitre($form["titre"]->getData());
                $new->setContenu($form["contenu"]->getData());
                $new->setDate($form["date"]->getData());
                $new->setCategorie($form["categorie"]->getData());
                $userRepo = $this->getDoctrine()->getRepository('EPSIUserBundle:user');
                $user = $userRepo->getUserById($_POST["id_user"]);
                $new->setUser($user);
                $em->persist($new);
                $em->flush();
                echo "<script>location.replace('http://localhost:8000/app_dev.php/news/getnews')</script>";
            }
        }
        
        return $this->render('EPSINewsBundle:News:insertNews.html.twig', array('form'=>$form->createView()));
    }
}


