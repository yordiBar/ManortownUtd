<?php

namespace App\tests;

use App\Entity\Orders;
use PHPUnit\Framework\TestCase;

class GetTotalCostTest extends TestCase
{
    public function testGetTotalcost()
    {
        $totalcost = new Orders();

        $totalcost->setTotalcost(50);

        $this->assertLessThanOrEqual(50, $totalcost->getTotalcost());
    }
}