<?php

namespace App\Repository;

use App\Entity\ModeleTest;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ModeleTest>
 *
 * @method ModeleTest|null find($id, $lockMode = null, $lockVersion = null)
 * @method ModeleTest|null findOneBy(array $criteria, array $orderBy = null)
 * @method ModeleTest[]    findAll()
 * @method ModeleTest[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ModeleTestRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ModeleTest::class);
    }

//    /**
//     * @return ModeleTest[] Returns an array of ModeleTest objects
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

//    public function findOneBySomeField($value): ?ModeleTest
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
