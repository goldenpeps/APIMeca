<?php

namespace App\Repository;

use App\Entity\UtilisateurMecano;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<UtilisateurMecano>
 *
 * @method UtilisateurMecano|null find($id, $lockMode = null, $lockVersion = null)
 * @method UtilisateurMecano|null findOneBy(array $criteria, array $orderBy = null)
 * @method UtilisateurMecano[]    findAll()
 * @method UtilisateurMecano[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurMecanoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UtilisateurMecano::class);
    }

//    /**
//     * @return UtilisateurMecano[] Returns an array of UtilisateurMecano objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?UtilisateurMecano
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
