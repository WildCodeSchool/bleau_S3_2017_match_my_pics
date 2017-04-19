<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Etat;
use MatchMyPicsBundle\Entity\Solution;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
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
            // Generate a unique name for the file before saving it
            $fileName = uniqid() . '.' . $file->guessExtension();
            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('image_directory'),
                $fileName
            );
            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $solution->getPhoto()->setSources($fileName);
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

}
