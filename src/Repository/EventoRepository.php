<?php

namespace App\Repository;

use App\Entity\Evento;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class EventoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Evento::class);
    }

    public function findByDateAndSearch($date, $search){
        $qb = $this->createQueryBuilder('e');
        if (!empty($search['periodo']) && ($search['periodo']=='passato')) {
          $qb->where('e.start < :value')->setParameter('value', $date);
        } else {
          $qb->where('e.start >= :value')->setParameter('value', $date);
        }
        if (!empty($search['argomento'])) {
            $qb->andWhere('e.topic = :topic')->setParameter('topic', $search['argomento']);
        }
        if (!empty($search['citta'])) {
            $qb->andWhere('e.place = :place')->setParameter('place', $search['citta']);
        }
        if (!empty($search['maestro'])) {
            $qb->andWhere('e.teacher = :teacher')->setParameter('teacher', $search['maestro']);
        }
        if (!empty($search['tipo'])) {
            $qb->andWhere('e.coursetype = :coursetype')->setParameter('coursetype', $search['tipo']);
        }
        if (!empty($search['ordine'])) {
          echo "<div>ORDER = ".$search['ordine']."</div>";
          $qb->orderBy('e.start', $search['ordine']);
        } else {
          $qb->orderBy('e.start', 'ASC');
        }
        return $qb->getQuery()->getResult();
    }
    public function findBySearch($search){
        $qb = $this->createQueryBuilder('e');
        if (!empty($search['argomento'])) {
            $qb->andWhere('e.topic = :topic')->setParameter('topic', $search['argomento']);
        }
        if (!empty($search['citta'])) {
            $qb->andWhere('e.place = :place')->setParameter('place', $search['citta']);
        }
        if (!empty($search['maestro'])) {
            $qb->andWhere('e.teacher = :teacher')->setParameter('teacher', $search['maestro']);
        }
        if (!empty($search['tipo'])) {
            $qb->andWhere('e.coursetype = :coursetype')->setParameter('coursetype', $search['tipo']);
        }
        $qb->orderBy('e.start', 'ASC');
        return $qb->getQuery()->getResult();
    }
    public function findByDate($date)
    {
        return $this->createQueryBuilder('e')
            ->where('e.start > :value')->setParameter('value', $date)
            ->orderBy('e.start', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByDateBooking($date)
    {
        return $this->createQueryBuilder('e')
            ->where('e.start > :value')->setParameter('value', $date)
            ->orderBy('e.start', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }


    public function findByDateTopic($date)
    {
/*

      return $this->createQueryBuilder('e')
          ->select('e.topic')
          ->where('e.start > :value')->setParameter('value', $date)
          ->groupBy('e.topic')
          ->getQuery()
          ->getResult()
          ;
  */
        return $this->createQueryBuilder('e')
            ->select('e.topic, t.name')
            ->innerJoin('e.Topic', 't')
            ->addSelect('t')
            ->andWhere('e.topic = :id')
            ->groupBy('e.topic')
            ->getQuery()
            ->getResult()
        ;

    }
    public function findById($id)
    {
      return $this->createQueryBuilder('e')
          ->where('e.id = :value')->setParameter('value', $id)
          ->getQuery()
          ->getResult()
      ;
    }



}
