<?php

namespace Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
enum CreateReturnRequestHandlingResult: string
{
    case RETURN_RECEIVED = 'RETURN_RECEIVED';
    case EXCHANGE_PRODUCT = 'EXCHANGE_PRODUCT';
    case RETURN_DOES_NOT_MEET_CONDITIONS = 'RETURN_DOES_NOT_MEET_CONDITIONS';
    case REPAIR_PRODUCT = 'REPAIR_PRODUCT';
    case CUSTOMER_KEEPS_PRODUCT_PAID = 'CUSTOMER_KEEPS_PRODUCT_PAID';
}
