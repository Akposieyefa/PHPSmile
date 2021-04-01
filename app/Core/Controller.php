<?php

       namespace App\Core;

       class Controller extends Model
       {
           public function index()
           {
               return Application::$app->router->renderView('welcome');
           }

           public function contact()
           {
               return Application::$app->router->renderView('contact/contact');
           }

           public function store()
           {
               var_dump($_POST);
           }
       }
