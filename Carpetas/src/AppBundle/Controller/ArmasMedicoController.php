<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArmasMedico;
use AppBundle\Form\ArmasMedicoType;

/**
 * ArmasMedico controller.
 *
 * @Route("/armasmedico")
 */
class ArmasMedicoController extends Controller
{
    /**
     * Lists all ArmasMedico entities.
     *
     * @Route("/", name="armasmedico_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $armasMedicos = $em->getRepository('AppBundle:ArmasMedico')->findAll();

        return $this->render('armasmedico/index.html.twig', array(
            'armasMedicos' => $armasMedicos,
        ));
    }

    /**
     * Creates a new ArmasMedico entity.
     *
     * @Route("/new", name="armasmedico_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $armasMedico = new ArmasMedico();
        $form = $this->createForm('AppBundle\Form\ArmasMedicoType', $armasMedico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasMedico);
            $em->flush();

            return $this->redirectToRoute('armasmedico_show', array('id' => $armasMedico->getId()));
        }

        return $this->render('armasmedico/new.html.twig', array(
            'armasMedico' => $armasMedico,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArmasMedico entity.
     *
     * @Route("/{id}", name="armasmedico_show")
     * @Method("GET")
     */
    public function showAction(ArmasMedico $armasMedico)
    {
        $deleteForm = $this->createDeleteForm($armasMedico);

        return $this->render('armasmedico/show.html.twig', array(
            'armasMedico' => $armasMedico,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArmasMedico entity.
     *
     * @Route("/{id}/edit", name="armasmedico_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArmasMedico $armasMedico)
    {
        $deleteForm = $this->createDeleteForm($armasMedico);
        $editForm = $this->createForm('AppBundle\Form\ArmasMedicoType', $armasMedico);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasMedico);
            $em->flush();

            return $this->redirectToRoute('armasmedico_edit', array('id' => $armasMedico->getId()));
        }

        return $this->render('armasmedico/edit.html.twig', array(
            'armasMedico' => $armasMedico,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArmasMedico entity.
     *
     * @Route("/{id}", name="armasmedico_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArmasMedico $armasMedico)
    {
        $form = $this->createDeleteForm($armasMedico);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($armasMedico);
            $em->flush();
        }

        return $this->redirectToRoute('armasmedico_index');
    }

    /**
     * Creates a form to delete a ArmasMedico entity.
     *
     * @param ArmasMedico $armasMedico The ArmasMedico entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArmasMedico $armasMedico)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('armasmedico_delete', array('id' => $armasMedico->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
