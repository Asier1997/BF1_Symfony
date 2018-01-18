<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArmasExplorador;
use AppBundle\Form\ArmasExploradorType;

/**
 * ArmasExplorador controller.
 *
 * @Route("/armasexplorador")
 */
class ArmasExploradorController extends Controller
{
    /**
     * Lists all ArmasExplorador entities.
     *
     * @Route("/", name="armasexplorador_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $armasExploradors = $em->getRepository('AppBundle:ArmasExplorador')->findAll();

        return $this->render('armasexplorador/index.html.twig', array(
            'armasExploradors' => $armasExploradors,
        ));
    }

    /**
     * Creates a new ArmasExplorador entity.
     *
     * @Route("/new", name="armasexplorador_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $armasExplorador = new ArmasExplorador();
        $form = $this->createForm('AppBundle\Form\ArmasExploradorType', $armasExplorador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasExplorador);
            $em->flush();

            return $this->redirectToRoute('armasexplorador_show', array('id' => $armasExplorador->getId()));
        }

        return $this->render('armasexplorador/new.html.twig', array(
            'armasExplorador' => $armasExplorador,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArmasExplorador entity.
     *
     * @Route("/{id}", name="armasexplorador_show")
     * @Method("GET")
     */
    public function showAction(ArmasExplorador $armasExplorador)
    {
        $deleteForm = $this->createDeleteForm($armasExplorador);

        return $this->render('armasexplorador/show.html.twig', array(
            'armasExplorador' => $armasExplorador,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArmasExplorador entity.
     *
     * @Route("/{id}/edit", name="armasexplorador_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArmasExplorador $armasExplorador)
    {
        $deleteForm = $this->createDeleteForm($armasExplorador);
        $editForm = $this->createForm('AppBundle\Form\ArmasExploradorType', $armasExplorador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasExplorador);
            $em->flush();

            return $this->redirectToRoute('armasexplorador_edit', array('id' => $armasExplorador->getId()));
        }

        return $this->render('armasexplorador/edit.html.twig', array(
            'armasExplorador' => $armasExplorador,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArmasExplorador entity.
     *
     * @Route("/{id}", name="armasexplorador_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArmasExplorador $armasExplorador)
    {
        $form = $this->createDeleteForm($armasExplorador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($armasExplorador);
            $em->flush();
        }

        return $this->redirectToRoute('armasexplorador_index');
    }

    /**
     * Creates a form to delete a ArmasExplorador entity.
     *
     * @param ArmasExplorador $armasExplorador The ArmasExplorador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArmasExplorador $armasExplorador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('armasexplorador_delete', array('id' => $armasExplorador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
