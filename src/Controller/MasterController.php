<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MasterController extends AbstractController
{
    #[Route('/', name: 'master')]
    public function index(): Response
    {
        $transformedString = null;

        return $this->render('master/index.html.twig', [
            'transformed_string' => $transformedString,
        ]);
    }
}
