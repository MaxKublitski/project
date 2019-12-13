<?php

namespace App\Repository;

use App\Entity\Seanse;
use App\Entity\Movies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityRepository;

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

    /**
     * @param $date
     * @return array
     */
    public function findByUnique($date): array
    {
        $em = $this->getEntityManager();
//        $query = $em->createQuery(
//            'SELECT DISTINCT s.movie_id, s.date
//            FROM App\Entity\Seanse s
//            ORDER BY s.movie_id');

//        $query = $em->createQuery(
//            'SELECT DISTINCT s.date, s.movie
//            FROM App\Entity\Seanse s
//            WHERE s.date IN (
//                SELECT d.date
//                FROM App\Entity\Seanse d
//                WHERE d.date = :date)'
//        )->setParameter('date', $today);

        $query = $em->createQuery(
            'SELECT DISTINCT s.date, i.id, m.id, m.title, m.img
            FROM App\Entity\Seanse s JOIN s.movie i JOIN App\Entity\Movies m
            WHERE s.date = :date
            AND i.id = m.id'
        )->setParameter('date', $date);

        return $query->getResult();
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


//    public function findOneBySomeField($value): ?Seanse
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
