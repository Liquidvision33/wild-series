<?php


namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{

       /* public const PROGRAMS = [
            [
                'title' => '1The walking dead',
                'name' => 'test',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'poster',
                'country' => 'USA',
                'year' => 1990,
                'category' => 'Action',
            ],
            [
                'title' => '2The walking dead',
                'name' => 'test',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'poster',
                'country' => 'USA',
                'year' => 1990,
                'category' => 'Action',
            ],
            [
                'title' => '3The walking dead',
                'name' => 'test',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'poster',
                'country' => 'USA',
                'year' => 1990,
                'category' => 'Action',
            ],
            [
                'title' => '4The walking dead',
                'name' => 'test',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'poster',
                'country' => 'USA',
                'year' => 1990,
                'category' => 'Action',
            ],
            [
                'title' => '5The walking dead',
                'name' => 'test',
                'synopsis' => 'Des zombies envahissent la terre',
                'poster' => 'poster',
                'country' => 'USA',
                'year' => 1990,
                'category' => 'Action',
            ],

    ];*/

        public function load(ObjectManager $manager)
        {/*
        $faker = Factory::create();

        foreach (self::PROGRAMS as $program) {
           $programForFixture = new Program();
           $programForFixture
               ->setTitle($program['title'])
                ->setSynopsis($program['synopsis'])
                ->setPoster($program['poster'])
               ->setName($program['name'])
                ->setCategory($this->getReference('category_' . $program['category']));
            $this->addReference('program_' . $program['title'], $programForFixture);
            $manager->persist($programForFixture);

        }

        $manager->flush();
    */}

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

}