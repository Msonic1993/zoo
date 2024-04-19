<?php

declare(strict_types=1);

namespace Zoo\Domain\Enum;

enum FeedType: string
{
    case MEAT = 'meat';
    case PLANT = 'plant';
}