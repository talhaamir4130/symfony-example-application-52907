<?php

namespace App\Entity;

use App\Entity\ArticleCombine;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ArticlePriceRepository;

#[ORM\Entity(repositoryClass: ArticlePriceRepository::class)]
class ArticlePrice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: ArticleCombine::class, inversedBy: 'articlePriceOptions', cascade: ['persist'])]
    #[ORM\JoinColumn(name: 'articleCombineId', referencedColumnName: 'id', nullable: false)]
    private ?ArticleCombine $articleCombine = null;

     #[ORM\Column(type: 'string', length: 5)]
     private ?string $type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleCombine(): ?ArticleCombine
    {
        return $this->articleCombine;
    }

    public function setArticleCombine(?ArticleCombine $articleCombine): self
    {
        $this->articleCombine = $articleCombine;

        return $this;
    }

    
    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
