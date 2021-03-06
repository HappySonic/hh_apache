<?php

namespace ContainerQpTHIsG;

include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/FormMetadataLoaderInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/StructureFormMetadataLoader.php';
class StructureFormMetadataLoader_d440bd8 extends \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function getMetadata(string $key, ?string $locale = null, array $metadataOptions = []) : ?\Sulu\Bundle\AdminBundle\Metadata\MetadataInterface
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getMetadata', array('key' => $key, 'locale' => $locale, 'metadataOptions' => $metadataOptions), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getMetadata($key, $locale, $metadataOptions);
    }
    public function warmUp($cacheDir)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'warmUp', array('cacheDir' => $cacheDir), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->warmUp($cacheDir);
    }
    public function isOptional()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isOptional', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isOptional();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $instance, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($instance);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(\Sulu\Component\Content\Metadata\Factory\StructureMetadataFactoryInterface $structureMetadataFactory, \Sulu\Bundle\AdminBundle\FormMetadata\FormMetadataMapper $formMetadataMapper, \Sulu\Component\Webspace\Manager\WebspaceManagerInterface $webspaceManager, \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\Validation\FieldMetadataValidatorInterface $fieldMetadataValidator, array $defaultTypes, array $locales, string $cacheDir, bool $debug)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);
        }
        $this->valueHolder8c057->__construct($structureMetadataFactory, $formMetadataMapper, $webspaceManager, $fieldMetadataValidator, $defaultTypes, $locales, $cacheDir, $debug);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
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
        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
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
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);
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

if (!\class_exists('StructureFormMetadataLoader_d440bd8', false)) {
    \class_alias(__NAMESPACE__.'\\StructureFormMetadataLoader_d440bd8', 'StructureFormMetadataLoader_d440bd8', false);
}
