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
 * @package    Zend_CodeGenerator
 * @subpackage PHP
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\CodeGenerator\PHP\Docblock\Tag;

/**
 * @uses       \Zend\CodeGenerator\PHP\PHPDocblockTag
 * @category   Zend
 * @package    Zend_CodeGenerator
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Return extends \Zend\CodeGenerator\PHP\PHPDocblockTag
{

    /**
     * @var string
     */
    protected $_datatype = null;

    /**
     * @var string
     */
    protected $_description = null;

    /**
     * fromReflection()
     *
     * @param \Zend\Reflection\ReflectionDocblockTag $reflectionTagReturn
     * @return \Zend\CodeGenerator\PHP\Docblock\Tag\Return
     */
    public static function fromReflection(\Zend\Reflection\ReflectionDocblockTag $reflectionTagReturn)
    {
        $returnTag = new \self();

        $returnTag->setName('return');
        $returnTag->setDatatype($reflectionTagReturn->getType()); // @todo rename
        $returnTag->setDescription($reflectionTagReturn->getDescription());

        return $returnTag;
    }

    /**
     * setDatatype()
     *
     * @param string $datatype
     * @return \Zend\CodeGenerator\PHP\Docblock\Tag\Return
     */
    public function setDatatype($datatype)
    {
        $this->_datatype = $datatype;
        return $this;
    }

    /**
     * getDatatype()
     *
     * @return string
     */
    public function getDatatype()
    {
        return $this->_datatype;
    }


    /**
     * generate()
     *
     * @return string
     */
    public function generate()
    {
        $output = '@return ' . $this->_datatype . ' ' . $this->_description;
        return $output;
    }

}
