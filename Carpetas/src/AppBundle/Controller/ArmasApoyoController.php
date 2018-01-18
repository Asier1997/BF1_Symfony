<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ArmasApoyo;
use AppBundle\Form\ArmasApoyoType;

/**
 * ArmasApoyo controller.
 *
 * @Route("/armasapoyo")
 */
class ArmasApoyoController extends Controller
{
    /**
     * Lists all ArmasApoyo entities.
     *
     * @Route("/", name="armasapoyo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $armasApoyos = $em->getRepository('AppBundle:ArmasApoyo')->findAll();

        return $this->render('armasapoyo/index.html.twig', array(
            'armasApoyos' => $armasApoyos,
        ));
    }

    /**
     * Creates a new ArmasApoyo entity.
     *
     * @Route("/new", name="armasapoyo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $armasApoyo = new ArmasApoyo();
        $form = $this->createForm('AppBundle\Form\ArmasApoyoType', $armasApoyo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasApoyo);
            $em->flush();

            return $this->redirectToRoute('armasapoyo_show', array('id' => $armasApoyo->getId()));
        }

        return $this->render('armasapoyo/new.html.twig', array(
            'armasApoyo' => $armasApoyo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ArmasApoyo entity.
     *
     * @Route("/{id}", name="armasapoyo_show")
     * @Method("GET")
     */
    public function showAction(ArmasApoyo $armasApoyo)
    {
        $deleteForm = $this->createDeleteForm($armasApoyo);

        return $this->render('armasapoyo/show.html.twig', array(
            'armasApoyo' => $armasApoyo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ArmasApoyo entity.
     *
     * @Route("/{id}/edit", name="armasapoyo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ArmasApoyo $armasApoyo)
    {
        $deleteForm = $this->createDeleteForm($armasApoyo);
        $editForm = $this->createForm('AppBundle\Form\ArmasApoyoType', $armasApoyo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($armasApoyo);
            $em->flush();

            return $this->redirectToRoute('armasapoyo_edit', array('id' => $armasApoyo->getId()));
        }

        return $this->render('armasapoyo/edit.html.twig', array(
            'armasApoyo' => $armasApoyo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ArmasApoyo entity.
     *
     * @Route("/{id}", name="armasapoyo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ArmasApoyo $armasApoyo)
    {
        $form = $this->createDeleteForm($armasApoyo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($armasApoyo);
            $em->flush();
        }

        return $this->redirectToRoute('armasapoyo_index');
    }

    /**
     * Creates a form to delete a ArmasApoyo entity.
     *
     * @param ArmasApoyo $armasApoyo The ArmasApoyo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ArmasApoyo $armasApoyo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('armasapoyo_delete', array('id' => $armasApoyo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
