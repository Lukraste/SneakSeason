<?php

namespace App\Enums;

enum ProductStock: string
{
    case Disponible  = 'Disponible';
    case Rupture = 'Rupture de stock';
    case Prochainement = 'En stock prochainement';
}