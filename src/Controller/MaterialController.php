<?php


namespace App\Controller;

use App\Entity\Material;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class MaterialController
 * @package App\Controller
 */
class MaterialController extends AbstractApplicationController
{

    /**
     * @Route("/material/all", name="all_materials_page")
     * @return Response
     */
    public function allMaterials()
    {
        return $this->render('material/all_materials.html.twig');
    }

    /**
     * @Route("/material/add", name="add_materials_page")
     * @return Response
     */
    public function addMaterials()
    {
        return $this->render('material/add_material.html.twig');
    }

    /**
     * @Route("/material/edit/{id}", name="edit_material_page")
     * @param Material $material
     * @return Response
     */
    public function editMaterials(Material $material)
    {
        return $this->render('material/edit_material.html.twig', array('material' => $material));
    }
}