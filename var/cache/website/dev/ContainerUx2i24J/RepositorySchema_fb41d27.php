<?php

namespace ContainerUx2i24J;
include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/AbstractAsset.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/dbal/src/Schema/Schema.php';
include_once \dirname(__DIR__, 5).'/vendor/jackalope/jackalope-doctrine-dbal/src/Jackalope/Transport/DoctrineDBAL/RepositorySchema.php';

class RepositorySchema_fb41d27 extends \Jackalope\Transport\DoctrineDBAL\RepositorySchema implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Jackalope\Transport\DoctrineDBAL\RepositorySchema|null wrapped object, if the proxy is initialized
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

    public function addToSchema(\Doctrine\DBAL\Schema\Schema $schema)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'addToSchema', array('schema' => $schema), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->addToSchema($schema);
    }

    public function reset()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'reset', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->reset();
    }

    public function hasExplicitForeignKeyIndexes()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'hasExplicitForeignKeyIndexes', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->hasExplicitForeignKeyIndexes();
    }

    public function getNamespaces()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNamespaces', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNamespaces();
    }

    public function getTables()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getTables', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getTables();
    }

    public function getTable($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getTable', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getTable($name);
    }

    public function hasNamespace($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'hasNamespace', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->hasNamespace($name);
    }

    public function hasTable($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'hasTable', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->hasTable($name);
    }

    public function getTableNames()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getTableNames', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getTableNames();
    }

    public function hasSequence($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'hasSequence', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->hasSequence($name);
    }

    public function getSequence($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getSequence', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getSequence($name);
    }

    public function getSequences()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getSequences', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getSequences();
    }

    public function createNamespace($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createNamespace', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createNamespace($name);
    }

    public function createTable($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createTable', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createTable($name);
    }

    public function renameTable($oldName, $newName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'renameTable', array('oldName' => $oldName, 'newName' => $newName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->renameTable($oldName, $newName);
    }

    public function dropTable($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'dropTable', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->dropTable($name);
    }

    public function createSequence($name, $allocationSize = 1, $initialValue = 1)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'createSequence', array('name' => $name, 'allocationSize' => $allocationSize, 'initialValue' => $initialValue), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->createSequence($name, $allocationSize, $initialValue);
    }

    public function dropSequence($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'dropSequence', array('name' => $name), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->dropSequence($name);
    }

    public function toSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'toSql', array('platform' => $platform), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->toSql($platform);
    }

    public function toDropSql(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'toDropSql', array('platform' => $platform), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->toDropSql($platform);
    }

    public function getMigrateToSql(\Doctrine\DBAL\Schema\Schema $toSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getMigrateToSql', array('toSchema' => $toSchema, 'platform' => $platform), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getMigrateToSql($toSchema, $platform);
    }

    public function getMigrateFromSql(\Doctrine\DBAL\Schema\Schema $fromSchema, \Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getMigrateFromSql', array('fromSchema' => $fromSchema, 'platform' => $platform), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getMigrateFromSql($fromSchema, $platform);
    }

    public function visit(\Doctrine\DBAL\Schema\Visitor\Visitor $visitor)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'visit', array('visitor' => $visitor), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->visit($visitor);
    }

    public function isInDefaultNamespace($defaultNamespaceName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isInDefaultNamespace', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isInDefaultNamespace($defaultNamespaceName);
    }

    public function getNamespaceName()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getNamespaceName', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getNamespaceName();
    }

    public function getShortestName($defaultNamespaceName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getShortestName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getShortestName($defaultNamespaceName);
    }

    public function getFullQualifiedName($defaultNamespaceName)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getFullQualifiedName', array('defaultNamespaceName' => $defaultNamespaceName), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getFullQualifiedName($defaultNamespaceName);
    }

    public function isQuoted()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'isQuoted', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->isQuoted();
    }

    public function getName()
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getName', array(), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getName();
    }

    public function getQuotedName(\Doctrine\DBAL\Platforms\AbstractPlatform $platform)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, 'getQuotedName', array('platform' => $platform), $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        return $this->valueHolder4a50a->getQuotedName($platform);
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

        $instance->initializer853e4 = $initializer;

        return $instance;
    }

    public function __construct(array $options = [], ?\Doctrine\DBAL\Connection $connection = null)
    {
        static $reflection;

        if (! $this->valueHolder4a50a) {
            $reflection = $reflection ?? new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');
            $this->valueHolder4a50a = $reflection->newInstanceWithoutConstructor();
        unset($this->_tables, $this->_sequences, $this->_schemaConfig, $this->_name, $this->_namespace, $this->_quoted);

        \Closure::bind(function (\Jackalope\Transport\DoctrineDBAL\RepositorySchema $instance) {
            unset($instance->connection, $instance->maxIndexLength);
        }, $this, 'Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema')->__invoke($this);

        \Closure::bind(function (\Doctrine\DBAL\Schema\Schema $instance) {
            unset($instance->namespaces);
        }, $this, 'Doctrine\\DBAL\\Schema\\Schema')->__invoke($this);

        }

        $this->valueHolder4a50a->__construct($options, $connection);
    }

    public function & __get($name)
    {
        $this->initializer853e4 && ($this->initializer853e4->__invoke($valueHolder4a50a, $this, '__get', ['name' => $name], $this->initializer853e4) || 1) && $this->valueHolder4a50a = $valueHolder4a50a;

        if (isset(self::$publicPropertiesa31b3[$name])) {
            return $this->valueHolder4a50a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

        $realInstanceReflection = new \ReflectionClass('Jackalope\\Transport\\DoctrineDBAL\\RepositorySchema');

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

if (!\class_exists('RepositorySchema_fb41d27', false)) {
    \class_alias(__NAMESPACE__.'\\RepositorySchema_fb41d27', 'RepositorySchema_fb41d27', false);
}
