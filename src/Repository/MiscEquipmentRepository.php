<?php

namespace App\Repository;

use App\Entity\MiscEquipment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MiscEquipment|null find($id, $lockMode = null, $lockVersion = null)
 * @method MiscEquipment|null findOneBy(array $criteria, array $orderBy = null)
 * @method MiscEquipment[]    findAll()
 * @method MiscEquipment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MiscEquipmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MiscEquipment::class);
    }

    // /**
    //  * @return MiscEquipment[] Returns an array of MiscEquipment objects
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
    public function findOneBySomeField($value): ?MiscEquipment
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
