<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Finding\Types\Test;

use DTS\eBaySDK\Finding\Types\GetVersionRequest;

class GetVersionRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetVersionRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\GetVersionRequest', $this->obj);
    }

    public function testExtendsBaseServiceRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseServiceRequest', $this->obj);
    }
}
