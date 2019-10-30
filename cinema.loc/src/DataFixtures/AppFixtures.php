<?php

namespace App\DataFixtures;

use App\Entity\Hall;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('1');
            $hall->setCathegory('1');
            $hall->setPrice('10');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('2');
            $hall->setCathegory('1');
            $hall->setPrice('10');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('3');
            $hall->setCathegory('1');
            $hall->setPrice('10');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('1');
            $hall->setCathegory('2');
            $hall->setPrice('13');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('2');
            $hall->setCathegory('2');
            $hall->setPrice('13');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('3');
            $hall->setCathegory('2');
            $hall->setPrice('13');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('1');
            $hall->setCathegory('3');
            $hall->setPrice('15');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('2');
            $hall->setCathegory('3');
            $hall->setPrice('15');
            $manager->persist($hall);
        }

        for ($i = 0; $i < 10; $i++){
            $hall = new Hall();
            $hall->setNumber($i + 1);
            $hall->setRow('3');
            $hall->setCathegory('3');
            $hall->setPrice('15');
            $manager->persist($hall);
        }

        $manager->flush();
    }
}
