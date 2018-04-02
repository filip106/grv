<?php


namespace App\Controller;

use App\Entity\Material;
use App\Manager\MaterialManager;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MaterialJSONController
 * @package App\Controller
 */
class MaterialJSONController extends AbstractApplicationController
{

    /**
     * @var MaterialManager
     */
    private $manager;

    /**
     * MaterialJSONController constructor.
     * @param MaterialManager $manager
     */
    public function __construct(MaterialManager $manager)
    {
        parent::__construct();

        $this->manager = $manager;
    }

    /**
     * @Route("/api/material/", methods={"GET"}, name="api_material_all")
     * @return Response
     */
    public function allMaterials()
    {
        return new Response($this->serializeEntity($this->manager->findAll()), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/material/{id}", methods={"GET"}, name="api_material_single")
     * @param Material $material
     * @return Response
     */
    public function singleMaterial(Material $material)
    {
        return new Response($this->serializeEntity($material), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/material/", methods={"POST"}, name="api_material_save")
     * @param Request $request
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveMaterial(Request $request)
    {
        $material = $this->deserializeEntity($request->getContent(), Material::class);

        return new Response($this->serializeEntity($this->manager->saveEntity($material)), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/material/{id}", methods={"PUT", "PATCH"}, name="api_material_update")
     * @param Material $material
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function updateMaterial(Material $material)
    {
        return new Response($this->serializeEntity($this->manager->updateEntity($material)), 200, ['Content-Type' => 'application/json']);
    }

    /**
     * @Route("/api/material/{id}", methods={"DELETE"}, name="api_material_delete")
     * @param Material $material
     * @return Response
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function deleteMaterial(Material $material)
    {
        return new Response($this->serializeEntity($this->manager->deleteEntity($material)), 200, ['Content-Type' => 'application/json']);
    }
}