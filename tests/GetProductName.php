<?php

namespace App\tests;

use App\Entity\Products;
use PHPUnit\Framework\TestCase;

class GetProductNameTest extends TestCase
{
    public function testGetProductName()
    {
        $name = new Products();

        $name->setName('Jersey');

        $this->assertEquals('Jersey', $name->getName());
    }
}