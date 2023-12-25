<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Repository\ArticleCombineRepository;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity(repositoryClass: ArticleCombineRepository::class)]
class ArticleCombine
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /** @var Collection<int, ArticlePrice> */
    #[ORM\OneToMany(targetEntity: ArticlePrice::class, mappedBy: 'articleCombine', cascade: ['persist'])]
    #[ORM\OrderBy(['type' => 'ASC', 'qty' => 'ASC', 'id' => 'ASC'])]
    private Collection $articlePriceOptions;

    public function __construct()
    {
        $this->articlePriceOptions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getArticlePriceConsumerOptions(): mixed
    {
        return $this->articlePriceOptions->filter(
            function (ArticlePrice $articlePrice) {
                return 'c' == $articlePrice->getType();
            }
        );
    }
}
