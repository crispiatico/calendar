<?php

namespace App\Repository;

use App\Entity\Topic;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TopicRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Topic::class);
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
