<?php

namespace App\Repository;

use App\Entity\Warband;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Warband|null find($id, $lockMode = null, $lockVersion = null)
 * @method Warband|null findOneBy(array $criteria, array $orderBy = null)
 * @method Warband[]    findAll()
 * @method Warband[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WarbandRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Warband::class);
    }

    // /**
    //  * @return Warband[] Returns an array of Warband objects
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
    public function findOneBySomeField($value): ?Warband
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
