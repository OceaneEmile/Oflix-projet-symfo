<?php

namespace App\Controller;


use App\Entity\Movie;
use App\Entity\Review;
use App\Form\ReviewType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReviewController extends AbstractController
{
    /**
     * Add review to a movie
     *
     * @return Response
     */
     /**
     * Ajout d'une critique sur un film
     *
     * @return Response
     */
    #[Route('/review/{id}/add', name: 'app_review_add')]
    public function add(Movie $movie): Response
    {
        // On créer l'instance de Review
        $review = new Review();
        // On construit le formulaire qui va construire notre $objet $review
        $form = $this->createForm(ReviewType::class, $review);
        return $this->render('review/add.html.twig', [
            'form' => $form,
        ]);
    }
}