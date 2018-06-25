<?php

namespace App\Repository;

use App\Entity\Type;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TypeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Type::class);
    }

    public function findByOrder($order = 'ASC')
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.coursetype', $order)
            ->getQuery()
            ->getResult()
        ;
    }

}
