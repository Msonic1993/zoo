<?php

declare(strict_types=1);

namespace Zoo\Domain\Animal;

use Zoo\Domain\Food\Food;

interface Animal {
    public function getName(): string;
    public function getSpecies(): string;
    public function feed(Food $foodType): void;
}