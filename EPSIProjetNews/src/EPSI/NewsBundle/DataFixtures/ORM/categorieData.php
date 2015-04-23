<?php

namespace EPSI\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\NewsBundle\Entity\categorie;

class categorieData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie_1 = new categorie();
        $categorie_1->setNomCategorie("catégorie1");
        
        $categorie_2 = new categorie();
        $categorie_2->setNomCategorie("catégorie2");
        
        $manager->persist($categorie_1);
        $manager->persist($categorie_2);
        
        $manager->flush();
        
        $this->addReference('categorie_1', $categorie_1);
        $this->addReference('categorie_2', $categorie_2);
    }
    
    public function getOrder() {
        return 2;
    }
}