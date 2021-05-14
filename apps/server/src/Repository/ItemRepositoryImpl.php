<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


class ItemRepositoryImpl extends ServiceEntityRepository implements ItemRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Item::class);
    }

    public function findByAmountZero()
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.amount = 0')
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByAmountGtZero()
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.amount > 0')
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function findByAmountGt($amount)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.amount > :val')
            ->setParameter('val', $amount)
            ->orderBy('i.id', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

}
