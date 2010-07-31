<?php

/**
 * gpUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class gpUrlGenerator extends Symfony\Components\Routing\Generator\UrlGenerator
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function generate($name, array $parameters, $absolute = false)
    {
        if (!method_exists($this, $method = 'get'.$name.'RouteInfo')) {
            throw new \InvalidArgumentException(sprintf('Route "%s" does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens) = $this->$method();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    protected function gethomepageRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'GpBundle:Gp:index',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => '',    3 => NULL,  ),));
    }

    protected function getgpRouteInfo()
    {
        return array(array (  'name' => ':name',), array_merge($this->defaults, array (  '_controller' => 'GpBundle:Gp:index',)), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => ':name',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'gp',    3 => NULL,  ),));
    }

    protected function getlistRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'UserBundle:User:index',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'list',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    protected function getloginRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'UserBundle:User:login',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'login',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    protected function getuserHomeRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'UserBundle:User:home',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'home',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    protected function getlogoutRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'UserBundle:User:logout',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'logout',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }

    protected function getregisterRouteInfo()
    {
        return array(array (), array_merge($this->defaults, array (  '_controller' => 'UserBundle:User:register',)), array (), array (  0 =>   array (    0 => 'text',    1 => '/',    2 => 'register',    3 => NULL,  ),  1 =>   array (    0 => 'text',    1 => '/',    2 => 'user',    3 => NULL,  ),));
    }
}
