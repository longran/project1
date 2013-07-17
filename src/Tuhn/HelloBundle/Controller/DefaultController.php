<?php

namespace Tuhn\HelloBundle\Controller;

use Tuhn\HelloBundle\Entity\Friend;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TuhnHelloBundle:Default:index.html.twig', array('name' => $name));
    }

    public function echoAction()
    {
        echo 'Hello world!';

        return new Response();
    }

    public function ormAction()
    {
        $friendRepo = $this->getDoctrine()->getRepository('TuhnHelloBundle:Friend');

        // $myFriendId = 1;
        // $myFriend = $friendRepo->find($myFriendId);
        // $name = $myFriend->getName();
        
        $myFriends = $friendRepo->findAll();
        $names = array();
        foreach ($myFriends as $friend) {
            $names[] = $friend->getName();
        }
        $name = implode(', ', $names);

        return $this->render('TuhnHelloBundle:Default:index.html.twig', array('name' => $name));
    }

}
