<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Markup
 * @subpackage Renderer_Markup_Html
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Markup\Renderer\Markup\HTML;
use Zend\Markup\Renderer\Markup;
use Zend\Markup\Token;

/**
 * Image markup for HTML
 *
 * @uses       \Zend\Markup\Renderer\HTML
 * @uses       \Zend\Markup\Renderer\Markup\HTML\AbstractHTML
 * @uses       \Zend\Markup\Token
 * @category   Zend
 * @package    Zend_Markup
 * @subpackage Renderer_Html
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Img extends AbstractHTML
{

    /**
     * Convert the token
     *
     * @param \Zend\Markup\Token $token
     * @param string $text
     *
     * @return string
     */
    public function __invoke(Token $token, $text)
    {
        $uri = $text;

        if (!preg_match('/^([a-z][a-z+\-.]*):/i', $uri)) {
            $uri = 'http://' . $uri;
        }

        // check if the URL is valid
        // TODO: use \Zend\Uri for this
        if (!\Zend\Markup\Renderer\HTML::isValidUri($uri)) {
            return $text;
        }

        if ($token->hasAttribute('alt')) {
            $alt = $token->getAttribute('alt');
        } else {
            // try to get the alternative from the URL
            $alt = rtrim($text, '/');
            $alt = strrchr($alt, '/');
            if (false !== strpos($alt, '.')) {
                $alt = substr($alt, 1, strpos($alt, '.') - 1);
            }
        }

        // run the URI and alt through htmlentities
        $uri = htmlentities($uri, ENT_QUOTES, $this->getEncoding());
        $alt = htmlentities($alt, ENT_QUOTES, $this->getEncoding());

        return "<img src=\"{$uri}\" alt=\"{$alt}\"" . $this->renderAttributes($token) . " />";
    }
}
