<?php

namespace Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
enum ReplenishmentResponseState: string
{
    case ANNOUNCED = 'ANNOUNCED';
    case IN_TRANSIT = 'IN_TRANSIT';
    case ARRIVED_AT_WH = 'ARRIVED_AT_WH';
    case IN_PROGRESS_AT_WH = 'IN_PROGRESS_AT_WH';
    case CANCELLED = 'CANCELLED';
    case DONE = 'DONE';
}
