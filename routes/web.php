<?php
       
       use App\core\Controller;
       use Http\controllers\ContactController;

       $app->router->get('/', [Controller::class, 'index']);
       $app->router->get('/contact', [Controller::class, 'contact']);
       $app->router->post('/about', [ContactController::class, 'store']);

       $app->run();