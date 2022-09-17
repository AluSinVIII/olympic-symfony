<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Sport;
use App\Entity\Category;

class SportFixtures extends Fixture implements DependentFixtureInterface
{
    public const SPORT='j';
    public const SPORT1='k';
    public const SPORT2='l';
    public const SPORT3='m';
    public const SPORT4='n';
    public const SPORT5='o';
    public const SPORT6='p';
    public const SPORT7='q';
    public const SPORT8='r';
    public const SPORT9='s';

    public function load(ObjectManager $manager): void
    {
        $sport = new Sport();
        $sport->setName('natation');
        $sport->setCategory($this->getReference(CategoryFixtures::CAT1));
        $sport->setDescription('on nage');
        $sport->setLocation('piscine');
        $sport->setType('olympique');
        $manager->persist($sport);
        $this->addReference(self::SPORT,$sport);

        $sport1 = new Sport();
        $sport1->setName('aviron');
        $sport1->setCategory($this->getReference(CategoryFixtures::CAT1));
        $sport1->setDescription('on rame');
        $sport1->setLocation('fleuve');
        $sport1->setType('both');
        $manager->persist($sport1);
        $this->addReference(self::SPORT1,$sport1);

        $sport2 = new Sport();
        $sport2->setName('waterpolo');
        $sport2->setCategory($this->getReference(CategoryFixtures::CAT1));
        $sport2->setDescription('on envoie le ballon dans l\'eau');
        $sport2->setLocation('piscine');
        $sport2->setType('olympique');
        $manager->persist($sport2);
        $this->addReference(self::SPORT2,$sport2);

        $sport3 = new Sport();
        $sport3->setName('tennis');
        $sport3->setCategory($this->getReference(CategoryFixtures::CAT2));
        $sport3->setDescription('on tape dans la balle');
        $sport3->setLocation('court');
        $sport3->setType('both');
        $manager->persist($sport3);
        $this->addReference(self::SPORT3,$sport3);

        $sport4 = new Sport();
        $sport4->setName('tennis de table');
        $sport4->setCategory($this->getReference(CategoryFixtures::CAT2));
        $sport4->setDescription('on tape dans la petite balle');
        $sport4->setLocation('table');
        $sport4->setType('both');
        $manager->persist($sport4);
        $this->addReference(self::SPORT4,$sport4);

        $sport5 = new Sport();
        $sport5->setName('basket fauteuil');
        $sport5->setCategory($this->getReference(CategoryFixtures::CAT4));
        $sport5->setDescription('on essaye de rattraper le ballon');
        $sport5->setLocation('terrain');
        $sport5->setType('paralympique');
        $manager->persist($sport5);
        $this->addReference(self::SPORT5,$sport5);

        $sport6 = new Sport();
        $sport6->setName('basket');
        $sport6->setCategory($this->getReference(CategoryFixtures::CAT4));
        $sport6->setDescription('on rattrape le ballon');
        $sport6->setLocation('terrain');
        $sport6->setType('olympique');
        $manager->persist($sport6);
        $this->addReference(self::SPORT6,$sport6);

        $sport7 = new Sport();
        $sport7->setName('handball');
        $sport7->setCategory($this->getReference(CategoryFixtures::CAT4));
        $sport7->setDescription('on lance le ballon');
        $sport7->setLocation('terrain');
        $sport7->setType('olympique');
        $manager->persist($sport7);
        $this->addReference(self::SPORT7,$sport7);

        $sport8 = new Sport();
        $sport8->setName('athletisme');
        $sport8->setCategory($this->getReference(CategoryFixtures::CAT3));
        $sport8->setDescription('on court');
        $sport8->setLocation('piste');
        $sport8->setType('les deux');
        $manager->persist($sport8);
        $this->addReference(self::SPORT8,$sport8);

        $sport9 = new Sport();
        $sport9->setName('triathlon');
        $sport9->setCategory($this->getReference(CategoryFixtures::CAT3));
        $sport9->setDescription('on court, mais pas seulement');
        $sport9->setLocation('piste mais pas seulement');
        $sport9->setType('olympique');
        $manager->persist($sport9);
        $this->addReference(self::SPORT9,$sport9);

        $manager->flush();
    }

    public function getDependencies(){
        return[CategoryFixtures::class];
    }
}
