<?php

/* /home/dynamicguy/public_html/gp/gp/../src/Bundle/UserBundle/Resources/views/User/login.twig */
class __TwigTemplate_a3c0f3b389af1a1d37fad776ee04d5c0 extends Twig_Template
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
        echo "Member Login";
    }

    // line 7
    public function block_head($context, $parents)
    {
        echo "
  ";
        // line 8
        $this->getParent($context, $parents);
        echo "
  <style type=\"text/css\">
    .important { color: #336699; }
  </style>
";
    }

    // line 14
    public function block_content($context, $parents)
    {
        echo "
  <h1>Member Login</h1>
  <p class=\"important\">
    Welcome on my awesome homepage.
  </p>
            <form method=\"post\" id=\"loginForm\" action=\"\" name=\"loginForm\">

                <fieldset>
                    <legend>Login</legend>

                    <label for=\"username\">Username</label>
                    <input type=\"text\" id=\"username\" name=\"username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context['username']) ? $context['username'] : null), "1");
        echo "\" />

                    <label for=\"password\">Password</label>
                    <input type=\"password\" id=\"password\" name=\"password\" />

                    <input type=\"submit\" class=\"button primary\" name=\"login\" value=\"Sign in\" />
                </fieldset>

            </form>

";
    }

}
