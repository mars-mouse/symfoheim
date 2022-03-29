<?php

namespace App\Repository;

use App\Entity\MissileWeapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MissileWeapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method MissileWeapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method MissileWeapon[]    findAll()
 * @method MissileWeapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MissileWeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MissileWeapon::class);
    }

    // /**
    //  * @return MissileWeapon[] Returns an array of MissileWeapon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MissileWeapon
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
