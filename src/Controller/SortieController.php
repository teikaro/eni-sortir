<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CreationSortieFormType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Sortie;


/* On prépare le nom des routes de la classe SortieController */
#[Route('portail/sortie', name: 'sortie_')]
class SortieController extends AbstractController
{
    #[Route('/creation_sortie', name: 'creationSortie')]
    public function creationSortie(Request $request, ManagerRegistry $doctrine): Response
    {

        $newSortie = new Sortie();

        $form = $this->createForm(CreationSortieFormType::class, $newSortie);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $em = $this->$doctrine()->getManager();

            $em->persist($newSortie);

            $em->flush();

            $this->addFlash('success', 'Sortie créée avec succès !');

            return $this->redirectToRoute('home');
        }

        return $this->render('sortie/creationSortie.html.twig', [
            'form' => $form->createView()
        ]);
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
