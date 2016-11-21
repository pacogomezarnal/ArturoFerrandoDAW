<?php

namespace gesGfctBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use gesGfctBundle\Form\profesoresType;
use gesGfctBundle\Entity\profesores;
use Symfony\Component\HttpFoundation\Request;

class profesoresController extends Controller
{
    public function allAction()
    {
        $respository = $this->getDoctrine()->getRepository('gesGfctBundle:profesores');
        $profesores = $respository->findAll();
        return $this->render('gesGfctBundle:Profesores:all.html.twig',array("NumProfesores"=>$alumno));

    }

}
