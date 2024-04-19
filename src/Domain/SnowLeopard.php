<?php

declare(strict_types=1);

namespace Zoo\Domain;

use Zoo\Domain\Animal\Carnivore;
use Zoo\Domain\Animal\FurryAnimal;

class SnowLeopard extends Carnivore implements FurryAnimal
{
    public function groom(): void
    {
        echo "{$this->species} {$this->name} is being groomed.\n";
    }
}