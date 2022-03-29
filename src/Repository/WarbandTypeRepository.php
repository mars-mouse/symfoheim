<?php

namespace App\Repository;

use App\Entity\WarbandType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method WarbandType|null find($id, $lockMode = null, $lockVersion = null)
 * @method WarbandType|null findOneBy(array $criteria, array $orderBy = null)
 * @method WarbandType[]    findAll()
 * @method WarbandType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarbandTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WarbandType::class);
    }

    // /**
    //  * @return WarbandType[] Returns an array of WarbandType objects
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
    public function findOneBySomeField($value): ?WarbandType
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
