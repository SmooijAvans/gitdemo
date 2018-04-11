<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/say/hello", name="sayhello")
     */
    public function sayHello(Request $request)
    {
        // replace this example code with whatever you need
        return new Response("Hello");
    }
    
        /**
     * @Route("/say/hello/threetimes", name="sayhello3")
     */
    public function sayHello3(Request $request)
    {
        // replace this example code with whatever you need
        return new Response("Hellow again");
    }
}
