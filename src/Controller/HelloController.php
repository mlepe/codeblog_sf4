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
        return new Response(
            '<html><body>Hello World!</body></html>'
        );
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

        return new Response(
            "<html><body>Hello $worlds</body></html>"
        );
    }


    /**
     * @Route("/hello/{firstname}", name="hello_firstname")
     */
    public function helloFirstname($firstname = 'World')
    {
        return new Response(
            "<html><body>Hello $firstname</body></html>"
        );
    }
}