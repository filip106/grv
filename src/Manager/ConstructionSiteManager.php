<?php


namespace App\Manager;

use App\Entity\ConstructionSite;
use App\Repository\ConstructionSiteRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Class ConstructionSiteManager
 * @package App\Manager
 */
class ConstructionSiteManager extends AbstractApplicationManager
{

    use ApplicationManagerTrait;

    /**
     * @var ConstructionSiteRepository
     */
    private $repository;

    /**
     * ConstructionSiteManager constructor.
     * @param ConstructionSiteRepository $repository
     */
    public function __construct(ConstructionSiteRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @param ConstructionSite $constructionSite
     * @return mixed
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateEntity(ConstructionSite $constructionSite)
    {
        if (!$constructionSite->getId()) {
            throw new NotFoundHttpException();
        }

        $dbConstructionSite = $this->repository->findOneBy(['id' => $constructionSite->getId()]);

        if (!$dbConstructionSite) {
            throw new NotFoundHttpException();
        }
        $this->updateFields($dbConstructionSite, $constructionSite);

        return $this->repository->updateEntity($dbConstructionSite);
    }

    /**
     * @param ConstructionSite $dbConstructionSite
     * @param ConstructionSite $constructionSite
     */
    private function updateFields(ConstructionSite $dbConstructionSite, ConstructionSite $constructionSite)
    {
        $dbConstructionSite->setName($constructionSite->getName());
    }


}