<?php

namespace ContainerQpTHIsG;

include_once \dirname(__DIR__, 5).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 5).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8c057 = null;
    private $initializera2e88 = null;
    private static $publicPropertiesa4d84 = [
        
    ];
    public function getConnection()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getConnection', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getMetadataFactory', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getExpressionBuilder', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'beginTransaction', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->beginTransaction();
    }
    public function getCache()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getCache', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getCache();
    }
    public function transactional($func)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'transactional', array('func' => $func), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'wrapInTransaction', array('func' => $func), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'commit', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->commit();
    }
    public function rollback()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'rollback', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getClassMetadata', array('className' => $className), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createQuery', array('dql' => $dql), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNamedQuery', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'createQueryBuilder', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'flush', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'clear', array('entityName' => $entityName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->clear($entityName);
    }
    public function close()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'close', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->close();
    }
    public function persist($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'persist', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'remove', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'refresh', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'detach', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'merge', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'contains', array('entity' => $entity), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getEventManager', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getConfiguration', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isOpen', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getUnitOfWork', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getProxyFactory', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'initializeObject', array('obj' => $obj), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'getFilters', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'isFiltersStateClean', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, 'hasFilters', array(), $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        return $this->valueHolder8c057->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializera2e88 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8c057) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8c057 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8c057->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializera2e88 && ($this->initializera2e88->__invoke($valueHolder8c057, $this, '__get', ['name' => $name], $this->initializera2e88) || 1) && $this->valueHolder8c057 = $valueHolder8c057;
        if (isset(self::$publicPropertiesa4d84[$name])) {
            return $this->valueHolder8c057->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
