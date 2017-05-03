<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Etat;
use MatchMyPicsBundle\Entity\Solution;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Solution controller.
 *
 */
class SolutionController extends Controller
{
    /**
     * Creates a new solution entity.
     *
     */
    public function newAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $solution = new Solution();
        $form = $this->createForm('MatchMyPicsBundle\Form\SolutionType', $solution);
        $form->handleRequest($request);
        $challenge = $em->getRepository('MatchMyPicsBundle:Challenge')->findOneById($id);
        $user = $this->get('security.token_storage')->getToken()->getUser();


        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // $file stores the uploaded Photo
            $file = $solution->getPhoto()->file;

            $fileName = $this->get('file_uploader')->upload($file);

            // instead of its contents
            $solution->getPhoto()->setSources($fileName);
            $solution->getPhoto()->setAlt($fileName);
            $solution->setChallenge($challenge);
            $solution->setTeam($user);

            $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(
                array(
                    'team' => $user,
                    'challenge' => $challenge
                ));
            $etat->setStatut(Etat::STANDBY);

            $em->persist($solution);
            $em->flush();

            return $this->redirectToRoute('match_my_pics_redirection');
        }

        return $this->render('@MatchMyPics/user/solution.html.twig', array(
            'solution' => $solution,
            'form' => $form->createView(),
        ));
    }

    public function redirectAction()
    {
        return $this->render('@MatchMyPics/user/redirection.html.twig');
    }

    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $solutions = $em->getRepository('MatchMyPicsBundle:Solution')->findAll();

        return $this->render('@MatchMyPics/admin/validation_challenge.html.twig',
            array(
                'solutions' => $solutions ));
    }

    public function valideSolutionAction($id){
        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('MatchMyPicsBundle:Solution')->findOneBy(array('id' => $id));
        $challenge = $solution->getChallenge();
        $team = $solution->getTeam();

        $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(array(
            'team' => $team,
            'challenge' => $challenge
        ));

        $team->setScore($team->getScore() + $challenge->getParametre()->getPoints());
        $etat->setStatut(Etat::VALIDATE);
        $em->remove($solution);

        $em->flush();
        return $this->redirectToRoute('solution_show');
    }

    public function refuseSolutionAction($id){
        $em = $this->getDoctrine()->getManager();
        $solution = $em->getRepository('MatchMyPicsBundle:Solution')->findOneBy(array('id' => $id));
        $challenge = $solution->getChallenge();
        $team = $solution->getTeam();

        $etat = $em->getRepository('MatchMyPicsBundle:Etat')->findOneBy(array(
            'team' => $team,
            'challenge' => $challenge
        ));

        $em->remove($etat);
        $em->remove($solution);

        $em->flush();

        return $this->redirectToRoute('solution_show');
    }

}
