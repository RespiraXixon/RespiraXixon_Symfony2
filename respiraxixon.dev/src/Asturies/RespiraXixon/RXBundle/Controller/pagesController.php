<?php

namespace Asturies\RespiraXixon\RXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class pagesController extends Controller
{
    public function indexAction()
    {
        return $this->render('RXBundle:pages:index.html.twig');
    }
    public function caso1Action()
    {
        return $this->render('RXBundle:pages:caso1.html.twig');
    }
    public function caso2Action()
    {
        return $this->render('RXBundle:pages:caso2.html.twig');
    }
    public function caso3Action()
    {
        return $this->render('RXBundle:pages:caso3.html.twig');
    }
    public function caso4Action()
    {
        return $this->render('RXBundle:pages:caso4.html.twig');
    }
    public function caso5Action()
    {
        return $this->render('RXBundle:pages:caso5.html.twig');
    }
    public function caso6Action()
    {
        return $this->render('RXBundle:pages:caso6.html.twig');
    }
    public function caso7Action()
    {
        return $this->render('RXBundle:pages:caso7.html.twig');
    }
} 
