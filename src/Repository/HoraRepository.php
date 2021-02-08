<?php

namespace App\Repository;

use App\Entity\Hora;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Hora|null find($id, $lockMode = null, $lockVersion = null)
 * @method Hora|null findOneBy(array $criteria, array $orderBy = null)
 * @method Hora[]    findAll()
 * @method Hora[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HoraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hora::class);
    }

    // /**
    //  * @return Hora[] Returns an array of Hora objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Hora
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
