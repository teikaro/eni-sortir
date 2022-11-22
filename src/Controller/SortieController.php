<?php

namespace App\Controller;

use App\Repository\SortieRepository;
use Doctrine\ORM\EntityManagerInterface;
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
    public function creationSortie(Request $request): Response
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

    #[Route('/annuler_sortie', name: 'annuler')]
    public function annulerSortie(): Response
    {
        return $this->render('sortie/annulerSortie.html.twig');
    }
	
	#[Route('/details/{id}', name: 'details')]
	public function detailsSortie($id, SortieRepository $sortieRepository) : Response
	{
		$sortie = $sortieRepository->find($id);
		$userId = $this->getUser()->getId();
		$length = $sortie->getInscrit()->count();
		$user = $this->getUser();
		//var_dump($length);
		//var_dump($user);
		
		if(!$sortie){
			throw $this->createNotFoundException('oh nooo!!!!!');
		}
		return $this->render('sortie/details.html.twig', compact('sortie', 'length', 'userId'));
	}
	
	#[Route('inscription/{id}/', name: 'inscription')]
	public function inscriptionSortie($id, SortieRepository $sortieRepository, EntityManagerInterface $entityManager)
	{
		$sortie = $sortieRepository->find($id);
		$userId = $this->getUser();
		$sortie->addInscrit($userId);
		
		$entityManager->persist($sortie);
		$entityManager->flush();
		
		$this->addFlash('success', 'Vous êtes inscrit à cette sortie!');
		return $this->redirectToRoute('sortie_details', ['id'=>$id]);
	}
	
	#[Route('desinscription/{id}/', name: 'desinscription')]
	public function desinscriptionSortie($id, SortieRepository $sortieRepository, EntityManagerInterface $entityManager)
	{
		$sortie = $sortieRepository->find($id);
		$userId = $this->getUser();
		$sortie->removeInscrit($userId);
		
		$entityManager->persist($sortie);
		$entityManager->flush();
		
		$this->addFlash('success', 'Vous n`êtes plus inscrit à cette sortie!');
		return $this->redirectToRoute('sortie_details', ['id'=>$id]);
	}
}
