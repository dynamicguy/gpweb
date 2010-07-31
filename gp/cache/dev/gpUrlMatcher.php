<?php

/**
 * gpUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class gpUrlMatcher extends Symfony\Components\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(array $context = array(), array $defaults = array())
    {
        $this->context = $context;
        $this->defaults = $defaults;
    }

    public function match($url)
    {
        $url = $this->normalizeUrl($url);

        if (preg_match('#^/$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'GpBundle:Gp:index',)), array('_route' => 'homepage'));
        }

        if (0 === strpos($url, '/gp') && preg_match('#^/gp/(?P<name>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'GpBundle:Gp:index',)), array('_route' => 'gp'));
        }

        if (0 === strpos($url, '/user/list') && preg_match('#^/user/list$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'UserBundle:User:index',)), array('_route' => 'list'));
        }

        if (0 === strpos($url, '/user/login') && preg_match('#^/user/login$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'UserBundle:User:login',)), array('_route' => 'login'));
        }

        if (0 === strpos($url, '/user/home') && preg_match('#^/user/home$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'UserBundle:User:home',)), array('_route' => 'userHome'));
        }

        if (0 === strpos($url, '/user/logout') && preg_match('#^/user/logout$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'UserBundle:User:logout',)), array('_route' => 'logout'));
        }

        if (0 === strpos($url, '/user/register') && preg_match('#^/user/register$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'UserBundle:User:register',)), array('_route' => 'register'));
        }

        return false;
    }
}
