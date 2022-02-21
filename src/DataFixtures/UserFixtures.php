<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager): void
    {

        // Admins

        for ($i = 0; $i < 3; $i++) {
            $email = 'admin' . $i . '@mars-mouse.com';
            $admin = (new User)->setEmail($email)
                ->setRoles(['ROLE_ADMIN'])
                ->setNickname('admin' . $i);

            $clearPassword = 'admin' . $i;
            $hashedPassword = $this->encoder->hashPassword($admin, $clearPassword);
            $admin->setPassword($hashedPassword);

            $manager->persist($admin);
        }

        // Users
        for ($i = 0; $i < 5; $i++) {
            $email = 'user' . $i . '@mail.org';
            $user = (new User)->setEmail($email)
                ->setNickname('user' . $i);

            $clearPassword = 'user' . $i;
            $hashedPassword = $this->encoder->hashPassword($user, $clearPassword);
            $user->setPassword($hashedPassword);

            $manager->persist($user);
        }

        $manager->flush();
    }
}