<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class SiteController extends AbstractController
{
    /**
     * @Route("/site", name="site")
     */
    public function index()
    {
        return $this->render('site/index.html.twig', [
            'controller_name' => 'SiteController',
        ]);
    }

    /**
     * @Route("/",name="home")
     */
    public function home(){
        return $this->render('site/home.html.twig');
    }
    /**
     * @Route("/tarif",name="tarif")
     */
    public function tarif(){
        return $this->render('site/tarifs.html.twig');
    }
    /**
     * @Route("/find",name="find")
     */
    public function find(){
        return $this->render('site/find.html.twig');
    }
    
}
