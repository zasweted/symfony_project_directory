<?php

namespace App\Repository;

use App\Model\Starship;
use App\Model\StarshipStatusEnum;
use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(
        private LoggerInterface $logger,
    ) {
    }
    
    public function findAll(): array
    {
        $this->logger->info('Starship collection retrieved');
        return [
            new Starship(
                1,
                'USS LeafyCruiser (NCC-0001)',
                'Garden',
                'Jean-Luc Pickle',
                StarshipStatusEnum::COMPLETED,
            ),
            new Starship(
                2,
                'USS Espresso (NCC-1234)',
                'Latte',
                'James T. Quick!',
                StarshipStatusEnum::IN_PROGRESS,

            ),
            new Starship(
                3,
                'USS WanderLust (NCC-4321-W)',
                'Delta Tourist',
                'Kathryn Journeyweave',
                StarshipStatusEnum::WAITING,

            ),
        ];
    }

    public function find(int $id): ?Starship
    {
        foreach($this->findAll() as $starship) {
            if($starship->getId() === $id) {
                return $starship;
            }
        }

        return null;
    }
}
