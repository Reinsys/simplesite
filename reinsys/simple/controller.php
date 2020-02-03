<?php

namespace Reinsys\Simple;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;

class Controller{
    private $request;
    private $website;

    public function initialize(){
        $this->request = Request::createFromGlobals();
        $host = $this->request->getHost();

        $hostConfigPath = __DIR__.'/../../sites/'.$host.'.yaml';
        $this->website = (object) Yaml::parseFile($hostConfigPath);
    }

    public function render($template, $data = []){
        /* configure twig */
        $viewTemplatesPath = __DIR__.'/../../html/' . REINSYS_SIMPLE_FRONTEND . '/templates';
        $viewCachePath = __DIR__.'/../../cache/twig/' . $this->website->reinsysHandleName;

        $loader = new \Twig\Loader\FilesystemLoader($viewTemplatesPath);

        $twig = new \Twig\Environment($loader, [
            'cache' => $viewCachePath,
            'auto_reload' => (new \Reinsys\Lib\Util)::env('APP_DEBUG')
        ]);
        $controllerFunction = new \Twig\TwigFunction('controller', function ($controller, $method, $params = [] ) {
            if(null !== $method) {
                return call_user_func_array(array(new $controller, $method), $params);
            }
            else return null;
        });
        $twig->addFunction($controllerFunction);
        
        $renderFunction = new \Twig\TwigFunction('render', function ($response) {
           echo $response;
        });
        $twig->addFunction($renderFunction);

        $template = $twig->load($template);
        return $template->render($data);
        
    }
    public function display($template){
        $response = new Response($template);
        $response->prepare($this->request)->send();
    }
    
    public function getWebsite()
    {
        # code...
        return $this->website;
    }
    public function getRequest(){
        return $this->request;
    }
}