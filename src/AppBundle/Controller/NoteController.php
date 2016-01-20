<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class NoteController
{
    /**
     * @Route('/note');
     */
    public function showAction()
    {
        return new Response("HELLO!");
    }
}