<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Etat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $current_user = $this->get('security.token_storage')->getToken()->getUser();

        if ($current_user){
            return $this->redirectToRoute('match_my_pics_rules');
        }
        else{
            return $this->redirectToRoute('fos_user_security_login');
        }
    }

    public function rulesAction()
    {
        return $this->render('@MatchMyPics/user/rules.html.twig');
    }

    public function homeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $teams = $em->getRepository("MatchMyPicsBundle:Team")->findBy(array(), array('score' => 'DESC'));

        return $this->render('@MatchMyPics/user/home.html.twig', array(
            'teams' => $teams,
        ));
    }

    public function challengesAction()
    {
        // Connexion base de données
        // $bdd = new PDO('host:localhost; dbname: wcs-3_matchmypics; user:root; mdp:root');
        $em = $this->getDoctrine()->getManager();

        // Requete BDD
        // $challenges = $bdd->query('SELECT * FROM challenge');
        $challenges = $em->getRepository('MatchMyPicsBundle:Challenge')->findAll();

        $team = $this->get('security.token_storage')->getToken()->getUser();
        $teams = $em->getRepository('MatchMyPicsBundle:Team')->findBy(array(), array(
            'score' => 'DESC'
        ));

        for ($i=0; $i < count($teams); $i++)
        {
            if ($teams[$i]->getId() == $team->getId()){
                $pos = $i + 1;
                break;
            }
        }

        $etatEngage = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(
            array(
                'team' => $team,
                'statut' => Etat::ENGAGE
            ));
        $etatsStandBy = $em->getRepository('MatchMyPicsBundle:Etat')->findBy(
            array(
                'team' => $team,
                'statut' => Etat::STANDBY
            ));
        $etatsValide = $em->getRepository('MatchMyPicsBundle:Etat')->findBy(
            array(
                'team' => $team,
                'statut' => Etat::VALIDATE
            ));

        $allEtats = $em->getRepository('MatchMyPicsBundle:Etat')->findBy(
            array(
                'team' => $team,
            ));

        // On enlève dans le tableau challenge les challenges qui n'ont pas d'état associer à la team en cours
        foreach ($challenges as $key => $challenge) {
            foreach ($allEtats as $etat){
                if ($challenge->getId() == $etat->getChallenge()->getId()){
                    unset($challenges[$key]);
                }
            }
        }

        return $this->render('@MatchMyPics/user/challenges.html.twig',
            array(
                'challengesDispo' => $challenges ,
                'team' => $team,
                'pos' => $pos,
                'allEtats' => $allEtats,
                'etatsValide' => $etatsValide,
                'etatEngage' => $etatEngage,
                'etatsStandBy' => $etatsStandBy
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

        $em->persist($current_user);
        $em->flush();

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

