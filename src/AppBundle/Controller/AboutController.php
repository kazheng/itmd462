<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

    /**
     * @Route("/about")
     */

class AboutController extends Controller
{
    /**
     * @Route("/", name="about_index")
     */
    public function indexAction()
    {
      return $this->render('about/index.html.twig');
    }
}
