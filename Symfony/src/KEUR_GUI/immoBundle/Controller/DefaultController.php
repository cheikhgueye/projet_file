<?php

namespace KEUR_GUI\immoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('KEUR_GUIimmoBundle:Default:index.html.twig');
    }
}
