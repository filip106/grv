<?php


namespace App\Manager;

use App\Repository\MaterialRepository;

/**
 * Class MaterialManager
 * @package App\Manager
 */
class MaterialManager extends AbstractApplicationManager
{
    use ApplicationManagerTrait;

    /**
     * @var MaterialRepository
     */
    private $repository;

    /**
     * MaterialManager constructor.
     * @param MaterialRepository $repository
     */
    public function __construct(MaterialRepository $repository)
    {
        $this->repository = $repository;
    }

}