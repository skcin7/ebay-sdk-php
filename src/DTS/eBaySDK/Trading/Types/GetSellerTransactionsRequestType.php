<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DateTime $ModTimeFrom
 * @property \DateTime $ModTimeTo
 * @property \DTS\eBaySDK\Trading\Types\PaginationType $Pagination
 * @property boolean $IncludeFinalValueFee
 * @property boolean $IncludeContainingOrder
 * @property \DTS\eBaySDK\Trading\Types\SKUArrayType $SKUArray
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType $Platform
 * @property integer $NumberOfDays
 * @property \DTS\eBaySDK\Trading\Enums\InventoryTrackingMethodCodeType $InventoryTrackingMethod
 * @property boolean $IncludeCodiceFiscale
 */
class GetSellerTransactionsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ModTimeFrom' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ModTimeFrom'
        ),
        'ModTimeTo' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ModTimeTo'
        ),
        'Pagination' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Pagination'
        ),
        'IncludeFinalValueFee' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeFinalValueFee'
        ),
        'IncludeContainingOrder' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeContainingOrder'
        ),
        'SKUArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\SKUArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'SKUArray'
        ),
        'Platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'NumberOfDays' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NumberOfDays'
        ),
        'InventoryTrackingMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'InventoryTrackingMethod'
        ),
        'IncludeCodiceFiscale' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeCodiceFiscale'
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

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetSellerTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
