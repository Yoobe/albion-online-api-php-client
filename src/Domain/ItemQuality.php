<?php

namespace Albion\OnlineDataProject\Domain;

use Albion\OnlineDataProject\Foundation\DataTypes\Enumerable;

class ItemQuality extends Enumerable
{
    const NORMAL = 1;
    const GOOD = 2;
    const OUTSTANDING = 3;
    const EXCELLENT = 4;
    const MASTERPIECE = 5;
}