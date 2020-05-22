<?php

namespace App\tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class PasswordTest extends TestCase
{
    public function testGetUserPassword()
    {
        $password = new User();

        $password->setPassword('admin');

        $this->assertEquals('admin', $password->getPassword());
    }
}