<?php


namespace App\Manager;


/**
 * Class ApplicationManagerTrait
 * @package App\Manager
 */
trait ApplicationManagerTrait
{

    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveEntity($entity)
    {
        return $this->repository->saveEntity($entity);
    }

    /**
     * @param $entity
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function deleteEntity($entity)
    {
        return $this->repository->deleteEntity($entity);
    }

    /**
     * @return []
     */
    public function findAll()
    {
        return $this->repository->findAll();
    }
}