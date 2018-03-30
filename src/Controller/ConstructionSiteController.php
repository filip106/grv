<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConstructionSiteController
 * @package App\Controller
 */
class ConstructionSiteController extends AbstractController
{

    /**
     * @Route("/construction/all", name="all_construction_sites")
     */
    public function allVehicles()
    {
        return $this->render('construction/all_construction_sites.html.twig', array());
    }
}