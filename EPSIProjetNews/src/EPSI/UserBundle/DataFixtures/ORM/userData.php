<?php

namespace EPSI\NewsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use EPSI\UserBundle\Entity\user;

class userData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user_1 = new user();
        $user_1->setEmail("test1@test.fr");
        $user_1->setUsername("test1");
        $user_1->setPassword("test");

        $user_2 = new user();
        $user_2->setEmail("trst2@.fr");
        $user_2->setUsername("test2");
        $user_2->setPassword("test");

        $manager->persist($user_1);
        $manager->persist($user_2);

        $manager->flush();

        $this->addReference('test_1', $user_1);
        $this->addReference('test_2', $user_2);
    }
    
    public function getOrder() {
        return 3;
    }
}