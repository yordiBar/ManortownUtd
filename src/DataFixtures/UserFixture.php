<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


// Fixture class used to load fake(used in development) data to the database
// https://symfony.com/doc/master/bundles/DoctrineFixturesBundle/index.html
class UserFixture extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $user = new User();

        $user->setUsername('admin');

        $password = $this->encoder->encodePassword($user, '1234');
        $user->setPassword($password);

        $user->setEmail('admin@admin.com');

        $manager->persist($user);

        $manager->flush();
    }
}
