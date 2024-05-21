<?php

namespace App\Enums;

enum OrderStatusEnum : int{
    case PENDING   = 0;
    case PREPARING = 1;
    case ONTHEWAY  = 2;
    case COMPLATED = 3;
    case CANCELED  = 4;
    case REJECTED  = 5;
}