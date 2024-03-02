<?php

namespace App\Controller;


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
    #[Route('/review/{id}/add', name: 'app_review_add')]
    public function add(Review $review): Response
    {
        
        $review = new Review();
        // Form creation
        $form = $this->createForm(ReviewType::class, $review);
        return $this->render('review/add.html.twig', [
            'form' => $form,
        ]);
    }
}