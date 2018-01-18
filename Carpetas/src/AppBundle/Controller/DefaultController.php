<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
     /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Inicio/Inicio.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
     /**
     * @Route("/asalto", name="asalto")
     */
    public function asaltoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Asalto/Asalto.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
     /**
     * @Route("/apoyo", name="apoyo")
     */
    public function apoyoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Apoyo/Apoyo.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
     
     /**
     * @Route("/medico", name="medico")
     */
    public function medicoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Medico/Medico.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
    /**
     * @Route("/explorador", name="explorador")
     */
    public function exploradorAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Explorador/Explorador.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
    
    /**
     * @Route("/vehiculos", name="vehiculos")
     */
    public function vehiculosAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('Vehiculos/Vehiculos.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }


  }

