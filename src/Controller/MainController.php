<?php

namespace App\Controller;

use App\Repository\SortieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/* On prépare le nom des routes de la classe MainController */
class MainController extends AbstractController
{
    /* Contrôleur de la vue "home" */
    #[Route('/portail', name: 'home')]
    public function home(SortieRepository $repo): Response
    {
        $sortieRepo = $repo->findAll();

        $sorties = $sortieRepo;

        return $this->render('main/home.html.twig', [
            'sorties' => $sorties
        ]);
    }
}
