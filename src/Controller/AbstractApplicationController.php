<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;


/**
 * Class ApplicationController
 * @package App\Controller
 */
abstract class AbstractApplicationController extends AbstractController
{

    /** @var Serializer */
    protected $serializer;

    public function __construct()
    {
        $this->serializer = new Serializer(array(new ObjectNormalizer()), array('json' => new JsonEncoder()));
    }

    /**
     * @param $entity
     * @return bool|float|int|string
     */
    protected function serializeEntity($entity)
    {
        return $this->serializer->serialize($entity, 'json');
    }

    /**
     * @param $data
     * @param $class
     * @return object
     */
    protected function deserializeEntity($data, $class)
    {
        return $this->serializer->deserialize($data, $class, 'json');
    }
}