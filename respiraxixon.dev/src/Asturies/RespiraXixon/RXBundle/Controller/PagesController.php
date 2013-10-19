<?php

namespace Asturies\RespiraXixon\RXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Asturies\RespiraXixon\RXBundle\Entity\ECoordenadas;
use Asturies\RespiraXixon\RXBundle\Form\FCoordenadas;

class PagesController extends Controller
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
    
    public function caso8Action() 
    {
        $eCoordenadas = new ECoordenadas();
        $fCoordenadas = $this->createForm(new FCoordenadas(), $eCoordenadas);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $fCoordenadas->bind($request);

            if ($fCoordenadas->isValid()) {
                return $this->redirect($this->generateUrl('rx_caso8'));
            }
        }

        return $this->render('RXBundle:pages:caso8.html.twig', array(
        'form' => $fCoordenadas->createView()
        ));
    }    
} 
