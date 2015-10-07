<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    /**
     * @Route("/hello")
     * @return Response
     */
    public function helloAction()
    {
        return new Response('Bonjour');
    }
}