<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use App\Repository\MovieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    #[Route('/', name: 'home-page')]
    public function home(MovieRepository $movieRepository,GenreRepository $genreRepository): Response
    {
        $movie = $movieRepository->findAllOrderByTitleAscDql();
        $genres = $genreRepository->findAll();
        return $this->render('main/main.html.twig', [
            'movie' => $movie,
            'genres' => $genres
        ]);
    }

}
