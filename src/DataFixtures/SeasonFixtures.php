<?php


namespace App\DataFixtures;


use App\Entity\Season;

use Doctrine\Bundle\FixturesBundle\Fixture;

use Doctrine\Persistence\ObjectManager;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;


//Tout d'abord nous ajoutons la classe Factory de FakerPhp

use Faker\Factory;


class SeasonFixtures extends Fixture implements DependentFixtureInterface

{

    public function load(ObjectManager $manager): void
    {/*


        for($i = 1; $i < 5; $i++) {

            $season = new Season();
            $season->setNumber($faker->numberBetween(1, 5));
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(5, true));
            $season->setProgram($this->getReference('program_' . ProgramFixtures::PROGRAMS[$i]['title']));

            $manager->persist($season);
            $this->addReference('season_' . $i, $season);
        }
        $manager->flush();

    */}


    public function getDependencies(): array

    {

        return [

            ProgramFixtures::class,

        ];

    }

}