<?php

namespace App\Tests\Service; // <--- IMPORTANT : correspond à l'arborescence

use App\Service\DiscountCalculator;
use PHPUnit\Framework\TestCase;

class DiscountCalculatorTest extends TestCase
{
    public function testDiscountOver100()
    {
        $calculator = new DiscountCalculator();
        $discount = $calculator->calculateDiscount(150, false);
        $this->assertEquals(15, $discount);
    }
}
