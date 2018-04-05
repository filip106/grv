<?php


namespace App\Manager;

use App\Entity\Material;
use App\Repository\MaterialRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class MaterialManager
 * @package App\Manager
 */
class MaterialManager extends AbstractApplicationManager
{
    use ApplicationManagerTrait;

    /**
     * @var MaterialRepository
     */
    private $repository;

    /**
     * MaterialManager constructor.
     * @param MaterialRepository $repository
     */
    public function __construct(MaterialRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param Material $material
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateEntity(Material $material)
    {
        if (!$material->getId()) {
            throw new NotFoundHttpException();
        }

        $dbMaterial = $this->repository->findOneBy(['id' => $material->getId()]);

        if (!$dbMaterial) {
            throw new NotFoundHttpException();
        }
        $this->updateFields($dbMaterial, $material);

        return $this->repository->updateEntity($dbMaterial);
    }

    /**
     * @param Material $dbMaterial
     * @param Material $material
     */
    private function updateFields(Material $dbMaterial, Material $material)
    {
        $dbMaterial->setName($material->getName());
        $dbMaterial->setPrice($material->getPrice());
        $dbMaterial->setDescription($material->getDescription());
    }

}