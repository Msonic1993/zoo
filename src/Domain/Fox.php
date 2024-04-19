<?php

declare(strict_types=1);

namespace Zoo\Domain;

use Zoo\Domain\Animal\FurryAnimal;
use Zoo\Domain\Animal\Omnivore;

class Fox extends Omnivore implements FurryAnimal
{
    public function groom(): void
    {
        echo "{$this->species} {$this->name} is being groomed.\n";
    }
}