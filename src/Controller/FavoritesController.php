<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoritesController extends AbstractController
{
    #[Route('/favorites/list', name: 'favorites_list')]
    public function list(): Response
    {
        return $this->render('favorites/list.html.twig');
    }
}