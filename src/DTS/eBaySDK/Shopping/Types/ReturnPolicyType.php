<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Shopping\Types;

/**
 *
 * @property string $Refund
 * @property string $ReturnsWithin
 * @property string $ReturnsAccepted
 * @property string $Description
 * @property string $WarrantyOffered
 * @property string $WarrantyType
 * @property string $WarrantyDuration
 * @property string $EAN
 * @property string $ShippingCostPaidBy
 * @property string $RestockingFeeValue
 * @property string $RestockingFeeValueOption
 */
class ReturnPolicyType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'Refund' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Refund'
        ),
        'ReturnsWithin' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsWithin'
        ),
        'ReturnsAccepted' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReturnsAccepted'
        ),
        'Description' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Description'
        ),
        'WarrantyOffered' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyOffered'
        ),
        'WarrantyType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyType'
        ),
        'WarrantyDuration' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'WarrantyDuration'
        ),
        'EAN' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EAN'
        ),
        'ShippingCostPaidBy' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ShippingCostPaidBy'
        ),
        'RestockingFeeValue' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockingFeeValue'
        ),
        'RestockingFeeValueOption' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RestockingFeeValueOption'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
