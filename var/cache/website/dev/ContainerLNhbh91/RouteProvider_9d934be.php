<?php

namespace ContainerLNhbh91;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Routing/RouteProvider.php';

class RouteProvider_9d934be extends \Sulu\Bundle\RouteBundle\Routing\RouteProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\RouteBundle\Routing\RouteProvider|null wrapped object, if the proxy is initialized
     */
    private $valueHolderedeb5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb5509 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties93d91 = [
        
    ];

    public function getRouteCollectionForRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRouteCollectionForRequest', array('request' => $request), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRouteCollectionForRequest($request);
    }

    public function getRouteByName($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRouteByName', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRouteByName($name);
    }

    public function getRoutesByNames($names)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRoutesByNames', array('names' => $names), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRoutesByNames($names);
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

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Bundle\RouteBundle\Entity\RouteRepositoryInterface $routeRepository, \Sulu\Component\Webspace\Analyzer\RequestAnalyzerInterface $requestAnalyzer, \Sulu\Bundle\RouteBundle\Routing\Defaults\RouteDefaultsProviderInterface $routeDefaultsProvider, \Symfony\Component\HttpFoundation\RequestStack $requestStack, ?\ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory = null, array $defaultOptions = [])
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);

        }

        $this->valueHolderedeb5->__construct($routeRepository, $requestAnalyzer, $routeDefaultsProvider, $requestStack, $proxyFactory, $defaultOptions);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

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

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__isset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__unset', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderedeb5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderedeb5;
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
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__clone', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        $this->valueHolderedeb5 = clone $this->valueHolderedeb5;
    }

    public function __sleep()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__sleep', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return array('valueHolderedeb5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb5509 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb5509;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'initializeProxy', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderedeb5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderedeb5;
    }
}

if (!\class_exists('RouteProvider_9d934be', false)) {
    \class_alias(__NAMESPACE__.'\\RouteProvider_9d934be', 'RouteProvider_9d934be', false);
}
