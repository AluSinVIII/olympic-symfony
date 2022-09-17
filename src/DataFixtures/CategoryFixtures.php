<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public const CAT1='a';
    public const CAT2='b';
    public const CAT3='c';
    public const CAT4='d';

    public function load(ObjectManager $manager): void
    {

        $category = new Category();
        $category->setName('eau');
        $manager->persist($category);
        $this->addReference(self::CAT1,$category);

        $category2 = new Category();
        $category2->setName('raquette');
        $manager->persist($category2);
        $this->addReference(self::CAT2,$category2);

        $category3 = new Category();
        $category3->setName('course');
        $manager->persist($category3);
        $this->addReference(self::CAT3,$category3);

        $category4 = new Category();
        $category4->setName('ballon');
        $manager->persist($category4);
        $this->addReference(self::CAT4,$category4);

        $manager->flush();
    }
}
