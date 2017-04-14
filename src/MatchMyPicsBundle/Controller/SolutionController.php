<?php

namespace MatchMyPicsBundle\Controller;

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
     * Lists all solution entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $solutions = $em->getRepository('MatchMyPicsBundle:Solution')->findAll();

        return $this->render('solution/index.html.twig', array(
            'solutions' => $solutions,
        ));
    }

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
            $em->persist($solution);
            $em->flush();

            return $this->redirectToRoute('solution_show', array('id' => $solution->getId()));
        }

        return $this->render('@MatchMyPics/user/solution.html.twig', array(
            'solution' => $solution,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a solution entity.
     *
     */
    public function showAction(Solution $solution)
    {
        $deleteForm = $this->createDeleteForm($solution);

        return $this->render('solution/show.html.twig', array(
            'solution' => $solution,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing solution entity.
     *
     */
    public function editAction(Request $request, Solution $solution)
    {
        $deleteForm = $this->createDeleteForm($solution);
        $editForm = $this->createForm('MatchMyPicsBundle\Form\SolutionType', $solution);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('solution_edit', array('id' => $solution->getId()));
        }

        return $this->render('solution/edit.html.twig', array(
            'solution' => $solution,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a solution entity.
     *
     */
    public function deleteAction(Request $request, Solution $solution)
    {
        $form = $this->createDeleteForm($solution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($solution);
            $em->flush();
        }

        return $this->redirectToRoute('solution_index');
    }

    /**
     * Creates a form to delete a solution entity.
     *
     * @param Solution $solution The solution entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Solution $solution)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('solution_delete', array('id' => $solution->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
