<?php

namespace App\tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UsernameTest extends TestCase
{
    public function testGetUsername()
    {
        $username = new User();

        $username->setUsername('admin');

        $this->assertEquals('admin', $username->getUsername());
    }

    // public function testTrueAssertsToTrue()
    // {
    //     $this->assertTrue(true);
    // }
}