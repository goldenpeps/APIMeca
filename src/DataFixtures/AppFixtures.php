<?php

namespace App\DataFixtures;
use App\Entity\ModeleTest;
use App\Entity\MonTypeT;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;
class AppFixtures extends Fixture
{
    private Generator $faker;

    function __construct() {
        $this->faker = Factory::create("fr_FR");
    }
    public function load(ObjectManager $manager): void
    {
   
        for ($i = 0; $i < 100; $i++) {
            $modeleTest = new ModeleTest();
            $modeleTest->setName($this->faker->firstName($gender = 'male'|'female'));
            $modeleTest->setAge($this->faker->buildingNumber($min = 10, $max = 90));
            $modeleTest->setCreateAt(new DateTimeImmutable());
            $modeleTest->setUpdateAt(new DateTimeImmutable());
            $modeleTest->setStatus("DLB");
            $listModelesTest[] = $modeleTest;

           
        }

        for ($i = 0; $i < 10; $i++) {
            $modeleT = new MonTypeT();
            $modeleTestTable = $listModelesTest[array_rand($listModelesTest,1)];
            $modeleT->setIdLib($this->faker->firstName($gender = 'male'|'female'));
            $modeleT->addModeleTest($modeleTestTable);
            $modeleTest->setMonTypeTId($modeleT);
            $manager->persist($modeleTestTable);
            $manager->persist($modeleT);

        }
    //    foreach($modeleT as $key ==$value){
    //     $manager->persist($value);
    //    }
        $manager->flush();
    }
}
