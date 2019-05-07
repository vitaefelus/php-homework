<?php
/**
 * Task controller.
 */

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class TaskController.
 *
 * @Route("/category")
 */
class CategoryController extends AbstractController
{
    /**
     * Index action.
     *
     * @param \App\Repository\CategoryRepository $repository Category repository
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     name="category_index",
     * )
     */
    public function index(CategoryRepository $repository): Response
    {
        return $this->render(
            'category/index.html.twig',
            ['categories' => $repository->findAll()]
        );
    }

    /**
     * View action.
     *
     * @param \App\Entity\Category $category Category entity
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{id}",
     *     name="category_view",
     *     requirements={"id": "[1-9]\d*"},
     * )
     */
    public function view(Category $category): Response
    {
        return $this->render(
            'category/view.html.twig',
            ['category' => $category]
        );
    }
}