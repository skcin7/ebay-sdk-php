<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types\Test;

use DTS\eBaySDK\Trading\Types\QuantityType;

class QuantityTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new QuantityType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\QuantityType', $this->obj);
    }

    public function testExtendsDecimalType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DecimalType', $this->obj);
    }
}
