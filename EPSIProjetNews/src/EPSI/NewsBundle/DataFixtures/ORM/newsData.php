<?php

namespace EPSI\NewsBundle\DataFixtures\ORM;

use \DateTime;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use EPSI\NewsBundle\Entity\news;

class newsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $news_1 = new news();
        $news_1->setTitre("news 1");
        $news_1->setContenu("Content news 1");
        $date_1 = new \DateTime("2015-03-25");
        $news_1->setDate($date_1);
        $news_1->addTag($this->getReference('tag_1'));
        $news_1->setCategorie($this->getReference('categorie_1'));
        $news_1->setUser($this->getReference('test1'));
        
        $news_2 = new news();
        $news_2->setTitre("news 2");
        $news_2->setContenu("Content news 2");
        $date_2 = new \DateTime("2015-02-01");
        $news_2->setDate($date_2);
        $news_2->addTag($this->getReference('tag_2'));
        $news_2->setCategorie($this->getReference('categorie_2'));
        $news_2->setUser($this->getReference('test2'));
        
        $manager->persist($news_1);
        $manager->persist($news_2);
        
        $manager->flush();
    }
    
    public function getOrder() {
        return 4;
    }
}