<?php

namespace App\Repository;

use App\Entity\Booking;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class BookingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Booking::class);
    }

    public function findByEvent($event)
    {
        return $this->createQueryBuilder('e')
            ->where('e.event = :value')->setParameter('value', $event)
            ->orderBy('e.name', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}
