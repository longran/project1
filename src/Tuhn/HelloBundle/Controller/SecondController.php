<?php

namespace Tuhn\HelloBundle\Controller;

use Tuhn\HelloBundle\Model\FriendModel;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SecondController extends Controller
{
    public function dbalAction()
    {
        $friendModel = $this->get('tuhn_hello.friend');

        $names = $friendModel->findAll();
        $name = implode(' and ', $names);
        
        return $this->render('TuhnHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}
