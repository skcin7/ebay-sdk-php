<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property \DTS\eBaySDK\Finding\Types\SearchItem[] $item
 * @property integer $count
 */
class SearchResult extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'item' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\SearchItem',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'item'
        ),
        'count' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'count'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/search/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
