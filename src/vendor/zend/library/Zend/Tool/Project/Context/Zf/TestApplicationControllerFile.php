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
 * @package    Zend_Tool
 * @subpackage Framework
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Tool\Project\Context\Zf;
use Zend\CodeGenerator\PHP;

/**
 * This class is the front most class for utilizing Zend_Tool_Project
 *
 * A profile is a hierarchical set of resources that keep track of
 * items within a specific project.
 *
 * @uses       \Zend\CodeGenerator\PHP\PHPClass
 * @uses       \Zend\CodeGenerator\PHP\PHPFile
 * @uses       \Zend\CodeGenerator\PHP\PHPMethod
 * @uses       \Zend\Filter\Word\DashToCamelCase
 * @uses       \Zend\Tool\Project\Context\Filesystem\File
 * @category   Zend
 * @package    Zend_Tool
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class TestApplicationControllerFile extends \Zend\Tool\Project\Context\Filesystem\File
{

    /**
     * @var string
     */
    protected $_forControllerName = '';

    /**
     * getName()
     *
     * @return string
     */
    public function getName()
    {
        return 'TestApplicationControllerFile';
    }

    /**
     * init()
     *
     * @return \Zend\Tool\Project\Context\Zf\TestApplicationControllerFile
     */
    public function init()
    {
        $this->_forControllerName = $this->_resource->getAttribute('forControllerName');
        $this->_filesystemName = ucfirst($this->_forControllerName) . 'ControllerTest.php';
        parent::init();
        return $this;
    }

    /**
     * getContents()
     *
     * @return string
     */
    public function getContents()
    {

        $filter = new \Zend\Filter\Word\DashToCamelCase();

        $className = $filter->filter($this->_forControllerName) . 'ControllerTest';

        $codeGenFile = new PHP\PHPFile(array(
            'requiredFiles' => array(
                'PHPUnit/Framework/TestCase.php'
                ),
            'classes' => array(
                new PHP\PHPClass(array(
                    'name' => $className,
                    'extendedClass' => 'PHPUnit_Framework_TestCase',
                    'methods' => array(
                        new PHP\PHPMethod(array(
                            'name' => 'setUp',
                            'body' => '        /* Setup Routine */'
                            )),
                        new PHP\PHPMethod(array(
                            'name' => 'tearDown',
                            'body' => '        /* Tear Down Routine */'
                            ))
                        )
                    ))
                )
            ));

        return $codeGenFile->generate();
    }

}
