<?php

namespace App\Repository;

use App\Entity\WarriorRank;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WarriorRank|null find($id, $lockMode = null, $lockVersion = null)
 * @method WarriorRank|null findOneBy(array $criteria, array $orderBy = null)
 * @method WarriorRank[]    findAll()
 * @method WarriorRank[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarriorRankRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WarriorRank::class);
    }

    // /**
    //  * @return WarriorRank[] Returns an array of WarriorRank objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WarriorRank
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
