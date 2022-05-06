<?php

namespace ContainerRqrmNio;
include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/AbstractAsset.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/Schema.php';
include_once \dirname(__DIR__, 5).'/vendor/jackalope/jackalope-doctrine-dbal/src/Jackalope/Transport/DoctrineDBAL/RepositorySchema.php';

class RepositorySchema_fb41d27 extends \Jackalope\Transport\DoctrineDBAL\RepositorySchema implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Jackalope\Transport\DoctrineDBAL\RepositorySchema|null wrapped object, if the proxy is initialized
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

    public function addToSchema(\Doctrine\DBAL\Schema\Schema $schema)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'addToSchema', array('schema' => $schema), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->addToSchema($schema);
    }

    public function reset()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'reset', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->reset();
    }

    public function hasExplicitForeignKeyIndexes()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'hasExplicitForeignKeyIndexes', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->hasExplicitForeignKeyIndexes();
    }

    public function getNamespaces()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNamespaces', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNamespaces();
    }

    public function getTables()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getTables', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getTables();
    }

    public function getTable($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getTable', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getTable($name);
    }

    public function hasNamespace($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'hasNamespace', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->hasNamespace($name);
    }

    public function hasTable($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'hasTable', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->hasTable($name);
    }

    public function getTableNames()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getTableNames', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getTableNames();
    }

    public function hasSequence($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'hasSequence', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->hasSequence($name);
    }

    public function getSequence($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getSequence', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getSequence($name);
    }

    public function getSequences()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getSequences', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getSequences();
    }

    public function createNamespace($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNamespace', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNamespace($name);
    }

    public function createTable($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createTable', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createTable($name);
    }

    public function renameTable($oldName, $newName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'renameTable', array('oldName' => $oldName, 'newName' => $newName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->renameTable($oldName, $newName);
    }

    public function dropTable($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'dropTable', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->dropTable($name);
    }

    public function createSequence($name, $allocationSize = 1, $initialValue = 1)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createSequence', array('name' => $name, 'allocationSize' => $allocationSize, 'initialValue' => $initialValue), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createSequence($name, $allocationSize, $initialValue);
    }

    public function dropSequence($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'dropSequence', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->dropSequence($name);
    }

    public function toSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'toSql', array('platform' => $platform), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->toSql($platform);
    }

    public function toDropSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'toDropSql', array('platform' => $platform), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->toDropSql($platform);
    }

    public function getMigrateToSql(\Doctrine\DBAL\Schema\Schema $toSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getMigrateToSql', array('toSchema' => $toSchema, 'platform' => $platform), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getMigrateToSql($toSchema, $platform);
    }

    public function getMigrateFromSql(\Doctrine\DBAL\Schema\Schema $fromSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getMigrateFromSql', array('fromSchema' => $fromSchema, 'platform' => $platform), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getMigrateFromSql($fromSchema, $platform);
    }

    public function visit(\Doctrine\DBAL\Schema\Visitor\Visitor $visitor)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'visit', array('visitor' => $visitor), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->visit($visitor);
    }

    public function isInDefaultNamespace($defaultNamespaceName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isInDefaultNamespace', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isInDefaultNamespace($defaultNamespaceName);
    }

    public function getNamespaceName()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getNamespaceName', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getNamespaceName();
    }

    public function getShortestName($defaultNamespaceName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getShortestName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getShortestName($defaultNamespaceName);
    }

    public function getFullQualifiedName($defaultNamespaceName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getFullQualifiedName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getFullQualifiedName($defaultNamespaceName);
    }

    public function isQuoted()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isQuoted', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isQuoted();
    }

    public function getName()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getName', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getName();
    }

    public function getQuotedName(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getQuotedName', array('platform' => $platform), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getQuotedName($platform);
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

        unset($instance->_tables, $instance->_sequences, $instance->_schemaConfig, $instance->_name, $instance->_namespace, $instance->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $instance, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($instance);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $instance, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($instance);

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    public function __construct(array $options = [], ?\Doctrine\DBAL\Connection $connection = null)
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);

        }

        $this->valueHolderedeb5->__construct($options, $connection);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);
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

if (!\class_exists('RepositorySchema_fb41d27', false)) {
    \class_alias(__NAMESPACE__.'\\RepositorySchema_fb41d27', 'RepositorySchema_fb41d27', false);
}
