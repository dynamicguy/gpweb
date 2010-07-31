<?php

/* GpBundle::layout:twig */
class __TwigTemplate_5180254e283b1eb02a55900d37a9c16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array(array($this, 'block_title')),
            'head' => array(array($this, 'block_head')),
            'content' => array(array($this, 'block_content')),
            'footer' => array(array($this, 'block_footer')),
        );
    }

    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html>
    <head>
        ";
        // line 4
        $this->getBlock('head', $context);
        // line 8
        echo "
    </head>
    <body>
        ";
        // line -1
        echo twig_safe_filter($this->getAttribute($this->getAttribute((isset($context['_view']) ? $context['_view'] : null), "actions", array(), "any"), "render", array("GpBundle::flash:php", ), "any"));
        // line 11
        echo "

        <div id=\"content\">";
        // line 13
        $this->getBlock('content', $context);
        echo "</div>
        <div id=\"footer\">
            ";
        // line 15
        $this->getBlock('footer', $context);
        // line 17
        echo "
        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, $parents)
    {
    }

    // line 4
    public function block_head($context, $parents)
    {
        echo "
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"/bundles/gp/css/reset-min.css\" />
        <title>";
        // line 7
        $this->getBlock('title', $context);
        echo " - My GP</title>
        ";
    }

    // line 13
    public function block_content($context, $parents)
    {
    }

    // line 15
    public function block_footer($context, $parents)
    {
        echo "
            &copy; Copyright 2010 by <a href=\"http://dynamicguy.com/\">Nurul Ferdous</a>.
            ";
    }

}
