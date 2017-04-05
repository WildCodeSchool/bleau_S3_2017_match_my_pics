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

    public function challengesAction()
    {
        return $this->render('@MatchMyPics/user/challenges.html.twig');
    }

    public function challenge_xAction()
    {
        return $this->render('@MatchMyPics/user/challenge_x.html.twig');
    }

    public function indiceAction()
    {
        return $this->render('@MatchMyPics/user/indice.html.twig');
    }

    public function solutionAction()
    {
        return $this->render('@MatchMyPics/user/solution.html.twig');
    }

    public function sommaire_AdminAction()
    {
        return $this->render('@MatchMyPics/admin/sommaire_Admin.html.twig');
    }
}

