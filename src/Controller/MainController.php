<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* On prépare le nom des routes de la classe MainController */
#[Route('/', name: 'main_')]
class MainController extends AbstractController
{

    /* Contrôleur de la vue "connexion" */
    #[Route('/connexion', name: 'connexion')]
    public function connexion(): Response
    {
        return $this->render('main/connexion.html.twig');
    }

    /* Contrôleur de la vue "home" */
    #[Route('/home', name: 'home')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig');
    }

}
