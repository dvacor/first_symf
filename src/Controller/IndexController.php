<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{
  /**
 * @Route("/index/example")
 */
 public function example():Response
 {
   return new Response(
     "<html><body>Example</body></html>"
   );
 }

}
