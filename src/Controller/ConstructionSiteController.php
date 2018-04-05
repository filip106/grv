<?php


namespace App\Controller;

use App\Entity\ConstructionSite;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConstructionSiteController
 * @package App\Controller
 */
class ConstructionSiteController extends AbstractApplicationController
{

    /**
     * @Route("/construction/site/all", name="all_construction_sites_page")
     * @return Response
     */
    public function allConstructionSites()
    {
        return $this->render('construction/all_construction_sites.html.twig', array());
    }

    /**
     * @Route("/construction/site/add", name="add_construction_site_page")
     * @return Response
     */
    public function addConstructionSite()
    {
        return $this->render('construction/add_construction_sites.html.twig', array());
    }

    /**
     * @Route("/construction/site/edit/{id}", name="edit_construction_site_page")
     * @param ConstructionSite $constructionSite
     * @return Response
     */
    public function editConstructionSite(ConstructionSite $constructionSite)
    {
        return $this->render('construction/edit_construction_sites.html.twig', array('constructionSite' => $constructionSite));
    }

}