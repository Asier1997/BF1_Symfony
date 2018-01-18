<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArmasAsalto;
use AppBundle\Form\ArmasAsaltoType;

/**
 * ArmasAsalto controller.
 *
 * @Route("/armasasalto")
 */
class ArmasAsaltoController extends Controller
{
    /**
     * Lists all ArmasAsalto entities.
     *
     * @Route("/", name="armasasalto_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $armasAsaltos = $em->getRepository('AppBundle:ArmasAsalto')->findAll();

        return $this->render('armasasalto/index.html.twig', array(
            'armasAsaltos' => $armasAsaltos,
        ));
    }

    /**
     * Creates a new ArmasAsalto entity.
     *
     * @Route("/new", name="armasasalto_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $armasAsalto = new ArmasAsalto();
        $form = $this->createForm('AppBundle\Form\ArmasAsaltoType', $armasAsalto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasAsalto);
            $em->flush();

            return $this->redirectToRoute('armasasalto_show', array('id' => $armasAsalto->getId()));
        }

        return $this->render('armasasalto/new.html.twig', array(
            'armasAsalto' => $armasAsalto,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArmasAsalto entity.
     *
     * @Route("/{id}", name="armasasalto_show")
     * @Method("GET")
     */
    public function showAction(ArmasAsalto $armasAsalto)
    {
        $deleteForm = $this->createDeleteForm($armasAsalto);

        return $this->render('armasasalto/show.html.twig', array(
            'armasAsalto' => $armasAsalto,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArmasAsalto entity.
     *
     * @Route("/{id}/edit", name="armasasalto_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArmasAsalto $armasAsalto)
    {
        $deleteForm = $this->createDeleteForm($armasAsalto);
        $editForm = $this->createForm('AppBundle\Form\ArmasAsaltoType', $armasAsalto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasAsalto);
            $em->flush();

            return $this->redirectToRoute('armasasalto_edit', array('id' => $armasAsalto->getId()));
        }

        return $this->render('armasasalto/edit.html.twig', array(
            'armasAsalto' => $armasAsalto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArmasAsalto entity.
     *
     * @Route("/{id}", name="armasasalto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArmasAsalto $armasAsalto)
    {
        $form = $this->createDeleteForm($armasAsalto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($armasAsalto);
            $em->flush();
        }

        return $this->redirectToRoute('armasasalto_index');
    }

    /**
     * Creates a form to delete a ArmasAsalto entity.
     *
     * @param ArmasAsalto $armasAsalto The ArmasAsalto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArmasAsalto $armasAsalto)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('armasasalto_delete', array('id' => $armasAsalto->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
