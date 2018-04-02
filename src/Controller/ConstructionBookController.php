<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class ConstructionBookController
 * @package App\Controller
 */
class ConstructionBookController extends AbstractController
{
    /**
     * @Route("/construction/book/all", name="all_construction_books")
     */
    public function allConstructionBooks()
    {
        return $this->render('construction_book/all_construction_books.html.twig');
    }
}