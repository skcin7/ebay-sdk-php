<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Enums\Test;

use DTS\eBaySDK\MerchantData\Enums\MismatchTypeCodeType;

class MismatchTypeCodeTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MismatchTypeCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\MerchantData\Enums\MismatchTypeCodeType', $this->obj);
    }
}
