<?php

namespace App\Repository;

use App\Entity\Statline;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Statline|null find($id, $lockMode = null, $lockVersion = null)
 * @method Statline|null findOneBy(array $criteria, array $orderBy = null)
 * @method Statline[]    findAll()
 * @method Statline[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StatlineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Statline::class);
    }

    // /**
    //  * @return Statline[] Returns an array of Statline objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Statline
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
