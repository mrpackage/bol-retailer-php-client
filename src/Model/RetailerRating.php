<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class RetailerRating extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'retailerRating' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'productInformationRating' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'deliveryTimeRating' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'shippingRating' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'serviceRating' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var float General rating of the retailer.
     */
    public $retailerRating;

    /**
     * @var float Product rating of the retailer.
     */
    public $productInformationRating;

    /**
     * @var float Delivery rating of the retailer.
     */
    public $deliveryTimeRating;

    /**
     * @var float Shipping rating of the retailer.
     */
    public $shippingRating;

    /**
     * @var float Service rating of the retailer.
     */
    public $serviceRating;
}
