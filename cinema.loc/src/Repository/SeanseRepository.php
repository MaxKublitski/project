<?php

namespace App\Repository;

use App\Entity\Seanse;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Seanse|null find($id, $lockMode = null, $lockVersion = null)
 * @method Seanse|null findOneBy(array $criteria, array $orderBy = null)
 * @method Seanse[]    findAll()
 * @method Seanse[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SeanseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seanse::class);
    }

    // /**
    //  * @return Seanse[] Returns an array of Seanse objects
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
    public function findOneBySomeField($value): ?Seanse
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
