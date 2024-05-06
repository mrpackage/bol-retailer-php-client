<?php

namespace Jobjen\BolRetailerV10\Model;

use Jobjen\BolRetailerV10\Enum;

// This class is auto generated by OpenApi\ModelGenerator
class ReplenishmentLine extends AbstractModel
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
            'ean' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'lineState' => [ 'model' => null, 'enum' => Enum\ReplenishmentLineLineState::class, 'array' => false ],
            'quantityAnnounced' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityReceived' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityInProgress' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityWithGradedState' => [ 'model' => null, 'enum' => null, 'array' => false ],
            'quantityWithRegularState' => [ 'model' => null, 'enum' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The EAN number associated with this product.
     */
    public $ean;

    /**
     * @var Enum\ReplenishmentLineLineState The state of the line indicating whether this line was announced within this
     * replenishment.
     */
    public $lineState;

    /**
     * @var int The amount of announced quantity for this replenishment line.
     */
    public $quantityAnnounced;

    /**
     * @var int The amount of received quantity for this replenishment line.
     */
    public $quantityReceived;

    /**
     * @var int The amount of quantity that is still in progress at the warehouse for this replenishment line.
     */
    public $quantityInProgress;

    /**
     * @var int The quantity within this shipment line that has a graded (unsalable) state.
     */
    public $quantityWithGradedState;

    /**
     * @var int The quantity within this shipment line that has a regular (salable) state.
     */
    public $quantityWithRegularState;
}
