<?php

namespace App\Controller;

use App\Repository\MovieRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController
{
    /**
     * Page Résultats d'une recherche
     *
     * @return Response
     */
    // 
    #[Route('/movie/list', name: 'movie_list')]
    public function list(MovieRepository $movieRepository): Response
    {
        $movie = $movieRepository->findAll();
        return $this->render('movie/list.html.twig', [
            'movie' => $movie
        ]);
    }
    /**
     * Movie show
     *
     * @param int $id 
     * @return Response
     */
    #[Route('/movie/show/{id}', name:'movie_show', methods:['GET'])]
    public function show(int $id, MovieRepository $movieRepository)
    {
        $movie = $movieRepository->find($id);
       // dump($movie);
        return $this->render('movie/show.html.twig', [
            'movie' => $movie
        ]);
    }
}
