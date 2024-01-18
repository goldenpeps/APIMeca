<?php

namespace App\Repository;

use App\Entity\DowloadFile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DowloadFile>
 *
 * @method DowloadFile|null find($id, $lockMode = null, $lockVersion = null)
 * @method DowloadFile|null findOneBy(array $criteria, array $orderBy = null)
 * @method DowloadFile[]    findAll()
 * @method DowloadFile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DowloadFileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DowloadFile::class);
    }

//    /**
//     * @return DowloadFile[] Returns an array of DowloadFile objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DowloadFile
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
