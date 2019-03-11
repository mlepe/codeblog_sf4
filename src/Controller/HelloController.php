<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    /**
     * @Route("/hello/world", name="hello_world")
     */
    public function helloWorld()
    {
        return $this->render('hello/hello_world.html.twig', [
        ]);
    }


    /**
     * @Route("/hello/{nbWorlds}", name="hello_worlds", requirements={"nbWorlds"="\d+"})
     */
    public function helloWorlds($nbWorlds)
    {
        $worlds = '';
        for( $i= 0; $i < $nbWorlds; $i++) {
            $worlds .= 'world ';
        }

        return $this->render('hello/hello_firstname.html.twig', [
            'worlds' => $worlds,
        ]);
    }


    /**
     * @Route("/hello/{firstname}", name="hello_firstname")
     */
    public function helloFirstname($firstname = 'World')
    {
        return $this->render('hello/hello_firstname.html.twig', [
            'name' => $firstname,
        ]);
    }
}