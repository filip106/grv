<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class VehicleController
 * @package App\Controller\Vehicle
 */
class VehicleController extends AbstractController
{

    /**
     * @Route("/vehicle/all", name="all_vehicles")
     */
    public function allVehicles()
    {
        return $this->render('vehicle/all_vehicle.html.twig', array());
    }
}