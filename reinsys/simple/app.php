<?php
namespace Reinsys\Simple;

use App\Routes;
use Symfony\Component\Routing\Loader\ClosureLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\MethodNotAllowedException;

class App {
    public function run(){

        try{
            // Init basic route
            
            $loader = new ClosureLoader();
            $routes = $loader->load(function (){
                return Routes::fetch();
            });

            // Init RequestContext object
            $context = new RequestContext();
            $context->fromRequest(Request::createFromGlobals());

            // Init UrlMatcher object
            $matcher = new UrlMatcher($routes, $context);
        
            // Find the current route
            $result = $matcher->match($context->getPathInfo());

            $route = $routes->get($result['_route']);
            
            $parameters = [];
            $variables = $route->compile()->getPathVariables();
            
            if(is_array($variables)){
                foreach($variables as $k){
                    $parameters[$k] = (isset($result[$k])) ? $result[$k] : null;
                }
            }
            $class = $result['controller'];
 
            $method = isset($result['method']) ? $result['method'] : null;

            if(null !== $method) {
                $controller = new $class;
                $template = call_user_func_array(array($controller, $method), $parameters);
                $controller->display($template);
            }
            else {
                new $class;
            }

        } catch(ResourceNotFoundException $e){
            (new \App\Controllers\ErrorController)->notfound();
        } catch(MethodNotAllowedException $e){
            (new \App\Controllers\ErrorController)->notallowed();
        }
    }
}