<?php

/* UserBundle::layout:twig */
class __TwigTemplate_369ba675781de8d959e675327c2ced0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array(array($this, 'block_title')),
            'head' => array(array($this, 'block_head')),
            'flash' => array(array($this, 'block_flash')),
            'content' => array(array($this, 'block_content')),
            'footer' => array(array($this, 'block_footer')),
        );
    }

    public function display(array $context)
    {
        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01//EN\">
<html lang=\"en\">
<head>
  ";
        // line 4
        $this->getBlock('head', $context);
        // line 7
        echo "
</head>
<body>
    ";
        // line 10
        $this->getBlock('flash', $context);
        echo "

    <div id=\"content\">";
        // line 12
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
</html>";
    }

    // line 6
    public function block_title($context, $parents)
    {
    }

    // line 4
    public function block_head($context, $parents)
    {
        echo "
    <link rel=\"stylesheet\" href=\"/bundles/gp/css/reset-min.css\" />
    <title>";
        // line 6
        $this->getBlock('title', $context);
        echo " - My Webpage</title>
  ";
    }

    // line 10
    public function block_flash($context, $parents)
    {
        // line -1
        echo twig_safe_filter($this->getAttribute($this->getAttribute((isset($context['_view']) ? $context['_view'] : null), "actions", array(), "any"), "render", array("UserBundle:User:flash:php", ), "any"));
    }

    // line 12
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
