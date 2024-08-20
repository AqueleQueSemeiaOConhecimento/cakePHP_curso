<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

/*
 * This file is loaded in the context of the `Application` class.
  * So you can use  `$this` to reference the application class instance
  * if required.
 */
return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

   $routes->connect('/', ['controller' => 'Home', 'action' => 'index'])->setMethods(['get']);
   //                    controller  =   controller | metodo = index
   $routes->connect('/about', ['controller' => 'About', 'actions' => 'index']);

   /*
            EXEMPLO COM METODO

    $routes->connect('/', [
    'controller' => 'Home', 'action' => 'index'
    ])->setMethods(['get']);
   */
   
//          REQUEST COM VARIAVEL
    $routes->connect('/product/{id}', [
        'controller' => 'Product', 'action' => 'show'],[
        'pass' => ['id'], 'id' => '[0-9]+'
        ])->setMethods(['get']);

/*
            CONSTRUINDO AGRUPAMENTO DE ROTAS ('ADMIN')
$routes->scope('/admin', function (RouteBuilder $routes) {
            $routes->connect('/', ['controller' => 'Admin', 'action' => 'index']);
            $routes->connect('/users', ['controller' => 'Admin', 'action' => 'user']);
            $routes->connect('/users/{id}', ['controller' => 'Admin', 'action' => 'show'],
            ['pass' => ['id'], 'id' => '[0-9]+']);
});
*/

    // $routes->fallbacks(); -> Se não achar nenhuma rota ele retorna controller/action
    // $routes->fallbacks(DashedRoute::class);
    // ->DashedRoute::class é para transformar a pesquisa do controler/action pra maiusculo

    $routes->fallbacks();
};
