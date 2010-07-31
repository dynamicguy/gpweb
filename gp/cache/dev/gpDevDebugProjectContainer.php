<?php

use Symfony\Components\DependencyInjection\Container;
use Symfony\Components\DependencyInjection\Reference;
use Symfony\Components\DependencyInjection\Parameter;

/**
 * gpDevDebugProjectContainer
 *
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @property Symfony\Foundation\Debug\EventDispatcher $event_dispatcher
 * @property Symfony\Foundation\Debug\ErrorHandler $error_handler
 * @property Symfony\Components\HttpKernel\HttpKernel $http_kernel
 * @property Symfony\Components\HttpKernel\Request $request
 * @property Symfony\Components\HttpKernel\Response $response
 * @property Symfony\Foundation\Debug\EventDispatcher $debug.event_dispatcher
 * @property Symfony\Framework\FoundationBundle\Templating\Debugger $templating.debugger
 * @property Symfony\Framework\FoundationBundle\User $user
 * @property Symfony\Framework\FoundationBundle\Session\NativeSession $user.session.native
 * @property Symfony\Framework\FoundationBundle\Session\PdoSession $user.session.pdo
 * @property Symfony\Framework\FoundationBundle\Controller\ControllerManager $controller_manager
 * @property Symfony\Framework\FoundationBundle\Listener\ControllerLoader $controller_loader
 * @property Symfony\Framework\FoundationBundle\Listener\RequestParser $request_parser
 * @property Symfony\Components\Routing\Router $router
 * @property Symfony\Components\HttpKernel\Cache\Esi $esi
 * @property Symfony\Components\HttpKernel\Listener\EsiFilter $esi_filter
 * @property Symfony\Components\HttpKernel\Listener\ResponseFilter $response_filter
 * @property Symfony\Framework\FoundationBundle\Listener\ExceptionHandler $exception_handler
 * @property Symfony\Components\Validator\Validator $validator
 * @property Symfony\Components\Validator\Mapping\ClassMetadataFactory $validator.mapping.class_metadata_factory
 * @property Symfony\Components\Validator\Extension\DependencyInjectionValidatorFactory $validator.validator_factory
 * @property Symfony\Components\Validator\MessageInterpolator\XliffMessageInterpolator $validator.message_interpolator
 * @property Symfony\Components\Validator\Mapping\Loader\LoaderChain $validator.mapping.loader.loader_chain
 * @property Symfony\Components\Validator\Mapping\Loader\StaticMethodLoader $validator.mapping.loader.static_method_loader
 * @property Symfony\Components\Validator\Mapping\Loader\XmlFilesLoader $validator.mapping.loader.xml_files_loader
 * @property Symfony\Components\Validator\Mapping\Loader\YamlFilesLoader $validator.mapping.loader.yaml_files_loader
 * @property Symfony\Framework\FoundationBundle\Templating\Engine $templating.engine
 * @property Symfony\Components\Templating\Loader\FilesystemLoader $templating.loader.filesystem
 * @property Symfony\Components\Templating\Loader\CacheLoader $templating.loader.cache
 * @property Symfony\Components\Templating\Loader\ChainLoader $templating.loader.chain
 * @property Symfony\Components\Templating\Helper\JavascriptsHelper $templating.helper.javascripts
 * @property Symfony\Components\Templating\Helper\StylesheetsHelper $templating.helper.stylesheets
 * @property Symfony\Components\Templating\Helper\SlotsHelper $templating.helper.slots
 * @property Symfony\Components\Templating\Helper\AssetsHelper $templating.helper.assets
 * @property Symfony\Framework\FoundationBundle\Helper\RequestHelper $templating.helper.request
 * @property Symfony\Framework\FoundationBundle\Helper\UserHelper $templating.helper.user
 * @property Symfony\Framework\FoundationBundle\Helper\RouterHelper $templating.helper.router
 * @property Symfony\Framework\FoundationBundle\Helper\ActionsHelper $templating.helper.actions
 * @property Symfony\Framework\FoundationBundle\Profiler $profiler
 * @property Symfony\Components\HttpKernel\Profiler\ProfilerStorage $profiler.storage
 * @property Symfony\Components\HttpKernel\Listener\Profiling $profiling
 * @property Symfony\Framework\FoundationBundle\DataCollector\ConfigDataCollector $data_collector.config
 * @property Symfony\Framework\FoundationBundle\DataCollector\AppDataCollector $data_collector.app
 * @property Symfony\Framework\FoundationBundle\DataCollector\TimerDataCollector $data_collector.timer
 * @property Symfony\Components\HttpKernel\Profiler\DataCollector\MemoryDataCollector $data_collector.memory
 * @property Symfony\Components\HttpKernel\Listener\WebDebugToolbar $debug.toolbar
 * @property Bundle\UserBundle\Dao\DoctrineUserDao $user.UserDao
 * @property Symfony\Framework\TwigBundle\Environment $twig
 * @property Symfony\Framework\TwigBundle\Loader\Loader $twig.loader
 * @property Symfony\Framework\TwigBundle\Renderer\Renderer $twig.renderer
 * @property \Twig_Extension_Escaper $twig.extension.escaper
 * @property Symfony\Framework\TwigBundle\Extension\Helpers $twig.extension.helpers
 * @property Doctrine\DBAL\Logging\DebugStack $doctrine.dbal.logger.debug
 * @property Symfony\Framework\DoctrineBundle\Logger\DbalLogger $doctrine.dbal.logger
 * @property Symfony\Framework\DoctrineBundle\DataCollector\DoctrineDataCollector $doctrine.data_collector
 * @property Doctrine\DBAL\Configuration $doctrine.dbal.default_connection.configuration
 * @property Doctrine\Common\EventManager $doctrine.dbal.default_connection.event_manager
 * @property Doctrine\DBAL\DriverManager $doctrine.dbal.default_connection
 * @property Doctrine\ORM\Mapping\Driver\AnnotationDriver $doctrine.orm.metadata_driver.annotation
 * @property Doctrine\Common\Annotations\AnnotationReader $doctrine.orm.metadata_driver.annotation.reader
 * @property Doctrine\ORM\Mapping\Driver\XmlDriver $doctrine.orm.metadata_driver.xml
 * @property Doctrine\ORM\Mapping\Driver\YamlDriver $doctrine.orm.metadata_driver.yml
 * @property Doctrine\Common\Cache\ArrayCache $doctrine.orm.cache.array
 * @property Doctrine\Common\Cache\ApcCache $doctrine.orm.cache.apc
 * @property Doctrine\Common\Cache\MemcacheCache $doctrine.orm.cache.memcache
 * @property Memcache $doctrine.orm.cache.memcache.instance
 * @property Doctrine\Common\Cache\XcacheCache $doctrine.orm.cache.xcache
 * @property Doctrine\ORM\Configuration $doctrine.orm.default_configuration
 * @property Doctrine\Common\Cache\ArrayCache $doctrine.orm.metadata_cache
 * @property Doctrine\Common\Cache\ArrayCache $doctrine.orm.query_cache
 * @property Doctrine\Common\Cache\ArrayCache $doctrine.orm.result_cache
 * @property Doctrine\ORM\Mapping\Driver\DriverChain $doctrine.orm.metadata_driver
 * @property Doctrine\ORM\EntityManager $doctrine.orm.default_entity_manager
 * @property Symfony\Framework\ZendBundle\Logger\Logger $zend.logger
 * @property Zend\Log\Writer\Stream $zend.logger.writer.filesystem
 * @property Zend\Log\Formatter\Simple $zend.formatter.filesystem
 * @property Symfony\Framework\ZendBundle\Logger\DebugLogger $zend.logger.writer.debug
 * @property Zend\Log\Filter\Priority $zend.logger.filter
 * @property Symfony\Framework\FoundationBundle\Session\NativeSession $user.session
 * @property Symfony\Components\Templating\Loader\FilesystemLoader $templating.loader
 * @property Symfony\Framework\FoundationBundle\Templating\Engine $templating
 * @property Doctrine\DBAL\DriverManager $database_connection
 * @property Doctrine\ORM\EntityManager $doctrine.orm.entity_manager
 * @property Doctrine\Common\Cache\ArrayCache $doctrine.orm.cache
 * @property Symfony\Framework\ZendBundle\Logger\Logger $logger
 */
class gpDevDebugProjectContainer extends Container
{
    protected $shared = array();

    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->parameters = $this->getDefaultParameters();
    }

    /**
     * Gets the 'event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Foundation\Debug\EventDispatcher A Symfony\Foundation\Debug\EventDispatcher instance.
     */
    protected function getEventDispatcherService()
    {
        if (isset($this->shared['event_dispatcher'])) return $this->shared['event_dispatcher'];

        $instance = new Symfony\Foundation\Debug\EventDispatcher($this, $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['event_dispatcher'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'error_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Foundation\Debug\ErrorHandler A Symfony\Foundation\Debug\ErrorHandler instance.
     */
    protected function getErrorHandlerService()
    {
        if (isset($this->shared['error_handler'])) return $this->shared['error_handler'];

        $instance = new Symfony\Foundation\Debug\ErrorHandler($this->getParameter('error_handler.level'));
        $this->shared['error_handler'] = $instance;
        $instance->register();

        return $instance;
    }

    /**
     * Gets the 'http_kernel' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\HttpKernel A Symfony\Components\HttpKernel\HttpKernel instance.
     */
    protected function getHttpKernelService()
    {
        if (isset($this->shared['http_kernel'])) return $this->shared['http_kernel'];

        $instance = new Symfony\Components\HttpKernel\HttpKernel($this->getEventDispatcherService());
        $this->shared['http_kernel'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Request A Symfony\Components\HttpKernel\Request instance.
     */
    protected function getRequestService()
    {
        if (isset($this->shared['request'])) return $this->shared['request'];

        $instance = new Symfony\Components\HttpKernel\Request();
        $this->shared['request'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'response' service.
     *
     * @return Symfony\Components\HttpKernel\Response A Symfony\Components\HttpKernel\Response instance.
     */
    protected function getResponseService()
    {
        $instance = new Symfony\Components\HttpKernel\Response();

        return $instance;
    }

    /**
     * Gets the 'debug.event_dispatcher' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Foundation\Debug\EventDispatcher A Symfony\Foundation\Debug\EventDispatcher instance.
     */
    protected function getDebug_EventDispatcherService()
    {
        if (isset($this->shared['debug.event_dispatcher'])) return $this->shared['debug.event_dispatcher'];

        $instance = new Symfony\Foundation\Debug\EventDispatcher($this, $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['debug.event_dispatcher'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.debugger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Templating\Debugger A Symfony\Framework\FoundationBundle\Templating\Debugger instance.
     */
    protected function getTemplating_DebuggerService()
    {
        if (isset($this->shared['templating.debugger'])) return $this->shared['templating.debugger'];

        $instance = new Symfony\Framework\FoundationBundle\Templating\Debugger($this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['templating.debugger'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\User A Symfony\Framework\FoundationBundle\User instance.
     */
    protected function getUserService()
    {
        if (isset($this->shared['user'])) return $this->shared['user'];

        $instance = new Symfony\Framework\FoundationBundle\User($this->getEventDispatcherService(), $this->getUser_Session_NativeService(), array('default_locale' => $this->getParameter('user.default_locale')));
        $this->shared['user'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'user.session.native' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Session\NativeSession A Symfony\Framework\FoundationBundle\Session\NativeSession instance.
     */
    protected function getUser_Session_NativeService()
    {
        if (isset($this->shared['user.session.native'])) return $this->shared['user.session.native'];

        $instance = new Symfony\Framework\FoundationBundle\Session\NativeSession(array('session_name' => $this->getParameter('session.options.name'), 'session_cookie_lifetime' => $this->getParameter('session.options.lifetime'), 'session_cookie_path' => $this->getParameter('session.options.path'), 'session_cookie_domain' => $this->getParameter('session.options.domain'), 'session_cookie_secure' => $this->getParameter('session.options.secure'), 'session_cookie_httponly' => $this->getParameter('session.options.httponly'), 'session_cache_limiter' => $this->getParameter('session.options.cache_limiter')));
        $this->shared['user.session.native'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'user.session.pdo' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Session\PdoSession A Symfony\Framework\FoundationBundle\Session\PdoSession instance.
     */
    protected function getUser_Session_PdoService()
    {
        if (isset($this->shared['user.session.pdo'])) return $this->shared['user.session.pdo'];

        $instance = new Symfony\Framework\FoundationBundle\Session\PdoSession($this->getService('pdo_connection'), array('session_name' => $this->getParameter('session.options.name'), 'session_cookie_lifetime' => $this->getParameter('session.options.lifetime'), 'session_cookie_path' => $this->getParameter('session.options.path'), 'session_cookie_domain' => $this->getParameter('session.options.domain'), 'session_cookie_secure' => $this->getParameter('session.options.secure'), 'session_cookie_httponly' => $this->getParameter('session.options.httponly'), 'session_cache_limiter' => $this->getParameter('session.options.cache_limiter'), 'db_table' => $this->getParameter('session.options.pdo.db_table')));
        $this->shared['user.session.pdo'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'controller_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Controller\ControllerManager A Symfony\Framework\FoundationBundle\Controller\ControllerManager instance.
     */
    protected function getControllerManagerService()
    {
        if (isset($this->shared['controller_manager'])) return $this->shared['controller_manager'];

        $instance = new Symfony\Framework\FoundationBundle\Controller\ControllerManager($this, $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['controller_manager'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'controller_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Listener\ControllerLoader A Symfony\Framework\FoundationBundle\Listener\ControllerLoader instance.
     */
    protected function getControllerLoaderService()
    {
        if (isset($this->shared['controller_loader'])) return $this->shared['controller_loader'];

        $instance = new Symfony\Framework\FoundationBundle\Listener\ControllerLoader($this->getControllerManagerService(), $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['controller_loader'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'request_parser' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Listener\RequestParser A Symfony\Framework\FoundationBundle\Listener\RequestParser instance.
     */
    protected function getRequestParserService()
    {
        if (isset($this->shared['request_parser'])) return $this->shared['request_parser'];

        $instance = new Symfony\Framework\FoundationBundle\Listener\RequestParser($this, $this->getRouterService(), $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['request_parser'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Routing\Router A Symfony\Components\Routing\Router instance.
     */
    protected function getRouterService()
    {
        if (isset($this->shared['router'])) return $this->shared['router'];

        $instance = new Symfony\Components\Routing\Router(array(0 => $this->getService('kernel'), 1 => 'registerRoutes'), array('cache_dir' => $this->getParameter('kernel.cache_dir'), 'debug' => $this->getParameter('kernel.debug'), 'matcher_cache_class' => $this->getParameter('kernel.name').'UrlMatcher', 'generator_cache_class' => $this->getParameter('kernel.name').'UrlGenerator'));
        $this->shared['router'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'esi' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Cache\Esi A Symfony\Components\HttpKernel\Cache\Esi instance.
     */
    protected function getEsiService()
    {
        if (isset($this->shared['esi'])) return $this->shared['esi'];

        $instance = new Symfony\Components\HttpKernel\Cache\Esi();
        $this->shared['esi'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'esi_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Listener\EsiFilter A Symfony\Components\HttpKernel\Listener\EsiFilter instance.
     */
    protected function getEsiFilterService()
    {
        if (isset($this->shared['esi_filter'])) return $this->shared['esi_filter'];

        $instance = new Symfony\Components\HttpKernel\Listener\EsiFilter($this->getService('esi', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['esi_filter'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'response_filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Listener\ResponseFilter A Symfony\Components\HttpKernel\Listener\ResponseFilter instance.
     */
    protected function getResponseFilterService()
    {
        if (isset($this->shared['response_filter'])) return $this->shared['response_filter'];

        $instance = new Symfony\Components\HttpKernel\Listener\ResponseFilter();
        $this->shared['response_filter'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'exception_handler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Listener\ExceptionHandler A Symfony\Framework\FoundationBundle\Listener\ExceptionHandler instance.
     */
    protected function getExceptionHandlerService()
    {
        if (isset($this->shared['exception_handler'])) return $this->shared['exception_handler'];

        $instance = new Symfony\Framework\FoundationBundle\Listener\ExceptionHandler($this, $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE), $this->getParameter('exception_handler.controller'));
        $this->shared['exception_handler'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Validator A Symfony\Components\Validator\Validator instance.
     */
    protected function getValidatorService()
    {
        if (isset($this->shared['validator'])) return $this->shared['validator'];

        $instance = new Symfony\Components\Validator\Validator($this->getValidator_Mapping_ClassMetadataFactoryService(), $this->getValidator_ValidatorFactoryService(), $this->getValidator_MessageInterpolatorService());
        $this->shared['validator'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.class_metadata_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Mapping\ClassMetadataFactory A Symfony\Components\Validator\Mapping\ClassMetadataFactory instance.
     */
    protected function getValidator_Mapping_ClassMetadataFactoryService()
    {
        if (isset($this->shared['validator.mapping.class_metadata_factory'])) return $this->shared['validator.mapping.class_metadata_factory'];

        $instance = new Symfony\Components\Validator\Mapping\ClassMetadataFactory($this->getValidator_Mapping_Loader_LoaderChainService());
        $this->shared['validator.mapping.class_metadata_factory'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.validator_factory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Extension\DependencyInjectionValidatorFactory A Symfony\Components\Validator\Extension\DependencyInjectionValidatorFactory instance.
     */
    protected function getValidator_ValidatorFactoryService()
    {
        if (isset($this->shared['validator.validator_factory'])) return $this->shared['validator.validator_factory'];

        $instance = new Symfony\Components\Validator\Extension\DependencyInjectionValidatorFactory($this);
        $this->shared['validator.validator_factory'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.message_interpolator' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\MessageInterpolator\XliffMessageInterpolator A Symfony\Components\Validator\MessageInterpolator\XliffMessageInterpolator instance.
     */
    protected function getValidator_MessageInterpolatorService()
    {
        if (isset($this->shared['validator.message_interpolator'])) return $this->shared['validator.message_interpolator'];

        $instance = new Symfony\Components\Validator\MessageInterpolator\XliffMessageInterpolator($this->getParameter('validator.message_interpolator.files'));
        $this->shared['validator.message_interpolator'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.loader.loader_chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Mapping\Loader\LoaderChain A Symfony\Components\Validator\Mapping\Loader\LoaderChain instance.
     */
    protected function getValidator_Mapping_Loader_LoaderChainService()
    {
        if (isset($this->shared['validator.mapping.loader.loader_chain'])) return $this->shared['validator.mapping.loader.loader_chain'];

        $instance = new Symfony\Components\Validator\Mapping\Loader\LoaderChain(array(0 => $this->getValidator_Mapping_Loader_StaticMethodLoaderService(), 1 => $this->getValidator_Mapping_Loader_XmlFilesLoaderService(), 2 => $this->getValidator_Mapping_Loader_YamlFilesLoaderService()));
        $this->shared['validator.mapping.loader.loader_chain'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.loader.static_method_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Mapping\Loader\StaticMethodLoader A Symfony\Components\Validator\Mapping\Loader\StaticMethodLoader instance.
     */
    protected function getValidator_Mapping_Loader_StaticMethodLoaderService()
    {
        if (isset($this->shared['validator.mapping.loader.static_method_loader'])) return $this->shared['validator.mapping.loader.static_method_loader'];

        $instance = new Symfony\Components\Validator\Mapping\Loader\StaticMethodLoader($this->getParameter('validator.mapping.loader.static_method_loader.method_name'));
        $this->shared['validator.mapping.loader.static_method_loader'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.loader.xml_files_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Mapping\Loader\XmlFilesLoader A Symfony\Components\Validator\Mapping\Loader\XmlFilesLoader instance.
     */
    protected function getValidator_Mapping_Loader_XmlFilesLoaderService()
    {
        if (isset($this->shared['validator.mapping.loader.xml_files_loader'])) return $this->shared['validator.mapping.loader.xml_files_loader'];

        $instance = new Symfony\Components\Validator\Mapping\Loader\XmlFilesLoader(array(0 => '/home/dynamicguy/public_html/gpweb/src/vendor/symfony/src/Symfony/Framework/FoundationBundle/DependencyInjection/../../../Components/Form/Resources/config/validation.xml'));
        $this->shared['validator.mapping.loader.xml_files_loader'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'validator.mapping.loader.yaml_files_loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Validator\Mapping\Loader\YamlFilesLoader A Symfony\Components\Validator\Mapping\Loader\YamlFilesLoader instance.
     */
    protected function getValidator_Mapping_Loader_YamlFilesLoaderService()
    {
        if (isset($this->shared['validator.mapping.loader.yaml_files_loader'])) return $this->shared['validator.mapping.loader.yaml_files_loader'];

        $instance = new Symfony\Components\Validator\Mapping\Loader\YamlFilesLoader(array());
        $this->shared['validator.mapping.loader.yaml_files_loader'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.engine' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Templating\Engine A Symfony\Framework\FoundationBundle\Templating\Engine instance.
     */
    protected function getTemplating_EngineService()
    {
        if (isset($this->shared['templating.engine'])) return $this->shared['templating.engine'];

        $instance = new Symfony\Framework\FoundationBundle\Templating\Engine($this, $this->getTemplating_Loader_FilesystemService(), array(), $this->getParameter('templating.output_escaper'));
        $this->shared['templating.engine'] = $instance;
        $instance->setCharset($this->getParameter('kernel.charset'));

        return $instance;
    }

    /**
     * Gets the 'templating.loader.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Loader\FilesystemLoader A Symfony\Components\Templating\Loader\FilesystemLoader instance.
     */
    protected function getTemplating_Loader_FilesystemService()
    {
        if (isset($this->shared['templating.loader.filesystem'])) return $this->shared['templating.loader.filesystem'];

        $instance = new Symfony\Components\Templating\Loader\FilesystemLoader($this->getParameter('templating.loader.filesystem.path'));
        $this->shared['templating.loader.filesystem'] = $instance;
        if ($this->hasService('templating.debugger')) {
            $instance->setDebugger($this->getService('templating.debugger', Container::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'templating.loader.cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Loader\CacheLoader A Symfony\Components\Templating\Loader\CacheLoader instance.
     */
    protected function getTemplating_Loader_CacheService()
    {
        if (isset($this->shared['templating.loader.cache'])) return $this->shared['templating.loader.cache'];

        $instance = new Symfony\Components\Templating\Loader\CacheLoader($this->getService('templating.loader.wrapped'), $this->getParameter('templating.loader.cache.path'));
        $this->shared['templating.loader.cache'] = $instance;
        if ($this->hasService('templating.debugger')) {
            $instance->setDebugger($this->getService('templating.debugger', Container::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'templating.loader.chain' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Loader\ChainLoader A Symfony\Components\Templating\Loader\ChainLoader instance.
     */
    protected function getTemplating_Loader_ChainService()
    {
        if (isset($this->shared['templating.loader.chain'])) return $this->shared['templating.loader.chain'];

        $instance = new Symfony\Components\Templating\Loader\ChainLoader();
        $this->shared['templating.loader.chain'] = $instance;
        if ($this->hasService('templating.debugger')) {
            $instance->setDebugger($this->getService('templating.debugger', Container::NULL_ON_INVALID_REFERENCE));
        }

        return $instance;
    }

    /**
     * Gets the 'templating.helper.javascripts' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Helper\JavascriptsHelper A Symfony\Components\Templating\Helper\JavascriptsHelper instance.
     */
    protected function getTemplating_Helper_JavascriptsService()
    {
        if (isset($this->shared['templating.helper.javascripts'])) return $this->shared['templating.helper.javascripts'];

        $instance = new Symfony\Components\Templating\Helper\JavascriptsHelper($this->getTemplating_Helper_AssetsService());
        $this->shared['templating.helper.javascripts'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.stylesheets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Helper\StylesheetsHelper A Symfony\Components\Templating\Helper\StylesheetsHelper instance.
     */
    protected function getTemplating_Helper_StylesheetsService()
    {
        if (isset($this->shared['templating.helper.stylesheets'])) return $this->shared['templating.helper.stylesheets'];

        $instance = new Symfony\Components\Templating\Helper\StylesheetsHelper($this->getTemplating_Helper_AssetsService());
        $this->shared['templating.helper.stylesheets'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.slots' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Helper\SlotsHelper A Symfony\Components\Templating\Helper\SlotsHelper instance.
     */
    protected function getTemplating_Helper_SlotsService()
    {
        if (isset($this->shared['templating.helper.slots'])) return $this->shared['templating.helper.slots'];

        $instance = new Symfony\Components\Templating\Helper\SlotsHelper();
        $this->shared['templating.helper.slots'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.assets' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\Templating\Helper\AssetsHelper A Symfony\Components\Templating\Helper\AssetsHelper instance.
     */
    protected function getTemplating_Helper_AssetsService()
    {
        if (isset($this->shared['templating.helper.assets'])) return $this->shared['templating.helper.assets'];

        $instance = new Symfony\Components\Templating\Helper\AssetsHelper($this->getParameter('request.base_path'), '', $this->getParameter('templating.assets.version'));
        $this->shared['templating.helper.assets'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.request' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Helper\RequestHelper A Symfony\Framework\FoundationBundle\Helper\RequestHelper instance.
     */
    protected function getTemplating_Helper_RequestService()
    {
        if (isset($this->shared['templating.helper.request'])) return $this->shared['templating.helper.request'];

        $instance = new Symfony\Framework\FoundationBundle\Helper\RequestHelper($this->getRequestService());
        $this->shared['templating.helper.request'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.user' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Helper\UserHelper A Symfony\Framework\FoundationBundle\Helper\UserHelper instance.
     */
    protected function getTemplating_Helper_UserService()
    {
        if (isset($this->shared['templating.helper.user'])) return $this->shared['templating.helper.user'];

        $instance = new Symfony\Framework\FoundationBundle\Helper\UserHelper($this->getUserService());
        $this->shared['templating.helper.user'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.router' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Helper\RouterHelper A Symfony\Framework\FoundationBundle\Helper\RouterHelper instance.
     */
    protected function getTemplating_Helper_RouterService()
    {
        if (isset($this->shared['templating.helper.router'])) return $this->shared['templating.helper.router'];

        $instance = new Symfony\Framework\FoundationBundle\Helper\RouterHelper($this->getRouterService());
        $this->shared['templating.helper.router'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'templating.helper.actions' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Helper\ActionsHelper A Symfony\Framework\FoundationBundle\Helper\ActionsHelper instance.
     */
    protected function getTemplating_Helper_ActionsService()
    {
        if (isset($this->shared['templating.helper.actions'])) return $this->shared['templating.helper.actions'];

        $instance = new Symfony\Framework\FoundationBundle\Helper\ActionsHelper($this->getControllerManagerService());
        $this->shared['templating.helper.actions'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'profiler' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\Profiler A Symfony\Framework\FoundationBundle\Profiler instance.
     */
    protected function getProfilerService()
    {
        if (isset($this->shared['profiler'])) return $this->shared['profiler'];

        $instance = new Symfony\Framework\FoundationBundle\Profiler($this, $this->getProfiler_StorageService(), $this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['profiler'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'profiler.storage' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Profiler\ProfilerStorage A Symfony\Components\HttpKernel\Profiler\ProfilerStorage instance.
     */
    protected function getProfiler_StorageService()
    {
        if (isset($this->shared['profiler.storage'])) return $this->shared['profiler.storage'];

        $instance = new Symfony\Components\HttpKernel\Profiler\ProfilerStorage($this->getParameter('profiler.storage.file'), NULL, $this->getParameter('profiler.storage.lifetime'));
        $this->shared['profiler.storage'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'profiling' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Listener\Profiling A Symfony\Components\HttpKernel\Listener\Profiling instance.
     */
    protected function getProfilingService()
    {
        if (isset($this->shared['profiling'])) return $this->shared['profiling'];

        $instance = new Symfony\Components\HttpKernel\Listener\Profiling($this->getProfilerService());
        $this->shared['profiling'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'data_collector.config' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\DataCollector\ConfigDataCollector A Symfony\Framework\FoundationBundle\DataCollector\ConfigDataCollector instance.
     */
    protected function getDataCollector_ConfigService()
    {
        if (isset($this->shared['data_collector.config'])) return $this->shared['data_collector.config'];

        $instance = new Symfony\Framework\FoundationBundle\DataCollector\ConfigDataCollector($this);
        $this->shared['data_collector.config'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'data_collector.app' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\DataCollector\AppDataCollector A Symfony\Framework\FoundationBundle\DataCollector\AppDataCollector instance.
     */
    protected function getDataCollector_AppService()
    {
        if (isset($this->shared['data_collector.app'])) return $this->shared['data_collector.app'];

        $instance = new Symfony\Framework\FoundationBundle\DataCollector\AppDataCollector($this);
        $this->shared['data_collector.app'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'data_collector.timer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\FoundationBundle\DataCollector\TimerDataCollector A Symfony\Framework\FoundationBundle\DataCollector\TimerDataCollector instance.
     */
    protected function getDataCollector_TimerService()
    {
        if (isset($this->shared['data_collector.timer'])) return $this->shared['data_collector.timer'];

        $instance = new Symfony\Framework\FoundationBundle\DataCollector\TimerDataCollector($this);
        $this->shared['data_collector.timer'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'data_collector.memory' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Profiler\DataCollector\MemoryDataCollector A Symfony\Components\HttpKernel\Profiler\DataCollector\MemoryDataCollector instance.
     */
    protected function getDataCollector_MemoryService()
    {
        if (isset($this->shared['data_collector.memory'])) return $this->shared['data_collector.memory'];

        $instance = new Symfony\Components\HttpKernel\Profiler\DataCollector\MemoryDataCollector();
        $this->shared['data_collector.memory'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'debug.toolbar' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Components\HttpKernel\Listener\WebDebugToolbar A Symfony\Components\HttpKernel\Listener\WebDebugToolbar instance.
     */
    protected function getDebug_ToolbarService()
    {
        if (isset($this->shared['debug.toolbar'])) return $this->shared['debug.toolbar'];

        $instance = new Symfony\Components\HttpKernel\Listener\WebDebugToolbar($this->getProfilerService());
        $this->shared['debug.toolbar'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'user.UserDao' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Bundle\UserBundle\Dao\DoctrineUserDao A Bundle\UserBundle\Dao\DoctrineUserDao instance.
     */
    protected function getUser_UserDaoService()
    {
        if (isset($this->shared['user.UserDao'])) return $this->shared['user.UserDao'];

        $instance = new Bundle\UserBundle\Dao\DoctrineUserDao();
        $this->shared['user.UserDao'] = $instance;
        $instance->setEntityManager($this->getService('Doctrine.ORM.DefaultEntityManager'));

        return $instance;
    }

    /**
     * Gets the 'twig' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\TwigBundle\Environment A Symfony\Framework\TwigBundle\Environment instance.
     */
    protected function getTwigService()
    {
        if (isset($this->shared['twig'])) return $this->shared['twig'];

        $instance = new Symfony\Framework\TwigBundle\Environment($this, $this->getTwig_LoaderService(), $this->getParameter('twig.options'));
        $this->shared['twig'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'twig.loader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\TwigBundle\Loader\Loader A Symfony\Framework\TwigBundle\Loader\Loader instance.
     */
    protected function getTwig_LoaderService()
    {
        if (isset($this->shared['twig.loader'])) return $this->shared['twig.loader'];

        $instance = new Symfony\Framework\TwigBundle\Loader\Loader();
        $this->shared['twig.loader'] = $instance;
        $instance->setEngine($this->getTemplating_EngineService());

        return $instance;
    }

    /**
     * Gets the 'twig.renderer' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\TwigBundle\Renderer\Renderer A Symfony\Framework\TwigBundle\Renderer\Renderer instance.
     */
    protected function getTwig_RendererService()
    {
        if (isset($this->shared['twig.renderer'])) return $this->shared['twig.renderer'];

        $instance = new Symfony\Framework\TwigBundle\Renderer\Renderer($this->getTwigService());
        $this->shared['twig.renderer'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'twig.extension.escaper' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return \Twig_Extension_Escaper A \Twig_Extension_Escaper instance.
     */
    protected function getTwig_Extension_EscaperService()
    {
        if (isset($this->shared['twig.extension.escaper'])) return $this->shared['twig.extension.escaper'];

        $instance = new \Twig_Extension_Escaper();
        $this->shared['twig.extension.escaper'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'twig.extension.helpers' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\TwigBundle\Extension\Helpers A Symfony\Framework\TwigBundle\Extension\Helpers instance.
     */
    protected function getTwig_Extension_HelpersService()
    {
        if (isset($this->shared['twig.extension.helpers'])) return $this->shared['twig.extension.helpers'];

        $instance = new Symfony\Framework\TwigBundle\Extension\Helpers();
        $this->shared['twig.extension.helpers'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.logger.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Logging\DebugStack A Doctrine\DBAL\Logging\DebugStack instance.
     */
    protected function getDoctrine_Dbal_Logger_DebugService()
    {
        if (isset($this->shared['doctrine.dbal.logger.debug'])) return $this->shared['doctrine.dbal.logger.debug'];

        $instance = new Doctrine\DBAL\Logging\DebugStack();
        $this->shared['doctrine.dbal.logger.debug'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\DoctrineBundle\Logger\DbalLogger A Symfony\Framework\DoctrineBundle\Logger\DbalLogger instance.
     */
    protected function getDoctrine_Dbal_LoggerService()
    {
        if (isset($this->shared['doctrine.dbal.logger'])) return $this->shared['doctrine.dbal.logger'];

        $instance = new Symfony\Framework\DoctrineBundle\Logger\DbalLogger($this->getService('logger', Container::NULL_ON_INVALID_REFERENCE));
        $this->shared['doctrine.dbal.logger'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.data_collector' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\DoctrineBundle\DataCollector\DoctrineDataCollector A Symfony\Framework\DoctrineBundle\DataCollector\DoctrineDataCollector instance.
     */
    protected function getDoctrine_DataCollectorService()
    {
        if (isset($this->shared['doctrine.data_collector'])) return $this->shared['doctrine.data_collector'];

        $instance = new Symfony\Framework\DoctrineBundle\DataCollector\DoctrineDataCollector($this);
        $this->shared['doctrine.data_collector'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.default_connection.configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\Configuration A Doctrine\DBAL\Configuration instance.
     */
    protected function getDoctrine_Dbal_DefaultConnection_ConfigurationService()
    {
        if (isset($this->shared['doctrine.dbal.default_connection.configuration'])) return $this->shared['doctrine.dbal.default_connection.configuration'];

        $instance = new Doctrine\DBAL\Configuration();
        $this->shared['doctrine.dbal.default_connection.configuration'] = $instance;
        $instance->setSqlLogger($this->getDoctrine_Dbal_LoggerService());

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.default_connection.event_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\EventManager A Doctrine\Common\EventManager instance.
     */
    protected function getDoctrine_Dbal_DefaultConnection_EventManagerService()
    {
        if (isset($this->shared['doctrine.dbal.default_connection.event_manager'])) return $this->shared['doctrine.dbal.default_connection.event_manager'];

        $instance = new Doctrine\Common\EventManager();
        $this->shared['doctrine.dbal.default_connection.event_manager'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.dbal.default_connection' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\DBAL\DriverManager A Doctrine\DBAL\DriverManager instance.
     */
    protected function getDoctrine_Dbal_DefaultConnectionService()
    {
        if (isset($this->shared['doctrine.dbal.default_connection'])) return $this->shared['doctrine.dbal.default_connection'];

        $instance = call_user_func(array('Doctrine\\DBAL\\DriverManager', 'getConnection'), array('driverClass' => 'Doctrine\\DBAL\\Driver\\PDOMySql\\Driver', 'driverOptions' => array(), 'dbname' => 'gp', 'host' => 'localhost', 'user' => 'root', 'password' => 'f'), $this->getDoctrine_Dbal_DefaultConnection_ConfigurationService(), $this->getDoctrine_Dbal_DefaultConnection_EventManagerService());
        $this->shared['doctrine.dbal.default_connection'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_driver.annotation' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Mapping\Driver\AnnotationDriver A Doctrine\ORM\Mapping\Driver\AnnotationDriver instance.
     */
    protected function getDoctrine_Orm_MetadataDriver_AnnotationService()
    {
        if (isset($this->shared['doctrine.orm.metadata_driver.annotation'])) return $this->shared['doctrine.orm.metadata_driver.annotation'];

        $instance = new Doctrine\ORM\Mapping\Driver\AnnotationDriver($this->getDoctrine_Orm_MetadataDriver_Annotation_ReaderService(), $this->getParameter('doctrine.orm.entity_dirs'));
        $this->shared['doctrine.orm.metadata_driver.annotation'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_driver.annotation.reader' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Annotations\AnnotationReader A Doctrine\Common\Annotations\AnnotationReader instance.
     */
    protected function getDoctrine_Orm_MetadataDriver_Annotation_ReaderService()
    {
        if (isset($this->shared['doctrine.orm.metadata_driver.annotation.reader'])) return $this->shared['doctrine.orm.metadata_driver.annotation.reader'];

        $instance = new Doctrine\Common\Annotations\AnnotationReader($this->getDoctrine_Orm_Cache_ArrayService());
        $this->shared['doctrine.orm.metadata_driver.annotation.reader'] = $instance;
        $instance->setDefaultAnnotationNamespace('Doctrine\\ORM\\Mapping\\');

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_driver.xml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Mapping\Driver\XmlDriver A Doctrine\ORM\Mapping\Driver\XmlDriver instance.
     */
    protected function getDoctrine_Orm_MetadataDriver_XmlService()
    {
        if (isset($this->shared['doctrine.orm.metadata_driver.xml'])) return $this->shared['doctrine.orm.metadata_driver.xml'];

        $instance = new Doctrine\ORM\Mapping\Driver\XmlDriver($this->getParameter('doctrine.orm.metadata_driver.mapping_dirs'));
        $this->shared['doctrine.orm.metadata_driver.xml'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_driver.yml' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Mapping\Driver\YamlDriver A Doctrine\ORM\Mapping\Driver\YamlDriver instance.
     */
    protected function getDoctrine_Orm_MetadataDriver_YmlService()
    {
        if (isset($this->shared['doctrine.orm.metadata_driver.yml'])) return $this->shared['doctrine.orm.metadata_driver.yml'];

        $instance = new Doctrine\ORM\Mapping\Driver\YamlDriver($this->getParameter('doctrine.orm.metadata_driver.mapping_dirs'));
        $this->shared['doctrine.orm.metadata_driver.yml'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cache.array' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Orm_Cache_ArrayService()
    {
        if (isset($this->shared['doctrine.orm.cache.array'])) return $this->shared['doctrine.orm.cache.array'];

        $instance = new Doctrine\Common\Cache\ArrayCache();
        $this->shared['doctrine.orm.cache.array'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cache.apc' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ApcCache A Doctrine\Common\Cache\ApcCache instance.
     */
    protected function getDoctrine_Orm_Cache_ApcService()
    {
        if (isset($this->shared['doctrine.orm.cache.apc'])) return $this->shared['doctrine.orm.cache.apc'];

        $instance = new Doctrine\Common\Cache\ApcCache();
        $this->shared['doctrine.orm.cache.apc'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cache.memcache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\MemcacheCache A Doctrine\Common\Cache\MemcacheCache instance.
     */
    protected function getDoctrine_Orm_Cache_MemcacheService()
    {
        if (isset($this->shared['doctrine.orm.cache.memcache'])) return $this->shared['doctrine.orm.cache.memcache'];

        $instance = new Doctrine\Common\Cache\MemcacheCache();
        $this->shared['doctrine.orm.cache.memcache'] = $instance;
        $instance->setMemcache($this->getDoctrine_Orm_Cache_Memcache_InstanceService());

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cache.memcache.instance' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Memcache A Memcache instance.
     */
    protected function getDoctrine_Orm_Cache_Memcache_InstanceService()
    {
        if (isset($this->shared['doctrine.orm.cache.memcache.instance'])) return $this->shared['doctrine.orm.cache.memcache.instance'];

        $instance = new Memcache();
        $this->shared['doctrine.orm.cache.memcache.instance'] = $instance;
        $instance->connect($this->getParameter('doctrine.orm.cache.memcache.host'), $this->getParameter('doctrine.orm.cache.memcache.port'));

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.cache.xcache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\XcacheCache A Doctrine\Common\Cache\XcacheCache instance.
     */
    protected function getDoctrine_Orm_Cache_XcacheService()
    {
        if (isset($this->shared['doctrine.orm.cache.xcache'])) return $this->shared['doctrine.orm.cache.xcache'];

        $instance = new Doctrine\Common\Cache\XcacheCache();
        $this->shared['doctrine.orm.cache.xcache'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_configuration' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Configuration A Doctrine\ORM\Configuration instance.
     */
    protected function getDoctrine_Orm_DefaultConfigurationService()
    {
        if (isset($this->shared['doctrine.orm.default_configuration'])) return $this->shared['doctrine.orm.default_configuration'];

        $instance = new Doctrine\ORM\Configuration();
        $this->shared['doctrine.orm.default_configuration'] = $instance;
        $instance->setEntityNamespaces(array('UserBundle' => 'Bundle\\UserBundle\\Entities'));
        $instance->setMetadataCacheImpl($this->getDoctrine_Orm_MetadataCacheService());
        $instance->setQueryCacheImpl($this->getDoctrine_Orm_QueryCacheService());
        $instance->setResultCacheImpl($this->getDoctrine_Orm_ResultCacheService());
        $instance->setMetadataDriverImpl($this->getDoctrine_Orm_MetadataDriverService());
        $instance->setProxyDir($this->getParameter('kernel.cache_dir').'/doctrine/Proxies');
        $instance->setProxyNamespace('Proxies');
        $instance->setAutoGenerateProxyClasses(true);

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Orm_MetadataCacheService()
    {
        if (isset($this->shared['doctrine.orm.metadata_cache'])) return $this->shared['doctrine.orm.metadata_cache'];

        $instance = new Doctrine\Common\Cache\ArrayCache();
        $this->shared['doctrine.orm.metadata_cache'] = $instance;
        $instance->setNamespace('doctrine_metadata_');

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.query_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Orm_QueryCacheService()
    {
        if (isset($this->shared['doctrine.orm.query_cache'])) return $this->shared['doctrine.orm.query_cache'];

        $instance = new Doctrine\Common\Cache\ArrayCache();
        $this->shared['doctrine.orm.query_cache'] = $instance;
        $instance->setNamespace('doctrine_query_');

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.result_cache' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\Common\Cache\ArrayCache A Doctrine\Common\Cache\ArrayCache instance.
     */
    protected function getDoctrine_Orm_ResultCacheService()
    {
        if (isset($this->shared['doctrine.orm.result_cache'])) return $this->shared['doctrine.orm.result_cache'];

        $instance = new Doctrine\Common\Cache\ArrayCache();
        $this->shared['doctrine.orm.result_cache'] = $instance;
        $instance->setNamespace('doctrine_result_');

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.metadata_driver' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\Mapping\Driver\DriverChain A Doctrine\ORM\Mapping\Driver\DriverChain instance.
     */
    protected function getDoctrine_Orm_MetadataDriverService()
    {
        if (isset($this->shared['doctrine.orm.metadata_driver'])) return $this->shared['doctrine.orm.metadata_driver'];

        $instance = new Doctrine\ORM\Mapping\Driver\DriverChain();
        $this->shared['doctrine.orm.metadata_driver'] = $instance;
        $instance->addDriver($this->getDoctrine_Orm_MetadataDriver_AnnotationService(), 'Bundle\\UserBundle\\Entities');

        return $instance;
    }

    /**
     * Gets the 'doctrine.orm.default_entity_manager' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Doctrine\ORM\EntityManager A Doctrine\ORM\EntityManager instance.
     */
    protected function getDoctrine_Orm_DefaultEntityManagerService()
    {
        if (isset($this->shared['doctrine.orm.default_entity_manager'])) return $this->shared['doctrine.orm.default_entity_manager'];

        $instance = call_user_func(array('Doctrine\\ORM\\EntityManager', 'create'), $this->getDoctrine_Dbal_DefaultConnectionService(), $this->getDoctrine_Orm_DefaultConfigurationService());
        $this->shared['doctrine.orm.default_entity_manager'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'zend.logger' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\ZendBundle\Logger\Logger A Symfony\Framework\ZendBundle\Logger\Logger instance.
     */
    protected function getZend_LoggerService()
    {
        if (isset($this->shared['zend.logger'])) return $this->shared['zend.logger'];

        $instance = new Symfony\Framework\ZendBundle\Logger\Logger();
        $this->shared['zend.logger'] = $instance;
        $instance->addWriter($this->getZend_Logger_Writer_FilesystemService());
        $instance->addWriter($this->getZend_Logger_Writer_DebugService());

        return $instance;
    }

    /**
     * Gets the 'zend.logger.writer.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Log\Writer\Stream A Zend\Log\Writer\Stream instance.
     */
    protected function getZend_Logger_Writer_FilesystemService()
    {
        if (isset($this->shared['zend.logger.writer.filesystem'])) return $this->shared['zend.logger.writer.filesystem'];

        $instance = new Zend\Log\Writer\Stream($this->getParameter('zend.logger.path'));
        $this->shared['zend.logger.writer.filesystem'] = $instance;
        $instance->addFilter($this->getZend_Logger_FilterService());
        $instance->setFormatter($this->getZend_Formatter_FilesystemService());

        return $instance;
    }

    /**
     * Gets the 'zend.formatter.filesystem' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Log\Formatter\Simple A Zend\Log\Formatter\Simple instance.
     */
    protected function getZend_Formatter_FilesystemService()
    {
        if (isset($this->shared['zend.formatter.filesystem'])) return $this->shared['zend.formatter.filesystem'];

        $instance = new Zend\Log\Formatter\Simple($this->getParameter('zend.formatter.filesystem.format'));
        $this->shared['zend.formatter.filesystem'] = $instance;

        return $instance;
    }

    /**
     * Gets the 'zend.logger.writer.debug' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Symfony\Framework\ZendBundle\Logger\DebugLogger A Symfony\Framework\ZendBundle\Logger\DebugLogger instance.
     */
    protected function getZend_Logger_Writer_DebugService()
    {
        if (isset($this->shared['zend.logger.writer.debug'])) return $this->shared['zend.logger.writer.debug'];

        $instance = new Symfony\Framework\ZendBundle\Logger\DebugLogger();
        $this->shared['zend.logger.writer.debug'] = $instance;
        $instance->addFilter($this->getZend_Logger_FilterService());

        return $instance;
    }

    /**
     * Gets the 'zend.logger.filter' service.
     *
     * This service is shared.
     * This method always returns the same instance of the service.
     *
     * @return Zend\Log\Filter\Priority A Zend\Log\Filter\Priority instance.
     */
    protected function getZend_Logger_FilterService()
    {
        if (isset($this->shared['zend.logger.filter'])) return $this->shared['zend.logger.filter'];

        $instance = new Zend\Log\Filter\Priority($this->getParameter('zend.logger.priority'));
        $this->shared['zend.logger.filter'] = $instance;

        return $instance;
    }

    /**
     * Gets the user.session service alias.
     *
     * @return Symfony\Framework\FoundationBundle\Session\NativeSession An instance of the user.session.native service
     */
    protected function getUser_SessionService()
    {
        return $this->getUser_Session_NativeService();
    }

    /**
     * Gets the templating.loader service alias.
     *
     * @return Symfony\Components\Templating\Loader\FilesystemLoader An instance of the templating.loader.filesystem service
     */
    protected function getTemplating_LoaderService()
    {
        return $this->getTemplating_Loader_FilesystemService();
    }

    /**
     * Gets the templating service alias.
     *
     * @return Symfony\Framework\FoundationBundle\Templating\Engine An instance of the templating.engine service
     */
    protected function getTemplatingService()
    {
        return $this->getTemplating_EngineService();
    }

    /**
     * Gets the database_connection service alias.
     *
     * @return Doctrine\DBAL\DriverManager An instance of the doctrine.dbal.default_connection service
     */
    protected function getDatabaseConnectionService()
    {
        return $this->getDoctrine_Dbal_DefaultConnectionService();
    }

    /**
     * Gets the doctrine.orm.entity_manager service alias.
     *
     * @return Doctrine\ORM\EntityManager An instance of the doctrine.orm.default_entity_manager service
     */
    protected function getDoctrine_Orm_EntityManagerService()
    {
        return $this->getDoctrine_Orm_DefaultEntityManagerService();
    }

    /**
     * Gets the doctrine.orm.cache service alias.
     *
     * @return Doctrine\Common\Cache\ArrayCache An instance of the doctrine.orm.cache.array service
     */
    protected function getDoctrine_Orm_CacheService()
    {
        return $this->getDoctrine_Orm_Cache_ArrayService();
    }

    /**
     * Gets the logger service alias.
     *
     * @return Symfony\Framework\ZendBundle\Logger\Logger An instance of the zend.logger service
     */
    protected function getLoggerService()
    {
        return $this->getZend_LoggerService();
    }

    /**
     * Returns service ids for a given annotation.
     *
     * @param string $name The annotation name
     *
     * @return array An array of annotations
     */
    public function findAnnotatedServiceIds($name)
    {
        static $annotations = array (
  'kernel.listener' => 
  array (
    'controller_loader' => 
    array (
      0 => 
      array (
      ),
    ),
    'request_parser' => 
    array (
      0 => 
      array (
      ),
    ),
    'esi_filter' => 
    array (
      0 => 
      array (
      ),
    ),
    'response_filter' => 
    array (
      0 => 
      array (
      ),
    ),
    'exception_handler' => 
    array (
      0 => 
      array (
      ),
    ),
    'profiling' => 
    array (
      0 => 
      array (
      ),
    ),
    'debug.toolbar' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
  'templating.helper' => 
  array (
    'templating.helper.javascripts' => 
    array (
      0 => 
      array (
        'alias' => 'javascripts',
      ),
    ),
    'templating.helper.stylesheets' => 
    array (
      0 => 
      array (
        'alias' => 'stylesheets',
      ),
    ),
    'templating.helper.slots' => 
    array (
      0 => 
      array (
        'alias' => 'slots',
      ),
    ),
    'templating.helper.assets' => 
    array (
      0 => 
      array (
        'alias' => 'assets',
      ),
    ),
    'templating.helper.request' => 
    array (
      0 => 
      array (
        'alias' => 'request',
      ),
    ),
    'templating.helper.user' => 
    array (
      0 => 
      array (
        'alias' => 'user',
      ),
    ),
    'templating.helper.router' => 
    array (
      0 => 
      array (
        'alias' => 'router',
      ),
    ),
    'templating.helper.actions' => 
    array (
      0 => 
      array (
        'alias' => 'actions',
      ),
    ),
  ),
  'data_collector' => 
  array (
    'data_collector.config' => 
    array (
      0 => 
      array (
        'core' => true,
      ),
    ),
    'data_collector.app' => 
    array (
      0 => 
      array (
        'core' => true,
      ),
    ),
    'data_collector.timer' => 
    array (
      0 => 
      array (
        'core' => true,
      ),
    ),
    'data_collector.memory' => 
    array (
      0 => 
      array (
        'core' => true,
      ),
    ),
    'doctrine.data_collector' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
  'templating.renderer' => 
  array (
    'twig.renderer' => 
    array (
      0 => 
      array (
        'alias' => 'twig',
      ),
    ),
  ),
  'twig.extension' => 
  array (
    'twig.extension.escaper' => 
    array (
      0 => 
      array (
      ),
    ),
    'twig.extension.helpers' => 
    array (
      0 => 
      array (
      ),
    ),
  ),
);

        return isset($annotations[$name]) ? $annotations[$name] : array();
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.root_dir' => '/home/dynamicguy/public_html/gpweb/gp',
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'gp',
            'kernel.cache_dir' => '/home/dynamicguy/public_html/gpweb/gp/cache/dev',
            'kernel.logs_dir' => '/home/dynamicguy/public_html/gpweb/gp/logs',
            'kernel.bundle_dirs' => array(
                'Application' => '/home/dynamicguy/public_html/gpweb/gp/../src/Application',
                'Bundle' => '/home/dynamicguy/public_html/gpweb/gp/../src/Bundle',
                'Symfony\\Framework' => '/home/dynamicguy/public_html/gpweb/gp/../src/vendor/symfony/src/Symfony/Framework',
            ),
            'kernel.bundles' => array(
                0 => 'Symfony\\Foundation\\Bundle\\KernelBundle',
                1 => 'Symfony\\Framework\\FoundationBundle\\FoundationBundle',
                2 => 'Symfony\\Framework\\ZendBundle\\ZendBundle',
                3 => 'Symfony\\Framework\\SwiftmailerBundle\\SwiftmailerBundle',
                4 => 'Symfony\\Framework\\DoctrineBundle\\DoctrineBundle',
                5 => 'Symfony\\Framework\\DoctrineMigrationsBundle\\DoctrineMigrationsBundle',
                6 => 'Symfony\\Framework\\TwigBundle\\TwigBundle',
                7 => 'Application\\GpBundle\\GpBundle',
                8 => 'Bundle\\UserBundle\\UserBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'templating.loader.filesystem.path' => array(
                0 => '/home/dynamicguy/public_html/gpweb/gp/views/%bundle%/%controller%/%name%%format%.%renderer%',
                1 => '/home/dynamicguy/public_html/gpweb/gp/../src/Application/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
                2 => '/home/dynamicguy/public_html/gpweb/gp/../src/Bundle/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
                3 => '/home/dynamicguy/public_html/gpweb/gp/../src/vendor/symfony/src/Symfony/Framework/%bundle%/Resources/views/%controller%/%name%%format%.%renderer%',
            ),
            'doctrine.orm.metadata_driver.mapping_dirs' => array(

            ),
            'doctrine.orm.entity_dirs' => array(
                0 => '/home/dynamicguy/public_html/gpweb/src/Bundle/UserBundle/Entities',
            ),
            'event_dispatcher.class' => 'Symfony\\Foundation\\EventDispatcher',
            'http_kernel.class' => 'Symfony\\Components\\HttpKernel\\HttpKernel',
            'request.class' => 'Symfony\\Components\\HttpKernel\\Request',
            'response.class' => 'Symfony\\Components\\HttpKernel\\Response',
            'error_handler.class' => 'Symfony\\Foundation\\Debug\\ErrorHandler',
            'error_handler.level' => NULL,
            'kernel.include_core_classes' => false,
            'debug.event_dispatcher.class' => 'Symfony\\Foundation\\Debug\\EventDispatcher',
            'templating.debugger.class' => 'Symfony\\Framework\\FoundationBundle\\Templating\\Debugger',
            'kernel.compiled_classes' => array(
                0 => 'Symfony\\Components\\Routing\\Router',
                1 => 'Symfony\\Components\\Routing\\RouterInterface',
                2 => 'Symfony\\Components\\EventDispatcher\\Event',
                3 => 'Symfony\\Components\\Routing\\Matcher\\UrlMatcherInterface',
                4 => 'Symfony\\Components\\Routing\\Matcher\\UrlMatcher',
                5 => 'Symfony\\Components\\HttpKernel\\HttpKernel',
                6 => 'Symfony\\Components\\HttpKernel\\Request',
                7 => 'Symfony\\Components\\HttpKernel\\Response',
                8 => 'Symfony\\Components\\HttpKernel\\Listener\\ResponseFilter',
                9 => 'Symfony\\Components\\Templating\\Loader\\LoaderInterface',
                10 => 'Symfony\\Components\\Templating\\Loader\\Loader',
                11 => 'Symfony\\Components\\Templating\\Loader\\FilesystemLoader',
                12 => 'Symfony\\Components\\Templating\\Engine',
                13 => 'Symfony\\Components\\Templating\\Renderer\\RendererInterface',
                14 => 'Symfony\\Components\\Templating\\Renderer\\Renderer',
                15 => 'Symfony\\Components\\Templating\\Renderer\\PhpRenderer',
                16 => 'Symfony\\Components\\Templating\\Storage\\Storage',
                17 => 'Symfony\\Components\\Templating\\Storage\\FileStorage',
                18 => 'Symfony\\Framework\\FoundationBundle\\Controller',
                19 => 'Symfony\\Framework\\FoundationBundle\\Listener\\RequestParser',
                20 => 'Symfony\\Framework\\FoundationBundle\\Listener\\ControllerLoader',
                21 => 'Symfony\\Framework\\FoundationBundle\\Templating\\Engine',
            ),
            'user.class' => 'Symfony\\Framework\\FoundationBundle\\User',
            'user.default_locale' => 'en',
            'user.session.class' => 'Symfony\\Framework\\FoundationBundle\\Session\\NativeSession',
            'user.session.pdo.class' => 'Symfony\\Framework\\FoundationBundle\\Session\\PdoSession',
            'session.options.name' => 'SYMFONY_SESSION',
            'session.options.auto_start' => true,
            'session.options.lifetime' => false,
            'session.options.path' => '/',
            'session.options.domain' => '',
            'session.options.secure' => false,
            'session.options.httponly' => false,
            'session.options.cache_limiter' => 'none',
            'session.options.pdo.db_table' => 'session',
            'request_parser.class' => 'Symfony\\Framework\\FoundationBundle\\Listener\\RequestParser',
            'controller_manager.class' => 'Symfony\\Framework\\FoundationBundle\\Controller\\ControllerManager',
            'controller_loader.class' => 'Symfony\\Framework\\FoundationBundle\\Listener\\ControllerLoader',
            'router.class' => 'Symfony\\Components\\Routing\\Router',
            'response_filter.class' => 'Symfony\\Components\\HttpKernel\\Listener\\ResponseFilter',
            'exception_handler.class' => 'Symfony\\Framework\\FoundationBundle\\Listener\\ExceptionHandler',
            'exception_handler.controller' => 'FoundationBundle:Exception:exception',
            'esi.class' => 'Symfony\\Components\\HttpKernel\\Cache\\Esi',
            'esi_filter.class' => 'Symfony\\Components\\HttpKernel\\Listener\\EsiFilter',
            'validator.class' => 'Symfony\\Components\\Validator\\Validator',
            'validator.validator_factory.class' => 'Symfony\\Components\\Validator\\Extension\\DependencyInjectionValidatorFactory',
            'validator.message_interpolator.class' => 'Symfony\\Components\\Validator\\MessageInterpolator\\XliffMessageInterpolator',
            'validator.mapping.class_metadata_factory.class' => 'Symfony\\Components\\Validator\\Mapping\\ClassMetadataFactory',
            'validator.mapping.loader.loader_chain.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\LoaderChain',
            'validator.mapping.loader.static_method_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\StaticMethodLoader',
            'validator.mapping.loader.annotation_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\AnnotationLoader',
            'validator.mapping.loader.xml_file_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\XmlFileLoader',
            'validator.mapping.loader.yaml_file_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\YamlFileLoader',
            'validator.mapping.loader.xml_files_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\XmlFilesLoader',
            'validator.mapping.loader.yaml_files_loader.class' => 'Symfony\\Components\\Validator\\Mapping\\Loader\\YamlFilesLoader',
            'validator.mapping.loader.static_method_loader.method_name' => 'loadValidatorMetadata',
            'validator.message_interpolator.files' => array(
                0 => '/home/dynamicguy/public_html/gpweb/src/vendor/symfony/src/Symfony/Framework/FoundationBundle/DependencyInjection/../../../Components/Validator/Resources/i18n/messages.en.xml',
                1 => '/home/dynamicguy/public_html/gpweb/src/vendor/symfony/src/Symfony/Framework/FoundationBundle/DependencyInjection/../../../Components/Form/Resources/i18n/messages.en.xml',
            ),
            'templating.engine.class' => 'Symfony\\Framework\\FoundationBundle\\Templating\\Engine',
            'templating.loader.filesystem.class' => 'Symfony\\Components\\Templating\\Loader\\FilesystemLoader',
            'templating.loader.cache.class' => 'Symfony\\Components\\Templating\\Loader\\CacheLoader',
            'templating.loader.chain.class' => 'Symfony\\Components\\Templating\\Loader\\ChainLoader',
            'templating.helper.javascripts.class' => 'Symfony\\Components\\Templating\\Helper\\JavascriptsHelper',
            'templating.helper.stylesheets.class' => 'Symfony\\Components\\Templating\\Helper\\StylesheetsHelper',
            'templating.helper.slots.class' => 'Symfony\\Components\\Templating\\Helper\\SlotsHelper',
            'templating.helper.assets.class' => 'Symfony\\Components\\Templating\\Helper\\AssetsHelper',
            'templating.helper.actions.class' => 'Symfony\\Framework\\FoundationBundle\\Helper\\ActionsHelper',
            'templating.helper.router.class' => 'Symfony\\Framework\\FoundationBundle\\Helper\\RouterHelper',
            'templating.helper.request.class' => 'Symfony\\Framework\\FoundationBundle\\Helper\\RequestHelper',
            'templating.helper.user.class' => 'Symfony\\Framework\\FoundationBundle\\Helper\\UserHelper',
            'templating.output_escaper' => false,
            'templating.assets.version' => NULL,
            'profiler.class' => 'Symfony\\Framework\\FoundationBundle\\Profiler',
            'profiler.storage.class' => 'Symfony\\Components\\HttpKernel\\Profiler\\ProfilerStorage',
            'profiler.storage.file' => '/home/dynamicguy/public_html/gpweb/gp/cache/dev/profiler.db',
            'profiler.storage.lifetime' => 86400,
            'profiling.class' => 'Symfony\\Components\\HttpKernel\\Listener\\Profiling',
            'data_collector.config.class' => 'Symfony\\Framework\\FoundationBundle\\DataCollector\\ConfigDataCollector',
            'data_collector.app.class' => 'Symfony\\Framework\\FoundationBundle\\DataCollector\\AppDataCollector',
            'data_collector.timer.class' => 'Symfony\\Framework\\FoundationBundle\\DataCollector\\TimerDataCollector',
            'data_collector.memory.class' => 'Symfony\\Components\\HttpKernel\\Profiler\\DataCollector\\MemoryDataCollector',
            'debug.toolbar.class' => 'Symfony\\Components\\HttpKernel\\Listener\\WebDebugToolbar',
            'user.dao.class' => 'Bundle\\UserBundle\\Dao\\DoctrineUserDao',
            'twig.class' => 'Symfony\\Framework\\TwigBundle\\Environment',
            'twig.options' => array(
                'charset' => 'UTF-8',
                'debug' => true,
                'cache' => '/home/dynamicguy/public_html/gpweb/gp/cache/dev/twig',
                'auto_reload' => true,
            ),
            'twig.loader.class' => 'Symfony\\Framework\\TwigBundle\\Loader\\Loader',
            'twig.renderer.class' => 'Symfony\\Framework\\TwigBundle\\Renderer\\Renderer',
            'doctrine.data_collector.class' => 'Symfony\\Framework\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.default_connection' => 'default',
            'doctrine.orm.cache_driver' => 'array',
            'doctrine.orm.cache.memcache.host' => 'localhost',
            'doctrine.orm.cache.memcache.port' => 11211,
            'doctrine.orm.default_entity_manager' => 'default',
            'zend.logger.class' => 'Symfony\\Framework\\ZendBundle\\Logger\\Logger',
            'zend.logger.priority' => 7,
            'zend.logger.writer.debug.class' => 'Symfony\\Framework\\ZendBundle\\Logger\\DebugLogger',
            'zend.logger.writer.filesystem.class' => 'Zend\\Log\\Writer\\Stream',
            'zend.formatter.filesystem.class' => 'Zend\\Log\\Formatter\\Simple',
            'zend.formatter.filesystem.format' => '%timestamp% %priorityName%: %message%
',
            'zend.logger.path' => '/home/dynamicguy/public_html/gpweb/gp/logs/dev.log',
        );
    }
}
