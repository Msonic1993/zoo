<?php

declare(strict_types=1);

namespace Zoo\Domain\Food;

class Food
{
    public function __construct(
        public readonly string $foodType
    ) {
    }
}