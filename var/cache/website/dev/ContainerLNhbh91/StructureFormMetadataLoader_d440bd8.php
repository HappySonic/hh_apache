<?php

namespace ContainerLNhbh91;
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/FormMetadataLoaderInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/symfony/http-kernel/CacheWarmer/CacheWarmerInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/sulu/sulu/src/Sulu/Bundle/AdminBundle/Metadata/FormMetadata/StructureFormMetadataLoader.php';

class StructureFormMetadataLoader_d440bd8 extends \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader|null wrapped object, if the proxy is initialized
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

    public function getMetadata(string $key, ?string $locale = null, array $metadataOptions = []) : ?\Sulu\Bundle\AdminBundle\Metadata\MetadataInterface
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getMetadata', array('key' => $key, 'locale' => $locale, 'metadataOptions' => $metadataOptions), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getMetadata($key, $locale, $metadataOptions);
    }

    public function warmUp($cacheDir)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'warmUp', array('cacheDir' => $cacheDir), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->warmUp($cacheDir);
    }

    public function isOptional()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isOptional', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isOptional();
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

        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $instance, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($instance);

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    public function __construct(\Sulu\Component\Content\Metadata\Factory\StructureMetadataFactoryInterface $structureMetadataFactory, \Sulu\Bundle\AdminBundle\FormMetadata\FormMetadataMapper $formMetadataMapper, \Sulu\Component\Webspace\Manager\WebspaceManagerInterface $webspaceManager, \Sulu\Bundle\AdminBundle\Metadata\FormMetadata\Validation\FieldMetadataValidatorInterface $fieldMetadataValidator, array $defaultTypes, array $locales, string $cacheDir, bool $debug)
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);

        }

        $this->valueHolderedeb5->__construct($structureMetadataFactory, $formMetadataMapper, $webspaceManager, $fieldMetadataValidator, $defaultTypes, $locales, $cacheDir, $debug);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

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

        $realInstanceReflection = new \ReflectionClass('Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader');

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
        \Closure::bind(function (\Sulu\Bundle\AdminBundle\Metadata\FormMetadata\StructureFormMetadataLoader $instance) {
            unset($instance->structureMetadataFactory, $instance->formMetadataMapper, $instance->webspaceManager, $instance->fieldMetadataValidator, $instance->defaultTypes, $instance->locales, $instance->cacheDir, $instance->debug);
        }, $this, 'Sulu\\Bundle\\AdminBundle\\Metadata\\FormMetadata\\StructureFormMetadataLoader')->__invoke($this);
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

if (!\class_exists('StructureFormMetadataLoader_d440bd8', false)) {
    \class_alias(__NAMESPACE__.'\\StructureFormMetadataLoader_d440bd8', 'StructureFormMetadataLoader_d440bd8', false);
}
