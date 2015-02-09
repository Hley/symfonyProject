<?php

namespace Lawrence\Bundle\CrudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($city)
    {
        return $this->render('LawrenceCrudBundle:Default:index.html.twig', array('city' => $city));
    }
}
