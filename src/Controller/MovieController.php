<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MovieController extends AbstractController
{
    /**
     * Page Résultats d'une recherche
     *
     * @return Response
     */
    // 
    #[Route('/movie/list', name: 'movie_list')]
    public function list(): Response
    {
        return $this->render('movie/list.html.twig');
    }
}
