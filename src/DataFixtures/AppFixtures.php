<?php

namespace App\DataFixtures;
use Faker\Factory;
use Faker\Generator;
use App\Entity\Piece;
use DateTimeImmutable;
use App\Entity\MonTypeT;
use App\Entity\TypePiece;
use App\Entity\ModeleTest;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

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
            // $manager->persist($listModelesTest[]);

           
        }
        foreach($modeleTest as $key=>$modeleTestvalue) {
            $modeleT = $modeleTestvalue;
            while($modeleT->getId()==$listModelesTest->getId()){
                
                $modeleT= $listModelesTest[array_rand($listModelesTest,1)];
            }
            $modeleTestvalue->addModeleTest($modeleT);
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

  
    // foreach($piece as $key=>$pieceValue) {
    //     $typePiece = $pieceValue;
    //     while($modeleT->getId()==$listePiece->getId()){ 
    //         $typePiece= $listePiece[array_rand($listePiece,1)];
    //     }
    //     $pieceValue->addReferenceTablePiece($typePiece);
    // }

    for ($i = 0; $i < 10; $i++) {
        $typePiece = new TypePiece();
        $typePiece->setLibelleTypePiece($this->faker->firstName($gender = 'male'|'female'));
        // $typePiece->addReferenceTablePiece($ListeTypePiece);
        $listeTypePiece[] = $typePiece;
   
        $manager->persist($typePiece);
    }
    for ($i = 0; $i < 100; $i++) {
        $piece = new Piece();
        $piece->setNom($this->faker->firstName($gender = 'male'|'female'));
        $piece->setReference($this->faker->firstName($gender = 'male'|'female'));
        $piece->setPrix($this->faker->buildingNumber($min = 10.0, $max = 90.0));
        $typePiece = $listeTypePiece[array_rand($listeTypePiece,1)];

        $piece->setIdTypePiece($typePiece);
        $manager->persist($piece);
        
    }

        $manager->flush();
    }
}
