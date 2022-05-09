<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User;
        $user->setEmail("depierrepont.lisa@gmail.com");
        $user->setRoles(["ROLE_ADMIN"]);
        $user->setPassword('$2y$13$4Vuo7NolJ79QtXWzUNH2gOA9Nhee/Hp75feFmu0BHTYfM6C7wGZHO');

        $manager->persist($user);

        $manager->flush();
    }
}
