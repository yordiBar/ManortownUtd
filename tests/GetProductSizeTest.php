<?php

namespace App\tests;

use App\Entity\Products;
use PHPUnit\Framework\TestCase;

class GetProductSizeTest extends TestCase
{
    public function testGetProductSize()
    {
        $size= new Products();

        $size->setSize('L');

        $this->assertEquals('L', $size->getSize());
    }
}