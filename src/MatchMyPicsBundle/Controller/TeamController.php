<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Team controller.
 *
 */
class TeamController extends Controller
{
    /**
     * Finds and displays a team entity.
     *
     */
    public function showAction(Team $team)
    {
        $deleteForm = $this->createDeleteForm($team);

        return $this->render('@MatchMyPics/admin/showTeam.html.twig', array(
            'team' => $team,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a team entity.
     *
     */
    public function deleteAction(Request $request, Team $team)
    {
        $form = $this->createDeleteForm($team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($team);
            $em->flush();
        }

        return $this->redirectToRoute('match_my_pics_sommaire_team');
    }

    /**
     * Creates a form to delete a team entity.
     *
     * @param Team $team The team entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Team $team)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('match_my_pics_team_delete', array('id' => $team->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    public function redirectAction()
    {
        return $this->render('@MatchMyPics/admin/redirectionAddTeam.html.twig');
    }
}
