<?php
/**
 * Hello World controller
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HelloWorldController
 *
 * @Route("/hello")
 */
class HelloWorldController
{
    /**
     * Index action.
     *
     * @param string $name Input parameter
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @Route(
     *     "/{name}",
     *     name="helloworld_index",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"},
     * )
     */

    public function index(string $name): Response
    {
        return new Response('Hello '.$name.'!');
    }
}
