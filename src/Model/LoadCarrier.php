<?php

namespace Picqer\BolRetailerV10\Model;

use Picqer\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class LoadCarrier extends AbstractModel
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
            'sscc' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'transportLabelTrackAndTrace' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'transportState' => [ 'model' => null, 'enum' => Enum\LoadCarrierTransportState::class, 'array' => false ],
            'transportStateUpdateDateTime' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The Serial Shipping Container Code (SSCC) for this load carrier.
     */
    public $sscc;

    /**
     * @var string The track and trace code for this load carrier.
     */
    public $transportLabelTrackAndTrace;

    /**
     * @var Enum\LoadCarrierTransportState The current state of the transport for this load carrier.
     */
    public $transportState;

    /**
     * @var string The date and time in ISO 8601 format when the latest update for this transport was received.
     */
    public $transportStateUpdateDateTime;

    public function getTransportStateUpdateDateTime(): ?\DateTime
    {
        if (empty($this->transportStateUpdateDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->transportStateUpdateDateTime);
    }
}
