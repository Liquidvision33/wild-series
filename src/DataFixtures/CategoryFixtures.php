<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    const CATEGORIES =  [
        'Action',
        'Aventure',
        'Animation',
        'Fantastic',
        'Horreur',
    ];

    public function load(ObjectManager $manager)
    {/*
        for ($i = 0; $i < count(self::CATEGORIES); $i++) {

            $category = new Category();
            $category->setName(self::CATEGORIES[$i]);
            $categoryName = $category->getName();

            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        $manager->flush();
    */}

    public function getDependencies()
    {
        return [
            AppFixtures::class,
        ];
    }
}