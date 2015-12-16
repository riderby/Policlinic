<?php

namespace Rider\DoctorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RiderDoctorsBundle:Default:index.html.twig');
    }
}
