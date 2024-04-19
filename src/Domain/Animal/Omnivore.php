<?php

declare(strict_types=1);

namespace Zoo\Domain\Animal;

use Zoo\Domain\Enum\FeedType;
use Zoo\Domain\Food\Food;

class Omnivore extends ZooAnimal
{
    public function feed(Food $food): void
    {
        if ($food->foodType === FeedType::MEAT->value || $food->foodType === FeedType::PLANT->value) {
            echo "{$this->species} {$this->name} is eating {$food->foodType}.\n";
        } else {
            echo "{$this->species} {$this->name} is not eating {$food->foodType}.\n";
        }
    }
}
