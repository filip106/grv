<?php


namespace App\Repository;

/**
 * Trait ApplicationRepositoryTrait
 * @package App\Repository
 */
trait ApplicationRepositoryTrait
{

    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateEntity($entity)
    {
        $this->_em->merge($entity);
        $this->_em->flush($entity);

        return $entity;
    }

    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveEntity($entity)
    {
        $this->_em->persist($entity);
        $this->_em->flush($entity);

        return $entity;
    }

    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function deleteEntity($entity)
    {
        $this->_em->remove($entity);
        $this->_em->flush($entity);

        return $entity;
    }
}