<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ReturnManagement\Enums\Test;

use DTS\eBaySDK\ReturnManagement\Enums\ReturnUserRoleType;

class ReturnUserRoleTypeTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ReturnUserRoleType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Enums\ReturnUserRoleType', $this->obj);
    }
}
