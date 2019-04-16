<?php
/**
 * Hello World controller
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController
 *
 * @Route("/hello-world")
 */
class HelloWorldController extends AbstractController
{
    /**
     * Index action.
     *
     * @param string $name Input parameter
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *<?php

require_once __DIR__.'/Animal.php';

class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function makeSound(): void
    {
        echo 'Meow...';
    }
}
     * @Route(
     *     "/{name}",
     *     name="helloworld_index",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"},
     * )
     */

    public function index(string $name): Response
    {
        return $this->render(
            'hello-world/index.html.twig',
            ['name' => $name]
        );
    }
}

