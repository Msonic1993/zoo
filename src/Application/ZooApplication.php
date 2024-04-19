<?php

declare(strict_types=1);

namespace Zoo\Application;

use Zoo\Domain\Animal\Animal;
use Zoo\Domain\Animal\FurryAnimal;
use Zoo\Domain\Food\Food;

class ZooApplication
{
    private array $animals;

    public function __construct()
    {
        $this->animals = [];
    }

    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    public function feedAnimals(Food $food): void
    {
        foreach ($this->animals as $animal) {
            $animal->feed($food);
        }
    }

    public function groomFurryAnimals(): void
    {
        foreach ($this->animals as $animal) {
            if ($animal instanceof FurryAnimal) {
                $animal->groom();
            }
        }
    }

    public function getAnimals(): array
    {
        return $this->animals;
    }
}
