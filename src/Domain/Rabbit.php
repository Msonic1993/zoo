<?php

declare(strict_types=1);

namespace Zoo\Domain;

use Zoo\Domain\Animal\FurryAnimal;
use Zoo\Domain\Animal\Herbivore;

class Rabbit extends Herbivore implements FurryAnimal
{
    public function groom(): void
    {
        echo "{$this->species} {$this->name} is being groomed.\n";
    }
}