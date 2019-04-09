<?php
/**
 * Test controller.
 */

namespace App\Controller;

use App\Repository\TestRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TestController.
 *
 * @Route("/test")
 */
class TestController extends AbstractController
{
    /**
     * @param \App\Repository\TestRepository $repository Repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     *
     * @Route(
     *     "/",
     *     name="test_index",
     * )
     */
    public function index(TestRepository $repository): Response
    {
        return $this->render(
            'test/index.html.twig',
            ['data' => $repository->findAll()]
        );
    }

    /**
     * @param \App\Repository\TestRepository $repository Repository
     * @param int                            $id         Element id
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{id}",
     *     name="test_view",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function view(TestRepository $repository, int $id): Response
    {
        return $this->render(
            'test/view.html.twig',
            ['item' => $repository->findById($id)]
        );
    }
}
