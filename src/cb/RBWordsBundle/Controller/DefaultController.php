<?php

namespace cb\RBWordsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('rbwordsBundle:Default:index.html.twig', array('name' => $name));
    }
}
