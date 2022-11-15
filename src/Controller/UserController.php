<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/* On prépare le nom des routes de la classe UserController */
#[Route('/utilisateur', name: 'utilisateur_')]
class UserController extends AbstractController
{
    #[Route('/profil/', name: 'profil')]
    public function profil(): Response
    {
        return $this->render('user/profil.html.twig');
    }

}
