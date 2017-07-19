<?php

namespace MatchMyPicsBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use MatchMyPicsBundle\Entity\Photo;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;


class LoadPictureData extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager){
        $superAdminPicture = new Photo();

        copy(__DIR__ . '/../../Resources/public/pictures/superadmin.png', __DIR__ . '/../../../../web/image_upload/superadmin.png');
	    $file = new File(__DIR__ . '/../../../../web/bundles/matchmypics/pictures/superadmin.png');

        $superAdminPicture->setSources('superadmin.png');
        $superAdminPicture->setAlt('super admin');

        $manager->persist($superAdminPicture);
        $manager->flush();

        $this->addReference('superadmin', $superAdminPicture);
    }

    public function getOrder()
    {
        return 2;
    }
}