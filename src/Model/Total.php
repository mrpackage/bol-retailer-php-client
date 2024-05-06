<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class Total extends AbstractModel
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
            'minimum' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'maximum' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var float Minimum number of estimated sales expectations on the bol.com platform.
     */
    public $minimum;

    /**
     * @var float Maximum number of estimated sales expectations on the bol.com platform.
     */
    public $maximum;
}
