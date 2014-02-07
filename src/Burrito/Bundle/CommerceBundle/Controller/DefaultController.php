<?php

namespace Burrito\Bundle\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BurritoCommerceBundle:Default:index.html.twig', array('name' => $name));
    }
}
