<?php

namespace App\tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testGetUserEmail()
    {
        $email = new User();

        $email->setEmail('admin');

        $this->assertEquals('admin', $email->getEmail());
    }
}