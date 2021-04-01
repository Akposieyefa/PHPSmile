<?php 

       require_once __DIR__.'/../vendor/autoload.php';

       use App\Libs\DotEnv;
       use App\Core\Application;

       (new DotEnv(__DIR__ . '/../.env'))->load();

       $app = new Application();
       
       include_once(__DIR__ . '/../routes/web.php');
