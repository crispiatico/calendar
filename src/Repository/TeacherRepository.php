<?php

namespace App\Repository;

use App\Entity\Teacher;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class TeacherRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Teacher::class);
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
