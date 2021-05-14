<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 50; $i++) {
            $customer = new Item();
            $customer->setName('Produkt ' . $i);
            $customer->setAmount(rand(0, 12));
            $manager->persist($customer);
        }

        $manager->flush();
    }
}
