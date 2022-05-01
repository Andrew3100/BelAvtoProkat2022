<?php

namespace App\Repository;

use App\Entity\CriterionWeight;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CriterionWeight|null find($id, $lockMode = null, $lockVersion = null)
 * @method CriterionWeight|null findOneBy(array $criteria, array $orderBy = null)
 * @method CriterionWeight[]    findAll()
 * @method CriterionWeight[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CriterionWeightRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CriterionWeight::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(CriterionWeight $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(CriterionWeight $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return CriterionWeight[] Returns an array of CriterionWeight objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CriterionWeight
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
