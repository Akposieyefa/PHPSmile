<?php

namespace App\Core;

class Application
{
       public Router $router;
       public static Application $app;

       public function __construct()
       {
              self::$app = $this;
              $this->router = new Router(new Request());  
       }

       public function run()
       {
              echo $this->router->resolve();
       }
}