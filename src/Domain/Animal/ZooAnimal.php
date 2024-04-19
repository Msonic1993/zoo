<?php

declare(strict_types=1);

namespace Zoo\Domain\Animal;

use Zoo\Domain\Food\Food;

abstract class ZooAnimal implements Animal
{
    public function __construct(
        protected string $name,
        protected string $species
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSpecies(): string
    {
        return $this->species;
    }

    abstract public function feed(Food $foodType): void;

}