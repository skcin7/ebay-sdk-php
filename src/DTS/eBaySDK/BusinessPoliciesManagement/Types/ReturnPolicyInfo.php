<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\BusinessPoliciesManagement\Types;

/**
 *
 * @property string $description
 * @property string $refundOption
 * @property string $shippingCostPaidByOption
 * @property string $returnsWithinOption
 * @property string $returnsAcceptedOption
 * @property string $warrantyOfferedOption
 * @property string $warrantyTypeOption
 * @property string $warrantyDurationOption
 * @property string $restockingFeeValue
 * @property string $holidayReturns
 */
class ReturnPolicyInfo extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'description'
        ),
        'refundOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'refundOption'
        ),
        'shippingCostPaidByOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingCostPaidByOption'
        ),
        'returnsWithinOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnsWithinOption'
        ),
        'returnsAcceptedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'returnsAcceptedOption'
        ),
        'warrantyOfferedOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'warrantyOfferedOption'
        ),
        'warrantyTypeOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'warrantyTypeOption'
        ),
        'warrantyDurationOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'warrantyDurationOption'
        ),
        'restockingFeeValue' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'restockingFeeValue'
        ),
        'holidayReturns' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'holidayReturns'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/selling/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
