<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Pending   = 'pending';
    case Paid      = 'paid';
    case Shipped   = 'shipped';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
    case process = 'process';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
