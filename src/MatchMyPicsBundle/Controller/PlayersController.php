<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Players;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Player controller.
 *
 */
class PlayersController extends Controller
{
    /**
     * Lists all player entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $players = $em->getRepository('MatchMyPicsBundle:Players')->findAll();

        return $this->render('@MatchMyPics/admin/sommaire_player.html.twig', array(
            'players' => $players,
        ));
    }

    /**
     * Creates a new player entity.
     *
     */
    public function newAction(Request $request)
    {
        $player = new Players();
        $form = $this->createForm('MatchMyPicsBundle\Form\PlayersType', $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($player);
            $em->flush();

            return $this->redirectToRoute('match_my_pics_redirectionAddPlayer');
        }

        return $this->render('@MatchMyPics/admin/addPlayer.html.twig', array(
            'player' => $player,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a player entity.
     *
     */
    public function showAction(Players $player)
    {
        $deleteForm = $this->createDeleteForm($player);

        return $this->render('players/show.html.twig', array(
            'player' => $player,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing player entity.
     *
     */
    public function editAction(Request $request, Players $player)
    {
        $deleteForm = $this->createDeleteForm($player);
        $editForm = $this->createForm('MatchMyPicsBundle\Form\PlayersType', $player);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('players_edit', array('id' => $player->getId()));
        }

        return $this->render('@MatchMyPics/admin/editPlayer.html.twig', array(
            'player' => $player,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a player entity.
     *
     */
    public function deleteAction(Request $request, Players $player)
    {
        $form = $this->createDeleteForm($player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($player);
            $em->flush();
        }

        return $this->redirectToRoute('players_index');
    }

    /**
     * Creates a form to delete a player entity.
     *
     * @param Players $player The player entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Players $player)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('players_delete', array('id' => $player->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function redirectAction()
    {
        return $this->render('@MatchMyPics/admin/redirectionAddPlayer.html.twig');
    }
}
