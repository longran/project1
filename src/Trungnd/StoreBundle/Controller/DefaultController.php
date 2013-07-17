<?php

namespace Trungnd\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TrungndStoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
