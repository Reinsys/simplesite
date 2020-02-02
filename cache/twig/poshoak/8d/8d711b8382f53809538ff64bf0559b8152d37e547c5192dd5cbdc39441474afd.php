<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_15d383f5514e4cf94bb1b91ee17edc33e9cd68adc5e9f0e61270cdf6db3d3b9c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        <div id=\"content\">";
        // line 9
        $this->displayBlock('content', $context, $blocks);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 11
        $this->displayBlock('footer', $context, $blocks);
        // line 14
        echo "        </div>
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 11
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "                &copy; Copyright 2011 by <a href=\"http://reinsys.com/\">Reinsys</a>.
            ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  91 => 12,  87 => 11,  81 => 9,  69 => 5,  65 => 4,  59 => 14,  57 => 11,  52 => 9,  48 => 7,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "/Users/tadefokun/Development/PHP/simplesite/html/preschool/templates/base.html");
    }
}
