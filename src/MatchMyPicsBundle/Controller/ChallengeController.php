<?php

namespace MatchMyPicsBundle\Controller;

use MatchMyPicsBundle\Entity\Challenge;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Challenge controller.
 *
 */
class ChallengeController extends Controller
{
    /**
     * Lists all challenge entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $challenges = $em->getRepository('MatchMyPicsBundle:Challenge')->findAll();

        return $this->render('@MatchMyPics/admin/listeChallenge.html.twig', array(
            'challenges' => $challenges,
        ));
    }

    /**
     * Creates a new challenge entity.
     *
     */
    public function newAction(Request $request)
    {
        $challenge = new Challenge();
        $form = $this->createForm('MatchMyPicsBundle\Form\ChallengeType', $challenge);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // $file stores the uploaded Photo
            $file = $challenge->getPhoto()->file;
            $file_indice = $challenge->getIndice()->getPhoto()->file;
            // Generate a unique name for the file before saving it
            $fileName = $this->get('file_uploader')->upload($file);
            $fileNameIndice = $this->get('file_uploader')->upload($file_indice);

            // Update the 'brochure' property to store the PDF file name
            // instead of its contents
            $challenge->getPhoto()->setSources($fileName);
            $challenge->getPhoto()->setAlt($fileName);
            $challenge->getIndice()->getPhoto()->setSources($fileNameIndice);
            $challenge->getIndice()->getPhoto()->setAlt($fileNameIndice);


            // On persist l'objet Challenge
            $em->persist($challenge);

            // Persist l'objet indice du challenge
            //$em->persist($challenge->getIndice());
            // Persist l'objet photo de l'indice du challenge
            //$em->persist($challenge->getIndice()->getPhoto());

            // Persist objet photo du challenge
            //$em->persist($challenge->getPhoto());

            $em->flush();

            return $this->redirectToRoute('challenge_show', array('id' => $challenge->getId()));
        }

        return $this->render('@MatchMyPics/admin/addChallenge.twig', array(
            'challenge' => $challenge,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a challenge entity.
     *
     */
    public function showAction(Challenge $challenge)
    {
        $deleteForm = $this->createDeleteForm($challenge);

        return $this->render('@MatchMyPics/admin/showChallengeCreate.html.twig', array(
            'challenge' => $challenge,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing challenge entity.
     *
     */
    public function editAction(Request $request, Challenge $challenge)
    {
        $deleteForm = $this->createDeleteForm($challenge);
        $editForm = $this->createForm('MatchMyPicsBundle\Form\ChallengeType', $challenge);

        // Modification du formuaire phto afin de rendre le champ non obligatoire lors d'un edit
        $editForm->get('photo')
            ->add('file', FileType::class, array(
                'required' => false
            ));
        $editForm->get('indice')->get('photo')
            ->add('file', FileType::class, array(
                'required' => false
            ));

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            if ($challenge->getPhoto()->file != null){
                unlink($this->getParameter('image_directory') . $challenge->getPhoto()->getSources());
                // $file stores the uploaded Photo
                $file = $challenge->getPhoto()->file;
                // Cal upload service
                $fileName = $this->get('file_uploader')->upload($file);

                $challenge->getPhoto()->setSources($fileName);
                $challenge->getPhoto()->setAlt($fileName);
            }
            if ($challenge->getIndice()->getPhoto()->file != null){
                unlink($this->getParameter('image_directory') . $challenge->getIndice()->getPhoto()->getSources());
                // $file stores the uploaded Photo
                $file_indice = $challenge->getIndice()->getPhoto()->file;
                // Cal upload service
                $fileNameIndice = $this->get('file_uploader')->upload($file_indice);

                $challenge->getIndice()->getPhoto()->setSources($fileNameIndice);
                $challenge->getIndice()->getPhoto()->setAlt($fileNameIndice);
            }

            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('challenge_show', array('id' => $challenge->getId()));
        }


        return $this->render('@MatchMyPics/admin/editChallenge.html.twig', array(
            'challenge' => $challenge,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a challenge entity.
     *
     */
    public function deleteAction(Request $request, Challenge $challenge)
    {
        $form = $this->createDeleteForm($challenge);
        $form->handleRequest($request);
        unlink($this->getParameter('image_directory') . $challenge->getPhoto()->getSources());
        unlink($this->getParameter('image_directory') . $challenge->getIndice()->getPhoto()->getSources());
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($challenge);
            $em->flush($challenge);
        }

        return $this->redirectToRoute('challenge_index');
    }

    /**
     * Creates a form to delete a challenge entity.
     *
     * @param Challenge $challenge The challenge entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Challenge $challenge)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('challenge_delete', array('id' => $challenge->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
