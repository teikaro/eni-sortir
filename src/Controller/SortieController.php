<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* On prépare le nom des routes de la classe SortieController */
#[Route('/sortie', name: 'sortie_')]
class SortieController extends AbstractController
{
    #[Route('/creer', name: 'creer')]
    public function index(): Response
    {
        return $this->render('sortie/creer.html.twig');
    }
}
