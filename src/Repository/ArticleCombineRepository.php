<?php

namespace App\Repository;

use App\Entity\ArticleCombine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ArticleCombine>
 *
 * @method ArticleCombine|null find($id, $lockMode = null, $lockVersion = null)
 * @method ArticleCombine|null findOneBy(array $criteria, array $orderBy = null)
 * @method ArticleCombine[]    findAll()
 * @method ArticleCombine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleCombineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ArticleCombine::class);
    }

//    /**
//     * @return ArticleCombine[] Returns an array of ArticleCombine objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ArticleCombine
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
