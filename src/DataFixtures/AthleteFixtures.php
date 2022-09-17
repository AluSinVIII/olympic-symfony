<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use App\Entity\Athlete;
use App\Entity\Sport;

class AthleteFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $athlete = new Athlete();
        $athlete->setLastName('Doe');
        $athlete->setFirstName('John');
        $athlete->setCountry('USA');
        $athlete->setSport($this->getReference(SportFixtures::SPORT));
        $manager->persist($athlete);

        $athlete1 = new Athlete();
        $athlete1->setLastName('Doe');
        $athlete1->setFirstName('Jane');
        $athlete1->setCountry('USA');
        $athlete1->setSport($this->getReference(SportFixtures::SPORT1));
        $manager->persist($athlete1);

        $athlete2 = new Athlete();
        $athlete2->setLastName('Doe');
        $athlete2->setFirstName('Jim');
        $athlete2->setCountry('Mexico');
        $athlete2->setSport($this->getReference(SportFixtures::SPORT2));
        $manager->persist($athlete2);

        $athlete3 = new Athlete();
        $athlete3->setLastName('Doe');
        $athlete3->setFirstName('Jill');
        $athlete3->setCountry('Mexico');
        $athlete3->setSport($this->getReference(SportFixtures::SPORT3));
        $manager->persist($athlete3);

        $athlete4 = new Athlete();
        $athlete4->setLastName('Smith');
        $athlete4->setFirstName('Jessica');
        $athlete4->setCountry('UK');
        $athlete4->setSport($this->getReference(SportFixtures::SPORT4));
        $manager->persist($athlete4);

        $athlete5 = new Athlete();
        $athlete5->setLastName('Smith');
        $athlete5->setFirstName('Julian');
        $athlete5->setCountry('France');
        $athlete5->setSport($this->getReference(SportFixtures::SPORT5));
        $manager->persist($athlete5);

        $athlete6 = new Athlete();
        $athlete6->setLastName('Smith');
        $athlete6->setFirstName('Usain');
        $athlete6->setCountry('Italia');
        $athlete6->setSport($this->getReference(SportFixtures::SPORT6));
        $manager->persist($athlete6);

        $athlete7 = new Athlete();
        $athlete7->setLastName('Smith');
        $athlete7->setFirstName('Roger');
        $athlete7->setCountry('Italia');
        $athlete7->setSport($this->getReference(SportFixtures::SPORT7));
        $manager->persist($athlete7);

        $athlete8 = new Athlete();
        $athlete8->setLastName('Sinclair');
        $athlete8->setFirstName('Helen');
        $athlete8->setCountry('Ukrain');
        $athlete8->setSport($this->getReference(SportFixtures::SPORT8));
        $manager->persist($athlete8);

        $athlete9 = new Athlete();
        $athlete9->setLastName('Sinclair');
        $athlete9->setFirstName('Marshall');
        $athlete9->setCountry('Russia');
        $athlete9->setSport($this->getReference(SportFixtures::SPORT9));
        $manager->persist($athlete9);

        $manager->flush();
    }
    public function getDependencies(){
        return[SportFixtures::class];
    }
}
