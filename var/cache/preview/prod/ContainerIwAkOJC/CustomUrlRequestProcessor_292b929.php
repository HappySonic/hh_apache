<?php

namespace ContainerIwAkOJC;

include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/CustomUrlBundle/Request/CustomUrlRequestProcessor.php';
class CustomUrlRequestProcessor_292b929 extends \Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function process(\Symfony\Component\HttpFoundation\Request $request, \Sulu\Component\Webspace\Analyzer\Attributes\RequestAttributes $requestAttributes)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'process', array('request' => $request, 'requestAttributes' => $requestAttributes), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->process($request, $requestAttributes);
    }
    public function validate(\Sulu\Component\Webspace\Analyzer\Attributes\RequestAttributes $attributes)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'validate', array('attributes' => $attributes), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->validate($attributes);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $instance, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($instance);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(\Sulu\Component\CustomUrl\Manager\CustomUrlManagerInterface $customUrlManager, \Sulu\Component\CustomUrl\Generator\GeneratorInterface $generator, \Sulu\Component\Webspace\Manager\WebspaceManagerInterface $webspaceManager, $environment)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $this, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($this);
        }
        $this->valueHolder8c057->__construct($customUrlManager, $generator, $webspaceManager, $environment);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor');
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
        \Closure::bind(function (\Sulu\Bundle\CustomUrlBundle\Request\CustomUrlRequestProcessor $instance) {
            unset($instance->customUrlManager, $instance->generator, $instance->webspaceManager, $instance->environment);
        }, $this, 'Sulu\\Bundle\\CustomUrlBundle\\Request\\CustomUrlRequestProcessor')->__invoke($this);
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

if (!\class_exists('CustomUrlRequestProcessor_292b929', false)) {
    \class_alias(__NAMESPACE__.'\\CustomUrlRequestProcessor_292b929', 'CustomUrlRequestProcessor_292b929', false);
}
