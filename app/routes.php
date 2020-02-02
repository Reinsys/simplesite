<?php
namespace App;

use Symfony\Component\Routing\Loader\ClosureLoader;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class Routes{
    public static function fetch(){
        $routes = new RouteCollection();

       //$home = ;

        $routes->add('home', 
            (new Route(
                '/',
                array('controller' => Controllers\ContentController::class, 'method' => 'home')
            ))->setMethods('GET')
        );

        $routes->add('about', 
            (new Route(
                '/about',
                array('controller' => Controllers\ContentController::class, 'method'=>'about')
            ))->setMethods('GET')
        );
        $routes->add('page', 
            (new Route(
                '/page/{name}',
                array('controller' => Controllers\ContentController::class, 'method'=>'page'),
                array('name' => '[a-zA-Z0-9-_]+')
            ))->setMethods('GET')
        );
        $routes->add('resource', 
            (new Route(
                '/resource/{id}',
                array('controller' => Controllers\ContentController::class, 'method'=>'resource'),
                array('id' => '[0-9]+')
            ))->setMethods('GET')
        );

        /* this routes to page and must be the last definition. */
        $routes->add('default', 
            (new Route(
                '/{name}',
                array('controller' => Controllers\ContentController::class, 'method'=>'page'),
                array('name' => '[a-zA-Z0-9-_]+')
            ))->setMethods('GET')
        );

        return $routes;
    }

}