<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class TransportInstruction extends AbstractModel
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
            'transporterCode' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'trackAndTrace' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Specify the transporter that will carry out the shipment.
     */
    public $transporterCode;

    /**
     * @var string The track and trace code that is associated with this transport.
     */
    public $trackAndTrace;
}
