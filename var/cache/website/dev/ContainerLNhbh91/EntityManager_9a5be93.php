<?php

namespace ContainerLNhbh91;
include_once \dirname(__DIR__, 5).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
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

    public function getConnection()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getConnection', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getMetadataFactory', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getExpressionBuilder', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'beginTransaction', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getCache', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'transactional', array('func' => $func), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'commit', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->commit();
    }

    public function rollback()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'rollback', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getClassMetadata', array('className' => $className), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createQuery', array('dql' => $dql), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNamedQuery', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'createQueryBuilder', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'flush', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'clear', array('entityName' => $entityName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->clear($entityName);
    }

    public function close()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'close', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->close();
    }

    public function persist($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'persist', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'remove', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'refresh', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'detach', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'merge', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'contains', array('entity' => $entity), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getEventManager', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getConfiguration', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isOpen', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getUnitOfWork', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getProxyFactory', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'initializeObject', array('obj' => $obj), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'getFilters', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'isFiltersStateClean', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, 'hasFilters', array(), $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        return $this->valueHolderedeb5->hasFilters();
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

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb5509 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderedeb5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderedeb5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderedeb5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb5509 && ($this->initializerb5509->__invoke($valueHolderedeb5, $this, '__get', ['name' => $name], $this->initializerb5509) || 1) && $this->valueHolderedeb5 = $valueHolderedeb5;

        if (isset(self::$publicProperties93d91[$name])) {
            return $this->valueHolderedeb5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
