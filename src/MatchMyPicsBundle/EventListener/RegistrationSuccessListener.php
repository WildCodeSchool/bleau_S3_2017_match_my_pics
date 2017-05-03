<?php

namespace MatchMyPicsBundle\EventListener;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use MatchMyPicsBundle\Services\FileUploader;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * Listener responsible to change the redirection at the end of the password resetting
 */
class RegistrationSuccessListener implements EventSubscriberInterface
{
    private $router;
    private $fileUploader;

    public function __construct(FileUploader $fileUploader, UrlGeneratorInterface $router)
    {
        $this->fileUploader = $fileUploader;
        $this->router = $router;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            FOSUserEvents::REGISTRATION_SUCCESS => 'onRegistrationSuccess',
        );
    }

    public function onRegistrationSuccess(FormEvent $event)
    {
        $fomData = $event->getForm()->getData();
        $profilPicture = $fomData->getPhoto();

        $fileName = $this->fileUploader->upload($profilPicture->file);
        $profilPicture->setSources($fileName);
        $profilPicture->setAlt($fomData->getName());

        $url = $this->router->generate('match_my_pics_sommaire_team');
        $event->setResponse(new RedirectResponse($url));

    }
}