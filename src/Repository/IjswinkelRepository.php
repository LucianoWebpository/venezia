<?php

namespace App\Repository;

use App\Entity\Ijswinkel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Ijswinkel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ijswinkel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ijswinkel[]    findAll()
 * @method Ijswinkel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IjswinkelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ijswinkel::class);
    }

    // /**
    //  * @return Ijswinkel[] Returns an array of Ijswinkel objects
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
    public function findOneBySomeField($value): ?Ijswinkel
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
