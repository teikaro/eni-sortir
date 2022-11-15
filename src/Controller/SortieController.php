<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* On prépare le nom des routes de la classe SortieController */
#[Route('/sortie', name: 'sortie_')]
class SortieController extends AbstractController
{
    #[Route('/creation_sortie', name: 'creationSortie')]
    public function creationSortie(): Response
    {
        return $this->render('sortie/creationSortie.html.twig');
    }

    #[Route('/afficher_sortie', name: 'afficherSortie')]
    public function modificationSortie(): Response
    {
        return $this->render('sortie/afficherSortie.html.twig');
    }

    #[Route('/annuler_sortie', name: 'annulerSortie')]
    public function annulerSortie(): Response
    {
        return $this->render('sortie/annulerSortie.html.twig');
    }
}
