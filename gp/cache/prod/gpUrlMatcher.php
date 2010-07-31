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
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'FoundationBundle:Default:index',)), array('_route' => 'homepage'));
        }

        if (0 === strpos($url, '/gp') && preg_match('#^/gp/(?P<name>[^/\.]+?)$#x', $url, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'GpBundle:Gp:index',)), array('_route' => 'gp'));
        }

        return false;
    }
}
