<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
  /**
 * @Route("/index/example")
 */
 public function example():Response
 {
   $example = "Portal Dacoro";
   return $this->render('index/example.html.twig', [
            'example' => $example,
        ]);
 }

}
