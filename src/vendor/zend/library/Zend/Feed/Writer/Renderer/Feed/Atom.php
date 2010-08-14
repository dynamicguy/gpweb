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
 * @package    Zend_Feed_Writer
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Feed\Writer\Renderer\Feed;

/**
 * @uses       DOMDocument
 * @uses       \Zend\Feed\Writer\Writer
 * @uses       \Zend\Feed\Writer\Feed
 * @uses       \Zend\Feed\Writer\Renderer\Entry\Atom
 * @uses       \Zend\Feed\Writer\Renderer\Entry\Atom\Deleted
 * @uses       \Zend\Feed\Writer\Renderer\Feed\Atom\AbstractAtom
 * @uses       \Zend\Feed\Writer\Renderer\AbstractRenderer
 * @uses       \Zend\Feed\Writer\Renderer
 * @uses       \Zend\Version
 * @category   Zend
 * @package    Zend_Feed_Writer
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Atom extends Atom\AbstractAtom implements \Zend\Feed\Writer\Renderer
{
    /**
     * Constructor
     * 
     * @param  \Zend\Feed\Writer\Feed $container 
     * @return void
     */
    public function __construct (\Zend\Feed\Writer\Feed $container)
    {
        parent::__construct($container);
    }

    /**
     * Render Atom feed
     * 
     * @return \Zend\Feed\Writer\Renderer\Feed\Atom
     */
    public function render()
    {
        if (!$this->_container->getEncoding()) {
            $this->_container->setEncoding('UTF-8');
        }
        $this->_dom = new \DOMDocument('1.0', $this->_container->getEncoding());
        $this->_dom->formatOutput = true;
        $root = $this->_dom->createElementNS(
            \Zend\Feed\Writer\Writer::NAMESPACE_ATOM_10, 'feed'
        );
        $this->setRootElement($root);
        $this->_dom->appendChild($root);
        $this->_setLanguage($this->_dom, $root);
        $this->_setBaseUrl($this->_dom, $root);
        $this->_setTitle($this->_dom, $root);
        $this->_setDescription($this->_dom, $root);
        $this->_setImage($this->_dom, $root);
        $this->_setDateCreated($this->_dom, $root);
        $this->_setDateModified($this->_dom, $root);
        $this->_setGenerator($this->_dom, $root);
        $this->_setLink($this->_dom, $root);
        $this->_setFeedLinks($this->_dom, $root);
        $this->_setId($this->_dom, $root);
        $this->_setAuthors($this->_dom, $root);
        $this->_setCopyright($this->_dom, $root);
        $this->_setCategories($this->_dom, $root);
        $this->_setHubs($this->_dom, $root);
        
        foreach ($this->_extensions as $ext) {
            $ext->setType($this->getType());
            $ext->setRootElement($this->getRootElement());
            $ext->setDomDocument($this->getDomDocument(), $root);
            $ext->render();
        }
        
        foreach ($this->_container as $entry) {
            if ($this->getDataContainer()->getEncoding()) {
                $entry->setEncoding($this->getDataContainer()->getEncoding());
            }
            if ($entry instanceof \Zend\Feed\Writer\Entry) {
                $renderer = new \Zend\Feed\Writer\Renderer\Entry\Atom($entry);
            } else {
                if (!$this->_dom->documentElement->hasAttribute('xmlns:at')) {
                    $this->_dom->documentElement->setAttribute(
                        'xmlns:at', 'http://purl.org/atompub/tombstones/1.0'
                    );
                }
                $renderer = new \Zend\Feed\Writer\Renderer\Entry\Atom\Deleted($entry);
            }
            if ($this->_ignoreExceptions === true) {
                $renderer->ignoreExceptions();
            }
            $renderer->setType($this->getType());
            $renderer->setRootElement($this->_dom->documentElement);
            $renderer->render();
            $element = $renderer->getElement();
            $imported = $this->_dom->importNode($element, true);
            $root->appendChild($imported);
        }
        return $this;
    }

}
