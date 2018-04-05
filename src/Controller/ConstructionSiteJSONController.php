<?php


namespace App\Controller;

use App\Entity\ConstructionSite;
use App\Manager\ConstructionSiteManager;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConstructionSiteJSONController
 * @package App\Controller
 */
class ConstructionSiteJSONController extends AbstractApplicationController
{

    /**
     * @var ConstructionSiteManager
     */
    private $manager;

    /**
     * ConstructionSiteManager constructor.
     * @param ConstructionSiteManager $manager
     */
    public function __construct(ConstructionSiteManager $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * @Route("/api/construction/site/", methods={"GET"}, name="api_construction_site_all")
     * @return Response
     */
    public function allConstructionSites()
    {
        return new Response($this->serializeEntity($this->manager->findAll()), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/construction/site/{id}", methods={"GET"}, name="api_construction_site_single")
     * @param ConstructionSite $constructionSite
     * @return Response
     */
    public function singleConstructionSite(ConstructionSite $constructionSite)
    {
        return new Response($this->serializeEntity($constructionSite), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/construction/site/", methods={"POST"}, name="api_construction_site_save")
     * @param Request $request
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveConstructionSite(Request $request)
    {
        $constructionSite = $this->deserializeEntity($request->getContent(), ConstructionSite::class);

        return new Response($this->serializeEntity($this->manager->saveEntity($constructionSite)), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/construction/site/{id}", methods={"PUT", "PATCH"}, name="api_construction_site_update")
     * @param Request $request
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateConstructionSite(Request $request)
    {
        $constructionSite = $this->deserializeEntity($request->getContent(), ConstructionSite::class);

        return new Response($this->serializeEntity($this->manager->updateEntity($constructionSite)), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/construction/site/{id}", methods={"DELETE"}, name="api_construction_site_delete")
     * @param ConstructionSite $constructionSite
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function deleteConstructionSite(ConstructionSite $constructionSite)
    {
        return new Response($this->serializeEntity($this->manager->deleteEntity($constructionSite)), 200, ['Content-Type' => 'application/json']);
    }
}