<?php

declare(strict_types=1);

use Zoo\Application\ZooApplication;
use Zoo\Domain\Elephant;
use Zoo\Domain\Enum\FeedType;
use Zoo\Domain\Food\Food;
use Zoo\Domain\Fox;
use Zoo\Domain\Rabbit;
use Zoo\Domain\SnowLeopard;
use Zoo\Domain\Tiger;

require_once 'vendor/autoload.php';

//App use case
$zooApp = new ZooApplication();
$tiger = new Tiger('Tom', 'Tiger');
$elephant = new Elephant('Ellie', 'Elephant');
$snowLeopard = new SnowLeopard('Snowy', 'Snow Leopard');
$rabbit = new Rabbit('Bunny', 'Rabbit');
$fox = new Fox('Foxy', 'Fox');

$zooApp->addAnimal($tiger);
$zooApp->addAnimal($elephant);
$zooApp->addAnimal($snowLeopard);
$zooApp->addAnimal($rabbit);
$zooApp->addAnimal($fox);

$animals = $zooApp->getAnimals();
foreach ($animals as $animal) {
    echo $animal->getSpecies() . ': ' . $animal->getName() . "\n";
}

$zooApp->feedAnimals((new Food(FeedType::MEAT->value)));
$zooApp->groomFurryAnimals();


