<?php

namespace Reinsys\Simple;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Yaml\Yaml;

class Controller{
    public $request;
    public function initialize(){

    }

    public function render($template, $data = []){

        $this->request = Request::createFromGlobals();
        $host = $this->request->getHost();

        $hostConfigPath = __DIR__.'/../../sites/'.$host.'.yaml';
        $this->website = (object) Yaml::parseFile($hostConfigPath);

        /* configure twig */
        $viewTemplatesPath = __DIR__.'/../../html/' . REINSYS_SIMPLE_FRONTEND . '/templates';
        $viewCachePath = __DIR__.'/../../cache/twig/' . $this->website->reinsysHandleName;

        $loader = new \Twig\Loader\FilesystemLoader($viewTemplatesPath);

        $twig = new \Twig\Environment($loader, [
            'cache' => $viewCachePath,
            'auto_reload' => (new \Reinsys\Lib\Util)::env('APP_DEBUG')
        ]);
        $function = new \Twig\TwigFunction('controller', function ($controller, $method = null, $params = null ) {
            if(null !== $method) {
                echo call_user_func_array(array(new $controller, $method), $params);
            }
            else {
                new $class;
            }
        });
        $twig->addFunction($function);

        $template = $twig->load($template);
        return $template->render($data);
        
    }
    function display($template){
        $response = new Response($template);
        $response->prepare($this->request)->send();
    }
}