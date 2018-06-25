<?php

namespace App\Repository;

use App\Entity\Place;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class PlaceRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Place::class);
    }

    public function findByOrder($order = 'ASC')
    {
        return $this->createQueryBuilder('e')
            ->orderBy('e.name', $order)
            ->getQuery()
            ->getResult()
        ;
    }
}
