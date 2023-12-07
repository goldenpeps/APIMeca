<?php

namespace App\Repository;

use App\Entity\MonTypeT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MonTypeT>
 *
 * @method MonTypeT|null find($id, $lockMode = null, $lockVersion = null)
 * @method MonTypeT|null findOneBy(array $criteria, array $orderBy = null)
 * @method MonTypeT[]    findAll()
 * @method MonTypeT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MonTypeTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MonTypeT::class);
    }

//    /**
//     * @return MonTypeT[] Returns an array of MonTypeT objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MonTypeT
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
