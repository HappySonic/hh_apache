<?php

namespace ContainerIwAkOJC;

include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/RouteBundle/Routing/RouteProvider.php';
class RouteProvider_9d934be extends \Sulu\Bundle\RouteBundle\Routing\RouteProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function getRouteCollectionForRequest(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRouteCollectionForRequest', array('request' => $request), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRouteCollectionForRequest($request);
    }
    public function getRouteByName($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRouteByName', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRouteByName($name);
    }
    public function getRoutesByNames($names)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRoutesByNames', array('names' => $names), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRoutesByNames($names);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $instance, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($instance);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(\Sulu\Bundle\RouteBundle\Entity\RouteRepositoryInterface $routeRepository, \Sulu\Component\Webspace\Analyzer\RequestAnalyzerInterface $requestAnalyzer, \Sulu\Bundle\RouteBundle\Routing\Defaults\RouteDefaultsProviderInterface $routeDefaultsProvider, \Symfony\Component\HttpFoundation\RequestStack $requestStack, ?\ProxyManager\Factory\LazyLoadingValueHolderFactory $proxyFactory = null, array $defaultOptions = [])
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);
        }
        $this->valueHolder8c057->__construct($routeRepository, $requestAnalyzer, $routeDefaultsProvider, $requestStack, $proxyFactory, $defaultOptions);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
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
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__isset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__unset', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8c057;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8c057;
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
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__clone', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        $this->valueHolder8c057 = clone $this->valueHolder8c057;
    }
    public function __sleep()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__sleep', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return array('valueHolder8c057');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Sulu\Bundle\RouteBundle\Routing\RouteProvider $instance) {
            unset($instance->routeRepository, $instance->requestAnalyzer, $instance->routeDefaultsProvider, $instance->requestStack, $instance->proxyFactory, $instance->defaultOptions, $instance->symfonyRouteCache, $instance->routeCache);
        }, $this, 'Sulu\\Bundle\\RouteBundle\\Routing\\RouteProvider')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2e88 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2e88;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'initializeProxy', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8c057;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8c057;
    }
}

if (!\class_exists('RouteProvider_9d934be', false)) {
    \class_alias(__NAMESPACE__.'\\RouteProvider_9d934be', 'RouteProvider_9d934be', false);
}
