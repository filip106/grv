<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class SituationController
 * @package App\Controller
 */
class SituationController extends AbstractApplicationController
{

    /**
     * @Route("/situation/all", name="all_situations")
     */
    public function allSituations()
    {
        return $this->render('situation/all_situations.twig');
    }
}