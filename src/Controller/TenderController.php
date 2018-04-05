<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TenderController
 * @package App\Controller
 */
class TenderController extends AbstractApplicationController
{

    /**
     * @Route("/tender/all", name="all_tender")
     */
    public function allTenders()
    {
        return $this->render('tender/all_tenders.html.twig');
    }
}