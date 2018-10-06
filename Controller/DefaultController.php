<?php

namespace TOC\ImportBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TOCImportBundle:Default:index.html.twig');
    }
}
