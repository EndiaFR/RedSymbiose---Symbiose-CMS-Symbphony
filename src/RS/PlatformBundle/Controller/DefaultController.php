<?php

namespace RS\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RSPlatformBundle:Default:index.html.twig');
    }
}
