<?php

namespace Asturies\RespiraXixon\RXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    public function indexAction()
    {
        return $this->render('RXBundle:Pages:index.html.twig');
    }
    public function caso1Action()
    {
        return $this->render('RXBundle:Pages:caso1.html.twig');
    }
    public function caso2Action()
    {
        return $this->render('RXBundle:Pages:caso2.html.twig');
    }
    public function caso3Action()
    {
        return $this->render('RXBundle:Pages:caso3.html.twig');
    }
    public function caso4Action()
    {
        return $this->render('RXBundle:Pages:caso4.html.twig');
    }
    public function caso5Action()
    {
        return $this->render('RXBundle:Pages:caso5.html.twig');
    }
}
