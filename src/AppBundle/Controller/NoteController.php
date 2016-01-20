<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class NoteController extends Controller
{
    /**
     * @Route("/note");
     */
    public function showAction()
    {
        return new Response('HELLO!');
    }
}