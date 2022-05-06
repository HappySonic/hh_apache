<?php

namespace ContainerUx2i24J;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Routing/RouteProvider.php';

class RouteProvider_9d934be extends \Sulu\Bundle\RouteBundle\Routing\RouteProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\RouteBundle\Routing\RouteProvider|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a50a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer853e4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa31b3 = [
        
    ];

    public function getRouteCollectionForRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRouteCollectionForRequest', array('request' => $request), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRouteCollectionForRequest($request);
    }

    public function getRouteByName($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRouteByName', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRouteByName($name);
    }

    public function getRoutesByNames($names)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getRoutesByNames', array('names' => $names), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getRoutesByNames($names);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $instance, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($instance);

        $instance->initializer853e4 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Bundle\RouteBundle\Entity\RouteRepositoryInterface $routeRepository, \Sulu\Component\Webspace\Analyzer\RequestAnalyzerInterface $requestAnalyzer, \Sulu\Bundle\RouteBundle\Routing\Defaults\RouteDefaultsProviderInterface $routeDefaultsProvider, \Symfony\Component\HttpFoundation\RequestStack $requestStack, ?\ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory = null, array $defaultOptions = [])
    {
        static $reflection;

        if (! $this->valueHolder4a50a) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
            $this->valueHolder4a50a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);

        }

        $this->valueHolder4a50a->__construct($routeRepository, $requestAnalyzer, $routeDefaultsProvider, $requestStack, $proxyFactory, $defaultOptions);
    }

    public function & __get($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__get', ['name' => $name], $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        if (isset(self::$publicPropertiesa31b3[$name])) {
            return $this->valueHolder4a50a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__isset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__unset', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a50a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4a50a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__clone', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        $this->valueHolder4a50a = clone $this->valueHolder4a50a;
    }

    public function __sleep()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__sleep', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return array('valueHolder4a50a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer853e4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer853e4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'initializeProxy', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a50a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a50a;
    }
}

if (!\class_exists('RouteProvider_9d934be', false)) {
    \class_alias(__NAMESPACE__.'\\RouteProvider_9d934be', 'RouteProvider_9d934be', false);
}
