<?php

namespace MatchMyPicsBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use MatchMyPicsBundle\Entity\Parametre;
use Doctrine\Common\Persistence\ObjectManager;


class LoadParamsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $params = array(
            array(
                'param' => 'Facile',
                'points' => 1250,
                'niveau' => "F",
                'type' => Parametre::CHALENGE_TYPE
            ),
            array(
                'param' => 'Moyen',
                'points' => 3333,
                'niveau' => "FF",
                'type' => Parametre::CHALENGE_TYPE
            ),
            array(
                'param' => 'Difficile',
                'points' => 7950,
                'niveau' => "FFF",
                'type' => Parametre::CHALENGE_TYPE
            ),
            array(
                'param' => 'Malus Facile',
                'points' => 250,
                'niveau' => "Malus Facile",
                'type' => Parametre::INDICE_TYPE
            ),
            array(
                'param' => 'Malus Moyen',
                'points' => 666,
                'niveau' => "Malus Moyen",
                'type' => Parametre::INDICE_TYPE
            ),
            array(
                'param' => 'Malus Difficile',
                'points' => 1590,
                'niveau' => "Malus Difficile",
                'type' => Parametre::INDICE_TYPE
            ),
        );

        foreach ($params as $param){
            $p = new Parametre();
            $p->setNiveau($param['niveau']);
            $p->setParam($param['param']);
            $p->setPoints($param['points']);
            $p->setType($param['type']);
            $manager->persist($p);
        }
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}