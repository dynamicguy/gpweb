<?php

/* /home/dynamicguy/public_html/gp/gp/../src/Bundle/UserBundle/Resources/views/User/success.twig */
class __TwigTemplate_225b49e4aa3e9b50471e01b25cd5a8b1 extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("UserBundle::layout:twig");
            $this->parent->pushBlocks($this->blocks);
        }
        $this->parent->display($context);
    }

    // line 5
    public function block_title($context, $parents)
    {
        echo "Users";
    }

    // line 7
    public function block_head($context, $parents)
    {
        echo "
  ";
        // line 8
        $this->getParent($context, $parents);
        echo "
";
    }

    // line 11
    public function block_content($context, $parents)
    {
        echo "
    
    ";
        // line -1
        echo twig_safe_filter($this->getAttribute($this->getAttribute((isset($context['_view']) ? $context['_view'] : null), "actions", array(), "any"), "render", array("UserBundle:User:flash:php", ), "any"));
        // line 13
        echo "

    <h1>Hello, ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context['identity']) ? $context['identity'] : null), "getFullName", array(), "any"), "1");
        echo "!</h1>
    this is home dashboard
    <a href=\"/index_dev.php/user/logout\">Logout</a>

";
    }

}
