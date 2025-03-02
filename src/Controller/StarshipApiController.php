<?php

namespace App\Controller;

use App\Model\Starship;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class StarshipApiController extends AbstractController
{
    #[Route('/api/starships')]
    public function getCollection(): Response
    {
        $starships = [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickle',
                'Under construction',
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234)',
                'Latte',
                'James T. Quick!',
                'Repaired',
            ),
            new Starship(
                3,
                'USS WanderLust (NCC-4321-W)',
                'Delta Tourist',
                'Kathryn Journeyweave',
                'Under construction',
            ),
        ];

            

        return $this->json($starships);
    }
}
