<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    /**
     * @Route("/hello/{name}")
     */
    public function index($name)
    {
        return new Response("Hello $name");
    }
}
