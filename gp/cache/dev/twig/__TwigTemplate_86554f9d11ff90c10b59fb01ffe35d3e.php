<?php

/* /home/dynamicguy/public_html/gp/gp/../src/Application/GpBundle/Resources/views/Gp/index.twig */
class __TwigTemplate_86554f9d11ff90c10b59fb01ffe35d3e extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array(array($this, 'block_title')),
            'head' => array(array($this, 'block_head')),
            'content' => array(array($this, 'block_content')),
        );
    }

    public function display(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("GpBundle::layout:twig");
            $this->parent->pushBlocks($this->blocks);
        }
        $this->parent->display($context);
    }

    // line 5
    public function block_title($context, $parents)
    {
        echo "Home";
    }

    // line 6
    public function block_head($context, $parents)
    {
        echo "
  ";
        // line 7
        $this->getParent($context, $parents);
        echo "
  <style type=\"text/css\">
    .important { color: #336699; }
  </style>
";
    }

    // line 13
    public function block_content($context, $parents)
    {
        echo "
  <h1>Index</h1>
  <p class=\"important\">
    Welcome ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context['name']) ? $context['name'] : null), "1");
        echo " on my awesome homepage.
  </p>
";
    }

}
