<?php

namespace MatchMyPicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MatchMyPics/user/index.html.twig');
    }

    public function rulesAction()
    {
        return $this->render('@MatchMyPics/user/rules.html.twig');
    }

    public function homeAction()
    {
        return $this->render('@MatchMyPics/user/home.html.twig');
    }
}
