<?php

namespace MatchMyPicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MatchMyPicsBundle:Default:index.html.twig');
    }
}
