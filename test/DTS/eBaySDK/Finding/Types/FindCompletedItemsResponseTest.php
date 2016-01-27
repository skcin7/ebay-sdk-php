<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types\Test;

use DTS\eBaySDK\Finding\Types\FindCompletedItemsResponse;

class FindCompletedItemsResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new FindCompletedItemsResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindCompletedItemsResponse', $this->obj);
    }

    public function testExtendsBaseFindingServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceResponse', $this->obj);
    }
}
