<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\HalfFinding\Enums\Test;

use DTS\eBaySDK\HalfFinding\Enums\ProductIDCodeType;

class ProductIDCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ProductIDCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Enums\ProductIDCodeType', $this->obj);
    }
}
