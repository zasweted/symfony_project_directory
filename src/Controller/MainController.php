<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $starshipRepository)
    {
        $starships = $starshipRepository->findAll();
        $myShip = $starships[array_rand($starships)];

        

        return $this->render('main/homepage.html.twig', [
            'starships' => $starships,
            'myShip' => $myShip,
        ]);
    }
}
