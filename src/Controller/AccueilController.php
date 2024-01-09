<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AccueilController
 *
 * @author inesl
 */
class AccueilController {
    
    /**
     * @Route("/", name="accueil")
     * @return Response
     */
    public function inderx(): Response{
        return new Response('Hello world !');
    }
}
