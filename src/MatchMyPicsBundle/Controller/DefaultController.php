<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Challenge;
use MatchMyPicsBundle\Entity\Etat;
use MatchMyPicsBundle\Entity\Team;
use MatchMyPicsBundle\Entity\Parametre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@MatchMyPics/user/index.html.twig');
    }

    public function rulesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository("MatchMyPicsBundle:Team")->findAll();
        return $this->render('@MatchMyPics/user/rules.html.twig', array(
            'team' => $teams));

    }

    public function homeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository("MatchMyPicsBundle:Team")->findBy(array(), array('score' => 'DESC'));
        $team= $em->getRepository('MatchMyPicsBundle:Team')->findOneById($id);

        return $this->render('@MatchMyPics/user/home.html.twig', array(
            'teams' => $teams,
            'team' => $team
        ));
    }

    public function challengesAction($id)
    {
        // Connexion base de données
        // $bdd = new PDO('host:localhost; dbname: wcs-3_matchmypics; user:root; mdp:root');
        $em = $this->getDoctrine()->getManager();

        // Requete BDD
        // $challenges = $bdd->query('SELECT * FROM challenge');
        $challenges = $em->getRepository('MatchMyPicsBundle:Challenge')->findAll();
        // TODO:getTeamId
        $team= $em->getRepository('MatchMyPicsBundle:Team')->findOneById($id);

        $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(
            array(
                'team' => $team,
                'statut' => Etat::ENGAGE
            ));

        // soit etat is empty ==> aucun engagement
        // soit etat is not empty ==> engagé

        return $this->render('@MatchMyPics/user/challenges.html.twig',
            array(
                'challenges' => $challenges ,
                'team' => $team,
                'etat' => $etat
            ));

    }


    public function showChallengeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $current_user = $this->get('security.token_storage')->getToken()->getUser();
        $challenge = $em->getRepository('MatchMyPicsBundle:Challenge')->findOneById($id);

        $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(
            array(
                'team' => $current_user,
                'challenge' => $challenge
            ));

        if (!$etat){
            $status = new Etat();
            $status->setStatut(Etat::ENGAGE);
            $status->setTeam($current_user);
            $status->setChallenge($challenge);

            $em->persist($status);
            $em->flush();
        }



        return $this->render('@MatchMyPics/user/show_challenge.html.twig', array(
            'challenge' => $challenge
        ));
    }

    public function abortAction($id){

        $em = $this->getDoctrine()->getManager();
        $current_user = $this->get('security.token_storage')->getToken()->getUser();
        $challenge = $em->getRepository('MatchMyPicsBundle:Challenge')->findOneById($id);

        $abort = $challenge->getParametre()->getPoints();
        $current_user->setScore($current_user->getScore()-$abort);

        $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(
            array(
                'team' => $current_user,
                'challenge' => $challenge));

        $em->remove($etat);
        $em->flush();

        return $this->redirectToRoute('match_my_pics_home',array(
            'id' => $current_user->getId()
        ));


    }

    public function indiceAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $current_user = $this->get('security.token_storage')->getToken()->getUser();
        $challenge = $em->getRepository('MatchMyPicsBundle:Challenge')->findOneById($id);
        $malus = $challenge->getIndice()->getParametre()->getPoints();
        $current_user->setScore($current_user->getScore()-$malus);

        return $this->render('@MatchMyPics/user/indice.html.twig', array(
            'challenge' => $challenge
        ));
    }


    public function sommaireAdminAction()
    {
        return $this->render('@MatchMyPics/admin/sommaire_admin.html.twig');
    }
    public function sommaireTeamAction()
    {

        $em = $this->getDoctrine()->getManager();

        $teams = $em->getRepository('MatchMyPicsBundle:Team')->findAll();

        return $this->render('@MatchMyPics/admin/sommaire_team.html.twig', array(
            'teams' => $teams,
        ));

    }

}

