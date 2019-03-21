<?php

namespace App\Controller;

use App\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        $category = new Category();
        $category->setName('Php');

        $category2 = new Category();
        $category2->setName('Java');

        return $this->render('homepage/home.html.twig', [
            'categories' => array($category, $category2),
        ]);
    }

    /**
     * @Route("/dummy-post", name="dummy_post")
     */
    public function dummyPost()
    {
        return $this->render('homepage/post.html.twig');
    }
}