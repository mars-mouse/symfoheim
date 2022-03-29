<?php

namespace App\Repository;

use App\Entity\CloseCombatWeapon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CloseCombatWeapon|null find($id, $lockMode = null, $lockVersion = null)
 * @method CloseCombatWeapon|null findOneBy(array $criteria, array $orderBy = null)
 * @method CloseCombatWeapon[]    findAll()
 * @method CloseCombatWeapon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CloseCombatWeaponRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CloseCombatWeapon::class);
    }

    // /**
    //  * @return CloseCombatWeapon[] Returns an array of CloseCombatWeapon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CloseCombatWeapon
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
