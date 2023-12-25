<?php

namespace App\DataFixtures;

use App\Entity\ArticlePrice;
use App\Entity\ArticleCombine;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $articleCombine = new ArticleCombine();
        $manager->persist($articleCombine);

        $articlePrice = new ArticlePrice();
        $articlePrice->setArticleCombine($articleCombine);
        $articlePrice->setType('c');
        $manager->persist($articlePrice);

        $manager->flush();
    }
}
