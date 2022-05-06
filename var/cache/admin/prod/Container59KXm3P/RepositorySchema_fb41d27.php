<?php

namespace Container59KXm3P;

include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/AbstractAsset.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/Schema.php';
include_once \dirname(__DIR__, 5).'/vendor/jackalope/jackalope-doctrine-dbal/src/Jackalope/Transport/DoctrineDBAL/RepositorySchema.php';
class RepositorySchema_fb41d27 extends \Jackalope\Transport\DoctrineDBAL\RepositorySchema implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function addToSchema(\Doctrine\DBAL\Schema\Schema $schema)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'addToSchema', array('schema' => $schema), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->addToSchema($schema);
    }
    public function reset()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'reset', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->reset();
    }
    public function hasExplicitForeignKeyIndexes()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'hasExplicitForeignKeyIndexes', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->hasExplicitForeignKeyIndexes();
    }
    public function getNamespaces()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNamespaces', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNamespaces();
    }
    public function getTables()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getTables', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getTables();
    }
    public function getTable($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getTable', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getTable($name);
    }
    public function hasNamespace($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'hasNamespace', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->hasNamespace($name);
    }
    public function hasTable($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'hasTable', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->hasTable($name);
    }
    public function getTableNames()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getTableNames', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getTableNames();
    }
    public function hasSequence($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'hasSequence', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->hasSequence($name);
    }
    public function getSequence($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getSequence', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getSequence($name);
    }
    public function getSequences()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getSequences', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getSequences();
    }
    public function createNamespace($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNamespace', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNamespace($name);
    }
    public function createTable($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createTable', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createTable($name);
    }
    public function renameTable($oldName, $newName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'renameTable', array('oldName' => $oldName, 'newName' => $newName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->renameTable($oldName, $newName);
    }
    public function dropTable($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'dropTable', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->dropTable($name);
    }
    public function createSequence($name, $allocationSize = 1, $initialValue = 1)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createSequence', array('name' => $name, 'allocationSize' => $allocationSize, 'initialValue' => $initialValue), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createSequence($name, $allocationSize, $initialValue);
    }
    public function dropSequence($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'dropSequence', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->dropSequence($name);
    }
    public function toSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'toSql', array('platform' => $platform), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->toSql($platform);
    }
    public function toDropSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'toDropSql', array('platform' => $platform), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->toDropSql($platform);
    }
    public function getMigrateToSql(\Doctrine\DBAL\Schema\Schema $toSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getMigrateToSql', array('toSchema' => $toSchema, 'platform' => $platform), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getMigrateToSql($toSchema, $platform);
    }
    public function getMigrateFromSql(\Doctrine\DBAL\Schema\Schema $fromSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getMigrateFromSql', array('fromSchema' => $fromSchema, 'platform' => $platform), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getMigrateFromSql($fromSchema, $platform);
    }
    public function visit(\Doctrine\DBAL\Schema\Visitor\Visitor $visitor)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'visit', array('visitor' => $visitor), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->visit($visitor);
    }
    public function isInDefaultNamespace($defaultNamespaceName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isInDefaultNamespace', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isInDefaultNamespace($defaultNamespaceName);
    }
    public function getNamespaceName()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getNamespaceName', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getNamespaceName();
    }
    public function getShortestName($defaultNamespaceName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getShortestName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getShortestName($defaultNamespaceName);
    }
    public function getFullQualifiedName($defaultNamespaceName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getFullQualifiedName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getFullQualifiedName($defaultNamespaceName);
    }
    public function isQuoted()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isQuoted', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isQuoted();
    }
    public function getName()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getName', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getName();
    }
    public function getQuotedName(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getQuotedName', array('platform' => $platform), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getQuotedName($platform);
    }
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
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    public function __construct(array $options = [], ?\Doctrine\DBAL\Connection $connection = null)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);
        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);
        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);
        }
        $this->valueHolder8c057->__construct($options, $connection);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
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
        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
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
        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
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
        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
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

if (!\class_exists('RepositorySchema_fb41d27', false)) {
    \class_alias(__NAMESPACE__.'\\RepositorySchema_fb41d27', 'RepositorySchema_fb41d27', false);
}
