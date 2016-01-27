<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\FeedbackDetailArrayType $FeedbackDetailArray
 * @property integer $FeedbackDetailItemTotal
 * @property \DTS\eBaySDK\Trading\Types\FeedbackSummaryType $FeedbackSummary
 * @property integer $FeedbackScore
 * @property \DTS\eBaySDK\Trading\Types\PaginationResultType $PaginationResult
 * @property integer $EntriesPerPage
 * @property integer $PageNumber
 */
class GetFeedbackResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'FeedbackDetailArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackDetailArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailArray'
        ),
        'FeedbackDetailItemTotal' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackDetailItemTotal'
        ),
        'FeedbackSummary' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\FeedbackSummaryType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackSummary'
        ),
        'FeedbackScore' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeedbackScore'
        ),
        'PaginationResult' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\PaginationResultType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PaginationResult'
        ),
        'EntriesPerPage' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'EntriesPerPage'
        ),
        'PageNumber' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'PageNumber'
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
