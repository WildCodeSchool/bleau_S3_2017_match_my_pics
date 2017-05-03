<?php

namespace MatchMyPicsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MatchMyPicsBundle\Entity\Team;


class LoadFirstData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $UserAdmin = new Team();
        $UserAdmin->setUsername("superadmin");
        $UserAdmin->setEmail("superadmin@gmail.com");
        $UserAdmin->setPlainPassword("superadmin");
        $UserAdmin->setSuperAdmin(true);
        $UserAdmin->setEnabled(true);
        $UserAdmin->setPhoto($this->getReference('superadmin'));
        $manager->persist($UserAdmin);

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}