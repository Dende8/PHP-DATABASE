<?php

namespace App\Repository;

use App\Entity\Gladiator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Gladiator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gladiator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gladiator[]    findAll()
 * @method Gladiator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GladiatorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gladiator::class);
    }

    // /**
    //  * @return Gladiator[] Returns an array of Gladiator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Gladiator
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
