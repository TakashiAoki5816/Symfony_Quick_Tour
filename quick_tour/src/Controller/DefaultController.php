<?php
namespace App\Controller;

use App\GreetingGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     */
    public function index($name, GreetingGenerator $generator)
    {
        $generator->getRandomGreeting();

        return $this->render('default/index.html.twig', [
            'name' => $name,
        ]);
    }
}
