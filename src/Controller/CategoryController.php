<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="app_menu")
     */
    //constructeur du controller retur response 
    public function index(): Response
    {
           // reponse ici :

        return $this->render('category/index.html.twig', [
            'controller_name' => 'app_main',
        ]);
    }
}