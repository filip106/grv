<?php

namespace App\Repository;

use App\Entity\ConstructionSite;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ConstructionSite|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConstructionSite|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConstructionSite[]    findAll()
 * @method ConstructionSite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConstructionSiteRepository extends AbstractApplicationRepository
{
    use ApplicationRepositoryTrait;

    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ConstructionSite::class);
    }


    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('m')
            ->where('m.something = :value')->setParameter('value', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}
