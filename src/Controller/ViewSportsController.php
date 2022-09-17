<?php

namespace App\Controller;

use App\Repository\SportRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/viewsports')]
class ViewSportsController extends AbstractController
{
    #[Route('/', name: 'app_viewsports_index', methods: ['GET'])]
    public function index(SportRepository $sportRepository, CategoryRepository $categoryRepository): Response
    {
        return $this->render('viewsports/index.html.twig', [
            'sports' => $sportRepository->findAll(),
            'categories' => $categoryRepository->findAll(),
        ]);
    }

    // #[Route('/{id}', name: 'app_sport_show', methods: ['GET'])]
    // public function show(Sport $sport): Response
    // {
    //     return $this->render('sport/show.html.twig', [
    //         'sport' => $sport,
    //     ]);
    // }

}
