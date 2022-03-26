<?php

namespace App\Repository;

use App\Entity\AutomobileMarks;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AutomobileMarks|null find($id, $lockMode = null, $lockVersion = null)
 * @method AutomobileMarks|null findOneBy(array $criteria, array $orderBy = null)
 * @method AutomobileMarks[]    findAll()
 * @method AutomobileMarks[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AutomobileMarksRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AutomobileMarks::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(AutomobileMarks $entity, bool $flush = true): void
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
    public function remove(AutomobileMarks $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }




    // /**
    //  * @return AutomobileMarks[] Returns an array of AutomobileMarks objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AutomobileMarks
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
