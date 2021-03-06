<?php

namespace Albion\OnlineDataProject\Domain;

use Albion\OnlineDataProject\Foundation\DataTypes\Enumerable;

class Range extends Enumerable
{
    const DAY = 'day';
    const WEEK = 'week';
    const MONTH = 'month';
    const LAST_WEEK = 'lastWeek';
    const LAST_MONTH = 'lastMonth';
}