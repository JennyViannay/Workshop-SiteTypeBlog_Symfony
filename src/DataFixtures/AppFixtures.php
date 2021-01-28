<?php

namespace App\DataFixtures;

use App\Entity\Article;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create();

        for($i = 0 ; $i < 10 ; $i++) {
            $article = new Article();
            $article->setTitle($faker->word)
            ->setContent($faker->paragraph(5))
            ->setCreatedAt(new DateTime())
            ->setIllustration('https://img.freepik.com/vecteurs-libre/blog-concept-illustration_114360-164.jpg?size=626&ext=jpg');
    
            $manager->persist($article);
        }

        $manager->flush();
    }
}
