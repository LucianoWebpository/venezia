<?php

namespace App\Repository;

use App\Entity\Ijsmaker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ijsmaker|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ijsmaker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ijsmaker[]    findAll()
 * @method Ijsmaker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IjsmakerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ijsmaker::class);
    }

    // /**
    //  * @return Ijsmaker[] Returns an array of Ijsmaker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ijsmaker
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
