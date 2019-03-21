<?php

namespace App\Controller;

use App\Entity\Article;
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
        $categories = $this
            ->getDoctrine()
            ->getRepository(Category::class)
            ->findAll();

        $article = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getLastArticle();

        return $this->render('homepage/home.html.twig', [
            'categories' => $categories,
            'article' => $article,
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