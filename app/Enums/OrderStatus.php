<?php

namespace App\Enums;

enum OrderStatus: string
{
    case Disponible = 'Disponible';
    case Indisponible = 'Indisponible';
}