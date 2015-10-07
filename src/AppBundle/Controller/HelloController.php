<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends Controller
{
    /**
     * @Route("/hello", name="app_hello_world")
     * @return Response
     */
    public function helloAction()
    {
        return $this->render('AppBundle::hello.html.twig');
    }

    /**
     * @Route("/hello/switch_bg/{color}", name="app_hello_switch_background", defaults={"color"="red"})
     * @param string $color
     * @return Response
     */
    public function switchBackgroundAction($color)
    {
        return $this->render('AppBundle::hello.html.twig', [
            'color' => $color
        ]);
    }
}