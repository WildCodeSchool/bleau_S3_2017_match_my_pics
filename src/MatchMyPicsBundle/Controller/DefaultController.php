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
        // Connexion base de données
        // $bdd = new PDO('host:localhost; dbname: wcs-3_matchmypics; user:root; mdp:root');
        $em = $this->getDoctrine()->getManager();

        // Requete BDD
        // $challenges = $bdd->query('SELECT * FROM challenge');
        $challenges = $em->getRepository('MatchMyPicsBundle:Challenge')->findAll();

        return $this->render('@MatchMyPics/user/challenges.html.twig', array(
            'challenges' => $challenges,
            ));
    }

    public function showChallengeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $challenge = $em->getRepository('MatchMyPicsBundle:Challenge')->findOneById($id);

        return $this->render('@MatchMyPics/user/show_challenge.html.twig', array(
            'challenge' => $challenge
        ));
    }

    public function indiceAction()
    {
        return $this->render('@MatchMyPics/user/indice.html.twig');
    }

    public function solutionAction()
    {
        return $this->render('@MatchMyPics/user/solution.html.twig');
    }

    public function sommaireAdminAction()
    {
        return $this->render('@MatchMyPics/admin/new_session.html.twig');
    }
}
