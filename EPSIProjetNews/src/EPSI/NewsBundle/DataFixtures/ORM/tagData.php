<?php

namespace EPSI\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use EPSI\NewsBundle\Entity\tag;

class tagData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tag_1 = new tag();
        $tag_1->setIntitule("Intituté test tag 1");
        
        $tag_2 = new tag();
        $tag_2->setIntitule("Intitulé test tag 2");
        
        $manager->persist($tag_1);
        $manager->persist($tag_2);
        
        $manager->flush();
        
        $this->addReference('tag_1', $tag_1);
        $this->addReference('tag_2', $tag_2);
    }
    
    public function getOrder() {
        return 1;
    }
}